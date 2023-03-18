<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class DetailBlogController extends Controller
{
    public function detail(Request $request, $slug){
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('pages.blog_page', compact('blog'));
    }
}
