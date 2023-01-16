<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
    //
    public function index(){

        return view('index');
    }
    public function about(){
        return view('layouts.about');
    }
    public function category1(){
        return view('layouts.components.category1')->with('posts', Post::orderBy('updated_at', 'DESC')->get());
    }
    public function category2(){
        return view('layouts.components.category2');
    }
    public function category3(){
        return view('layouts.components.category3');
    }
    public function category4(){
        return view('layouts.components.category4');
    }
}
