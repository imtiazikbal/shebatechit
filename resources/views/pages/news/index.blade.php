<x-layouts.app title="News">

{{-- ── Page Banner ─────────────────────────────────────────── --}}
<section class="bg-slate-900 pt-36 pb-14">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <nav class="flex items-center gap-2 text-xs text-white/35 mb-5">
            <a href="/" class="hover:text-brand transition-colors">Home</a>
            <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
            <span class="text-brand">News</span>
        </nav>
        <h1 class="text-4xl lg:text-5xl font-black text-white mb-3">Latest News</h1>
        <p class="text-white/55 text-lg max-w-xl">Updates, announcements, and industry news from ShebaTech.</p>
    </div>
</section>

{{-- ── News list ───────────────────────────────────────────── --}}
<section class="bg-slate-50 py-20">
    <div class="max-w-5xl mx-auto px-6 lg:px-8">

        @if($items->isEmpty())
        <div class="text-center py-24 bg-white rounded-2xl border border-slate-200">
            <div class="w-16 h-16 rounded-2xl bg-brand/10 flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-brand/40" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
            </div>
            <p class="text-slate-400 text-base font-medium">No news published yet.</p>
            <p class="text-slate-400 text-sm mt-1">Check back soon for updates and announcements.</p>
        </div>

        @else
        <div class="space-y-4">
            @foreach($items as $item)
            <a href="{{ route('news.show', $item->slug) }}" class="group flex gap-5 bg-white border border-slate-200 hover:border-brand/40 rounded-2xl p-5 transition-all hover:shadow-lg hover:shadow-brand/5">

                {{-- Thumbnail --}}
                @if($item->image_url)
                <div class="w-28 h-20 rounded-xl overflow-hidden shrink-0 hidden sm:block">
                    <img src="{{ $item->image_url }}" alt="{{ $item->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                @else
                <div class="w-28 h-20 rounded-xl bg-brand/8 border border-brand/15 hidden sm:flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6 text-brand/30" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                </div>
                @endif

                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-2 mb-1.5">
                        <span class="text-xs text-slate-400">{{ $item->published_at?->format('d M Y') }}</span>
                        @if($item->category)
                        <span class="text-[10px] font-bold uppercase tracking-wider text-brand bg-brand/10 px-2 py-0.5 rounded-full">{{ $item->category }}</span>
                        @endif
                    </div>
                    <h2 class="text-slate-900 font-bold text-base leading-snug group-hover:text-brand transition-colors mb-1">{{ $item->title }}</h2>
                    @if($item->excerpt)
                    <p class="text-slate-500 text-sm leading-relaxed line-clamp-2">{{ $item->excerpt }}</p>
                    @endif
                </div>

                <div class="flex items-center shrink-0 self-center ml-2">
                    <div class="w-8 h-8 rounded-xl bg-slate-100 group-hover:bg-brand/10 flex items-center justify-center transition-colors">
                        <svg class="w-4 h-4 text-slate-400 group-hover:text-brand transition-colors" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                    </div>
                </div>

            </a>
            @endforeach
        </div>

        @if($items->hasPages())
        <div class="mt-10 flex justify-center">
            {{ $items->links() }}
        </div>
        @endif

        @endif

    </div>
</section>

{{-- ── CTA ──────────────────────────────────────────────────── --}}
<section class="bg-white border-t border-slate-100 py-14">
    <div class="max-w-3xl mx-auto px-6 text-center">
        <p class="text-slate-500 text-sm mb-4">Ready to upgrade your IT infrastructure?</p>
        <a href="/contact" class="inline-flex items-center gap-2 px-7 py-3 rounded-xl bg-brand text-ink font-bold text-sm hover:bg-brand-dark transition-all shadow-md shadow-brand/20">
            Contact ShebaTech
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
        </a>
    </div>
</section>

</x-layouts.app>
