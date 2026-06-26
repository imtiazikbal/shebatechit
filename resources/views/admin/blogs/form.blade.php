@php $editing = $blog->exists; @endphp
<x-admin.layout title="{{ $editing ? 'Edit Post' : 'New Post' }}">

    <div class="max-w-3xl">
        <a href="{{ route('admin.blogs.index') }}" class="inline-flex items-center gap-2 text-slate-400 hover:text-slate-700 text-sm mb-6 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            Back to posts
        </a>

        <form
            method="POST"
            action="{{ $editing ? route('admin.blogs.update', $blog) : route('admin.blogs.store') }}"
            enctype="multipart/form-data"
            class="space-y-5"
        >
            @csrf
            @if($editing) @method('PUT') @endif

            <div class="bg-white rounded-2xl border border-slate-200 p-6 space-y-5">

                <div>
                    <label class="block text-xs font-semibold text-slate-500 uppercase tracking-widest mb-1.5">Title *</label>
                    <input type="text" name="title" value="{{ old('title', $blog->title) }}"
                        class="w-full border border-slate-200 rounded-xl px-4 py-3 text-slate-900 text-sm focus:outline-none focus:border-brand focus:ring-2 focus:ring-brand/20 transition-all @error('title') border-red-300 @enderror"
                        placeholder="Post title…">
                    @error('title')<p class="mt-1 text-xs text-red-500">{{ $message }}</p>@enderror
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-500 uppercase tracking-widest mb-1.5">Category</label>
                        <input type="text" name="category" value="{{ old('category', $blog->category ?? 'General') }}"
                            class="w-full border border-slate-200 rounded-xl px-4 py-3 text-slate-900 text-sm focus:outline-none focus:border-brand focus:ring-2 focus:ring-brand/20 transition-all"
                            placeholder="e.g. Networking, Security">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-500 uppercase tracking-widest mb-1.5">Author</label>
                        <input type="text" name="author" value="{{ old('author', $blog->author ?? 'ShebaTech Team') }}"
                            class="w-full border border-slate-200 rounded-xl px-4 py-3 text-slate-900 text-sm focus:outline-none focus:border-brand focus:ring-2 focus:ring-brand/20 transition-all">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-500 uppercase tracking-widest mb-1.5">Excerpt <span class="normal-case font-normal">(short summary)</span></label>
                    <textarea name="excerpt" rows="2"
                        class="w-full border border-slate-200 rounded-xl px-4 py-3 text-slate-900 text-sm resize-none focus:outline-none focus:border-brand focus:ring-2 focus:ring-brand/20 transition-all"
                        placeholder="One or two sentences for the card preview…">{{ old('excerpt', $blog->excerpt) }}</textarea>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-500 uppercase tracking-widest mb-1.5">Body *</label>
                    <textarea name="body" rows="14"
                        class="w-full border border-slate-200 rounded-xl px-4 py-3 text-slate-900 text-sm font-mono resize-y focus:outline-none focus:border-brand focus:ring-2 focus:ring-brand/20 transition-all @error('body') border-red-300 @enderror"
                        placeholder="Write your post content here…">{{ old('body', $blog->body) }}</textarea>
                    @error('body')<p class="mt-1 text-xs text-red-500">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-500 uppercase tracking-widest mb-1.5">Cover Image <span class="normal-case font-normal">(JPG, PNG, WEBP — max 2MB)</span></label>

                    @if($editing && $blog->image)
                    <div class="mb-3 flex items-center gap-4">
                        <img src="{{ Storage::url($blog->image) }}" alt="Current cover" class="h-24 w-40 object-cover rounded-xl border border-slate-200">
                        <p class="text-xs text-slate-400">Current image — upload a new one to replace it.</p>
                    </div>
                    @endif

                    <input type="file" name="image" accept="image/*"
                        class="w-full rounded-xl px-4 py-2.5 text-slate-700 text-sm border
                               file:mr-4 file:py-1.5 file:px-4 file:rounded-lg file:border-0
                               file:text-xs file:font-semibold file:bg-brand/10 file:text-brand
                               hover:file:bg-brand/20 transition-all
                               {{ $errors->has('image') ? 'border-red-300' : 'border-slate-200' }}">
                    @error('image')<p class="mt-1 text-xs text-red-500">{{ $message }}</p>@enderror
                </div>

            </div>

            <div class="bg-white rounded-2xl border border-slate-200 p-6 flex items-center justify-between">
                <label class="flex items-center gap-3 cursor-pointer">
                    <div class="relative">
                        <input type="hidden" name="is_published" value="0">
                        <input type="checkbox" name="is_published" value="1" class="sr-only peer"
                            {{ old('is_published', $blog->is_published) ? 'checked' : '' }}>
                        <div class="w-10 h-6 bg-slate-200 peer-checked:bg-brand rounded-full transition-colors"></div>
                        <div class="absolute top-1 left-1 w-4 h-4 bg-white rounded-full shadow transition-transform peer-checked:translate-x-4"></div>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-slate-800">Publish</p>
                        <p class="text-xs text-slate-400">Make this post visible on the website</p>
                    </div>
                </label>

                <button type="submit"
                    class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-ink text-white font-bold text-sm hover:bg-slate-800 transition-all">
                    {{ $editing ? 'Save Changes' : 'Create Post' }}
                </button>
            </div>

        </form>
    </div>

</x-admin.layout>
