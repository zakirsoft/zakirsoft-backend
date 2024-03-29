<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\PortfoiloImages;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:portfolio show|portfolio list|portfolio create|portfolio edit|portfolio delete']);
    }

    public function index()
    {
        $portfolio_list = Portfolio::oldest('order')->get();
        return view('admin.portfolio.index', compact('portfolio_list'));
    }

    public function create()
    {
        $category_list = PortfolioCategory::where('status', 1)->get();
        return view('admin.portfolio.create', compact('category_list'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'project_length' => 'required',
            'our_role' => 'required',
            'tool_used' => 'required',
            'client_name' => 'required',
            'client_email' => 'required',
            'category_id' => 'required',
            'image' => 'required|image|max:3072',
        ], [
            'title.required' => 'Title field is required!',
            'project_length.required' => 'Project length field is required!',
            'our_role.required' => 'Our role field is required!',
            'tool_used.required' => 'Tool used field is required!',
            'client_name.required' => 'Client name field is required!',
            'client_email.required' => 'Client email field is required!',
            'category_id.required' => 'Work type field is required!',
            'image.mimes' => 'Image supported format jpeg, png, svg, webp',
            'image.size' => 'Image must be 3 or less than 3 MB',
            'image.required' => 'image field is required!',
        ]);

        $portfolio = Portfolio::create([
            'title' => $request->title,
            'image' => 'image',
            'title_slug' => Str::slug($request->title),
            'description' => $request->description,
            'live_link' => $request->live_link,
            'bahance_link' => $request->bahance_link,
            'project_length' => $request->project_length,
            'our_role' => $request->our_role,
            'tool_used' => $request->tool_used,
            'client_name' => $request->client_email,
            'client_email' => $request->client_email,
            'category_id' => $request->category_id,
            'created_at' => Carbon::now(),
        ]);

        if ($request->has('image')) {
            $image = $request->image;
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

            Storage::putFileAs('portfolio', $image, $imageName);
            $portfolio->image = 'storage/portfolio/' . $imageName;
            $portfolio->save();
        }

        $multiple_image = $request->file('m_image');
        if ($multiple_image) {
            foreach ($multiple_image as $multi_img) {
                $imageName = time() . '_' . uniqid() . '.' . $multi_img->getClientOriginalExtension();
                Storage::putFileAs('portfolio/multiple', $multi_img, $imageName);
                $db_image_name = 'storage/portfolio/multiple/' . $imageName;
                PortfoiloImages::create([
                    'portfolio_id' => $portfolio->id,
                    'm_image' =>  $db_image_name,
                ]);
            }
        }

        session()->flash('success', 'Portfolio added Successfully!');
        return redirect()->route('portfolio.create');
    }

    public function show($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $category_list = PortfolioCategory::where('status', 1)->get();
        $m_portfolio_image = PortfoiloImages::where('portfolio_id', $portfolio->id)->get();

        return view('admin.portfolio.show', compact('portfolio', 'category_list', 'm_portfolio_image'));
    }

    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $category_list = PortfolioCategory::where('status', 1)->get();
        return view('admin.portfolio.edit', compact('portfolio', 'category_list'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'project_length' => 'required',
            'our_role' => 'required',
            'tool_used' => 'required',
            'client_name' => 'required',
            'client_email' => 'required',
        ], [
            'title.required' => 'Title field is required!',
            'description.required' => 'Description field is required!',
            'project_length.required' => 'Project length field is required!',
            'our_role.required' => 'Our role field is required!',
            'tool_used.required' => 'Tool used field is required!',
            'client_name.required' => 'Client name field is required!',
            'client_email.required' => 'Client email field is required!',
        ]);

        $portfolio = Portfolio::findOrFail($id);

        $portfolio->update([
            'title' => $request->title,
            'title_slug' => Str::slug($request->title),
            'description' => $request->description,
            'live_link' => $request->live_link,
            'bahance_link' => $request->bahance_link,
            'project_length' => $request->project_length,
            'our_role' => $request->our_role,
            'tool_used' => $request->tool_used,
            'client_name' => $request->client_email,
            'client_email' => $request->client_email,
            'category_id' => $request->category_id,
            'created_at' => Carbon::now()
        ]);

        if ($request->has('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:3072'
            ], [
                'image.size' => 'Image must be 3 or less than 3 MB',
                'image.mimes' => 'Image supported format jpeg, png, svg, webp',
                'image.required' => 'image field is required!',
            ]);

            if (file_exists($portfolio->image)) {
                unlink(base_path('public/' . $portfolio->image));
            }

            $image = $request->image;
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('/portfolio', $image, $imageName);
            $portfolio->image = 'storage/portfolio/' . $imageName;
            $portfolio->save();
        }

        session()->flash('success', 'Portfolio Updated Successfully With Image!');
        return redirect()->route('portfolio.index');
    }

    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);

        if (file_exists($portfolio->image)) {
            unlink(public_path($portfolio->image));
        }

        $portfolio->delete();

        session()->flash('success', 'Portfolio Deleted Successfully!');
        return redirect()->route('portfolio.index');
    }


    public function sorting(Request $request)
    {
        $data = $request->order;
        $tasks = Portfolio::all();

        foreach ($tasks as $task) {
            $task->timestamps = false;
            $id = $task->id;

            foreach ($data as $order) {
                if ($order['id'] == $id) {
                    $task->update(['order' => $order['position']]);
                }
            }
        }

        return response()->json(['message' => 'Portfolio Sorted Successfully!']);
    }
}
