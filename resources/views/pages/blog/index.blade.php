<x-layouts.app title="Blog">

{{-- ── Page Banner ─────────────────────────────────────────── --}}
<section class="bg-slate-900 pt-36 pb-14">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <nav class="flex items-center gap-2 text-xs text-white/35 mb-5">
            <a href="/" class="hover:text-brand transition-colors">Home</a>
            <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
            <span class="text-brand">Blog</span>
        </nav>
        <h1 class="text-4xl lg:text-5xl font-black text-white mb-3">Insights & Guides</h1>
        <p class="text-white/55 text-lg max-w-xl">Practical IT knowledge, tips, and stories from the ShebaTech team.</p>
    </div>
</section>

{{-- ── Blog grid ───────────────────────────────────────────── --}}
<section class="bg-slate-50 py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        @if($blogs->isEmpty())
        <div class="text-center py-24 bg-white rounded-2xl border border-slate-200">
            <div class="w-16 h-16 rounded-2xl bg-brand/10 flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-brand/40" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
            </div>
            <p class="text-slate-400 text-base font-medium">No posts published yet.</p>
            <p class="text-slate-400 text-sm mt-1">Check back soon for IT tips and guides.</p>
        </div>

        @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($blogs as $blog)
            <a href="{{ route('blog.show', $blog->slug) }}" class="group bg-white border border-slate-200 hover:border-brand/40 rounded-2xl overflow-hidden transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-brand/5 flex flex-col">

                {{-- Thumbnail --}}
                @if($blog->image_url)
                <div class="aspect-video overflow-hidden">
                    <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                @else
                <div class="aspect-video bg-linear-to-br from-brand/8 to-slate-100 flex items-center justify-center">
                    <svg class="w-10 h-10 text-brand/25" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                </div>
                @endif

                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-2 mb-3">
                        @if($blog->category)
                        <span class="text-[10px] font-bold uppercase tracking-wider text-brand bg-brand/10 border border-brand/20 px-2.5 py-1 rounded-full">{{ $blog->category }}</span>
                        @endif
                        <span class="text-xs text-slate-400">{{ $blog->published_at?->format('d M Y') }}</span>
                    </div>

                    <h2 class="text-slate-900 font-bold text-base leading-snug mb-2 group-hover:text-brand transition-colors">{{ $blog->title }}</h2>

                    @if($blog->excerpt)
                    <p class="text-slate-500 text-sm leading-relaxed flex-1 line-clamp-3">{{ $blog->excerpt }}</p>
                    @endif

                    <div class="flex items-center justify-between mt-5 pt-4 border-t border-slate-100">
                        <span class="text-xs text-slate-400 font-medium">{{ $blog->author }}</span>
                        <span class="text-brand text-xs font-semibold flex items-center gap-1 group-hover:gap-2 transition-all">
                            Read more
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        @if($blogs->hasPages())
        <div class="mt-12 flex justify-center">
            {{ $blogs->links() }}
        </div>
        @endif

        @endif

    </div>
</section>

{{-- ── CTA ──────────────────────────────────────────────────── --}}
<section class="bg-white border-t border-slate-100 py-14">
    <div class="max-w-3xl mx-auto px-6 text-center">
        <p class="text-slate-500 text-sm mb-4">Have an IT challenge? Our team can help.</p>
        <a href="/contact" class="inline-flex items-center gap-2 px-7 py-3 rounded-xl bg-brand text-ink font-bold text-sm hover:bg-brand-dark transition-all shadow-md shadow-brand/20">
            Get a Free Quote
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
        </a>
    </div>
</section>

</x-layouts.app>
