<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Artical;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show(){
        $articals= Artical::all();
        $categories= Category::all();
        return view('blog',['articals'=> $articals],['categories'=> $categories]);
    }
}
