<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except'=>['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'details'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg,svg,gif|max:5084',
            'description'=>'required',
        ]);
        // Give image name unique  id
        $newImageName= uniqid() . '-' . $request->title . '-' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);

        Post::create([
            'title'=>$request->input('title'),
            'details'=>$request->input('details'),
            'description'=>$request->input('description'),
            'slug'=>SlugService::createSlug(Post::class, 'slug', $request->title),
            'image_path'=>$newImageName,
            'user_id'=>auth()->user()->id
        ]);
        return redirect('/')->with('message', 'Your Post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('layouts.blog.show')
        ->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('layouts.blog.edit')
        ->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title'=>'required',
            'details'=>'required',
            'description'=>'required',
        ]);
        Post::where('slug', $slug)
        ->update([
            'title'=>$request->input('title'),
            'details'=>$request->input('details'),
            'description'=>$request->input('description'),
            'slug'=>SlugService::createSlug(Post::class, 'slug', $request->title),
            // 'image_path'=>$newImageName,
            'user_id'=>auth()->user()->id
        ]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Post::where('slug', $slug);
        $post->delete();

        return redirect('/');
    }
}
