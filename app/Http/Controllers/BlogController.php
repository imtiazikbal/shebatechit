<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        return view('pages.blog.index', [
            'blogs' => Blog::published()->paginate(9),
        ]);
    }

    public function show(string $slug): View
    {
        $blog = Blog::where('slug', $slug)->where('is_published', true)->firstOrFail();
        return view('pages.blog.show', compact('blog'));
    }
}
