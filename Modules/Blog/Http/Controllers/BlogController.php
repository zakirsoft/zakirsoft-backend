<?php

namespace Modules\Blog\Http\Controllers;

use App\Actions\Blog\CreatePost;
use App\Actions\Blog\DeletePost;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Modules\Blog\Entities\Post;
use Modules\Blog\Http\Requests\PostFormRequest;
use Modules\Category\Entities\Category;
use Modules\Tag\Entities\Tag;

class BlogController extends Controller
{
    use ValidatesRequests;
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $posts = Post::with('tags')->get();
        return view('blog::blog.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $tags = Tag::all();

        return view('blog::blog.create',compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     * @param PostFormRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PostFormRequest $request)
    {
        $post = CreatePost::create($request);

        if ($post) {
            flashSuccess('Post Created Successfully');
            return back();
        }else{
            flashError();
            return back();
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('blog::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('blog::blog.edit', compact('categories', 'tags', 'post'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param Post $post
     * @return Renderable
     * @throws \Exception
     */
    public function destroy(Post $post)
    {
        $post = DeletePost::delete($post);

        if ($post) {
            flashSuccess('Post Deleted Successfully');
            return back();
        }else{
            flashError();
            return back();
        }
    }
}
