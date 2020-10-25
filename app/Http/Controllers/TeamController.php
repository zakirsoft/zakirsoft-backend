<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\Template\Template;

use function Symfony\Component\String\b;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:team show|team create|team edit|team delete']);
    }

    public function index()
    {
        $team = Team::all();
        return view('admin.team.index')->with('teams', $team);
    }

    public function create()
    {
        return view('admin.team.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'position'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10048'
        ]);

        $team = Team::create([
            'name'=> $request->name,
            'position'=> $request->position,
            'image'=>"image",
        ]);

        if( $request->has('image')){
            $image = $request->image;
            $imageName = time() . '_' . uniqid() .'.'. $image->getClientOriginalExtension();
            Storage::putFileAs('team', $image, $imageName);
            $team->image = 'storage/team/'. $imageName;
            $team->save();
        }

        session()->flash('success', 'Team Member Added Successfully!');
        return redirect()->route('team.index');
    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('admin.team.edit')->with('teams',$team);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
        ]);

        if( $request->has('image')){

            $old_image = Team::find($id);

            if (file_exists($old_image->image)) {
                unlink(public_path($old_image->image));
            }

            $image = $request->image;
            $imageName = time() . '_' . uniqid() .'.'. $image->getClientOriginalExtension();
            Storage::putFileAs('/team', $image, $imageName);
            $image_address = 'storage/team/'. $imageName;

            Team::findOrFail($id)->update([
                'name' => $request->name,
                'position' => $request->position,
                'image' => $image_address,
            ]);

            session()->flash('success', 'Team Content Updated Successfully With Image!');
            return redirect()->route('team.index');
        }else{
            Team::findOrFail($id)->update([
                'name' => $request->name,
                'position' =>  $request->position,
            ]);

            session()->flash('success', 'Team Content Updated Successfully Without Image!');
            return redirect()->route('team.index');
        }

        session()->flash('success', 'Member Update Successfully!');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $team = Team::find($id);

        if(file_exists($team->image)){
            unlink(base_path('public/'.$team->image));
            $team->delete();
        }
        $team->delete();
        
        session()->flash('success', 'Member Deleted Successfully!');
        return back();
    }
}
