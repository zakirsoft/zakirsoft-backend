<?php

namespace App\Http\Controllers;

use App\Actions\File\FileDelete;
use App\Actions\File\FileUpload;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::oldest('order')->get();
        return view('admin.career.gallery.index', compact('galleries'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach ($request->file as $image) {
            if ($image) {
                $url = FileUpload::upload($image, 'gallery');
                Gallery::create(['image' => $url]);
            }
        }

        return response()->json(['message' => 'Gallery Images Added Successfully']);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        if ($gallery) {
            FileDelete::delete($gallery->image);
        }

        $gallery->delete();

        session()->flash('success', 'Gallery Image Deleted Successfully!');
        return back();
    }

    /**
     * List Sorting.
     *
     * @param  \App\Models\Subcompany  $subcompany
     * @return \Illuminate\Http\Response
     */
    public function sorting(Request $request)
    {
        $tasks = Gallery::all();
        foreach ($tasks as $task) {
            $task->timestamps = false; // To disable update_at field updation
            $id = $task->id;

            foreach ($request->order as $order) {
                if ($order['id'] == $id) {
                    $task->update(['order' => $order['position']]);
                }
            }
        }

        return response()->json(['message' => 'Gallry Image Sorted Successfully!']);
    }
}
