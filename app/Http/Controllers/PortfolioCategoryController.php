<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortfolioCategory;

class PortfolioCategoryController extends Controller
{





  function index(){
    $portfolio_category = PortfolioCategory::latest()->SimplePaginate(10);
    return view('admin.portfolio.category.index',compact('portfolio_category'));
  }

  function create(Request $request){

      $request->validate([
          'p_category_name' => 'required',
    ],[
        'p_category_name.required' => 'Portfolio category field is required.',
        ]);

        PortfolioCategory::create([
            'p_category_name' => $request->p_category_name,
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
                 session()->flash('danger', 'Portfolio Category Deleted Successfully!');
                 return redirect()->route('portfolio.category.index');
            }
        }










}
