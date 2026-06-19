<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function index(): View
    {
        return view('admin.news.index', [
            'items' => News::latest()->paginate(15),
        ]);
    }

    public function create(): View
    {
        return view('admin.news.form', ['item' => new News]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'title'        => ['required', 'string', 'max:255'],
            'excerpt'      => ['nullable', 'string', 'max:500'],
            'body'         => ['required', 'string'],
            'image_url'    => ['nullable', 'url', 'max:500'],
            'is_published' => ['boolean'],
        ]);

        $data['slug']         = Str::slug($data['title']);
        $data['is_published'] = $request->boolean('is_published');
        $data['published_at'] = $data['is_published'] ? now() : null;

        News::create($data);

        return redirect()->route('admin.news.index')->with('success', 'News item created.');
    }

    public function edit(News $news): View
    {
        return view('admin.news.form', ['item' => $news]);
    }

    public function update(Request $request, News $news): RedirectResponse
    {
        $data = $request->validate([
            'title'        => ['required', 'string', 'max:255'],
            'excerpt'      => ['nullable', 'string', 'max:500'],
            'body'         => ['required', 'string'],
            'image_url'    => ['nullable', 'url', 'max:500'],
            'is_published' => ['boolean'],
        ]);

        $data['is_published'] = $request->boolean('is_published');
        if ($data['is_published'] && ! $news->published_at) {
            $data['published_at'] = now();
        }

        $news->update($data);

        return redirect()->route('admin.news.index')->with('success', 'News item updated.');
    }

    public function destroy(News $news): RedirectResponse
    {
        $news->delete();
        return redirect()->route('admin.news.index')->with('success', 'News item deleted.');
    }
}
