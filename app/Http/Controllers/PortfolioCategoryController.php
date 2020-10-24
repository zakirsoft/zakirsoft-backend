<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortfolioCategory;

class PortfolioCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
        function index(){
            $portfolio_category = PortfolioCategory::latest()->SimplePaginate(10);
            return view('admin.portfolio.category.index',compact('portfolio_category'));
        }

        function create(Request $request){

            $request->validate([
                'name' => 'required',
            ],[
                'name.required' => 'Portfolio category field is required.',
            ]);

            PortfolioCategory::create([
                'name' => $request->name,
            ]);

            session()->flash('success', 'Portfolio Category Added Successfully!');
            return redirect()->route('portfolio.category.index');

        }

        function inactive($id){
           $p_category = PortfolioCategory::findOrFail($id);

           if ($p_category) {
                $p_category->update([
                    'status' => 2
                ]);
                session()->flash('warning', 'Portfolio Category Inactive Successfully!');
                return redirect()->route('portfolio.category.index');
           }

        }

        function active($id){
            $p_category = PortfolioCategory::findOrFail($id);

            if ($p_category) {
                 $p_category->update([ 'status' => 1 ]);
                 session()->flash('success', 'Portfolio Category Active Successfully!');
                 return redirect()->route('portfolio.category.index');
            }
        }

        function destroy($id){
            $p_category = PortfolioCategory::findOrFail($id);

            if ($p_category) {
                 $p_category->delete();
                 session()->flash('success', 'Portfolio Category Deleted Successfully!');
                 return redirect()->route('portfolio.category.index');
            }
        }

        function edit($id){
            $p_category_edit = PortfolioCategory::findOrFail($id);
            return view('admin.portfolio.category.edit',compact('p_category_edit'));
        }

        function update(Request $request,$id){

            $request->validate([
                'name' => 'required',
          ],[
              'name.required' => 'Portfolio category field is required.',
              ]);

            PortfolioCategory::findOrFail($id)->update(['name' => $request->name]);
            session()->flash('success', 'Portfolio Category Updated Successfully!');
            return redirect()->route('portfolio.category.index');
        }










}
