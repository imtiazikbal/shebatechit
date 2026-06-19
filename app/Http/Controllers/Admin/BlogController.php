<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        return view('admin.blogs.index', [
            'blogs' => Blog::latest()->paginate(15),
        ]);
    }

    public function create(): View
    {
        return view('admin.blogs.form', ['blog' => new Blog]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'title'        => ['required', 'string', 'max:255'],
            'category'     => ['nullable', 'string', 'max:100'],
            'author'       => ['nullable', 'string', 'max:100'],
            'excerpt'      => ['nullable', 'string', 'max:500'],
            'body'         => ['required', 'string'],
            'image_url'    => ['nullable', 'url', 'max:500'],
            'is_published' => ['boolean'],
        ]);

        $data['slug']         = Str::slug($data['title']);
        $data['is_published'] = $request->boolean('is_published');
        $data['published_at'] = $data['is_published'] ? now() : null;

        Blog::create($data);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post created.');
    }

    public function edit(Blog $blog): View
    {
        return view('admin.blogs.form', compact('blog'));
    }

    public function update(Request $request, Blog $blog): RedirectResponse
    {
        $data = $request->validate([
            'title'        => ['required', 'string', 'max:255'],
            'category'     => ['nullable', 'string', 'max:100'],
            'author'       => ['nullable', 'string', 'max:100'],
            'excerpt'      => ['nullable', 'string', 'max:500'],
            'body'         => ['required', 'string'],
            'image_url'    => ['nullable', 'url', 'max:500'],
            'is_published' => ['boolean'],
        ]);

        $data['is_published'] = $request->boolean('is_published');
        if ($data['is_published'] && ! $blog->published_at) {
            $data['published_at'] = now();
        }

        $blog->update($data);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post updated.');
    }

    public function destroy(Blog $blog): RedirectResponse
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog post deleted.');
    }
}
