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
}
