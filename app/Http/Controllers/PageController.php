<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function blog()
    {
        $blogs = Blog::where('status', true)->latest('published_at')->paginate(9);
        $popularPosts = Blog::where('status', true)->latest('published_at')->take(3)->get();
        return view('pages.blog', compact('blogs', 'popularPosts'));
    }
}
