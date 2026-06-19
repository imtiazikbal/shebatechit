<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function index(): View
    {
        return view('pages.news.index', [
            'items' => News::published()->paginate(10),
        ]);
    }

    public function show(string $slug): View
    {
        $item = News::where('slug', $slug)->where('is_published', true)->firstOrFail();
        return view('pages.news.show', compact('item'));
    }
}
