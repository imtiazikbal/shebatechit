<x-layouts.app title="{{ $item->title }}">

<section class="relative bg-ink pt-32 pb-16 overflow-hidden">
    <div class="absolute inset-0 dot-grid pointer-events-none opacity-60"></div>
    <div class="relative max-w-3xl mx-auto px-6 lg:px-8">
        <a href="{{ route('news.index') }}" class="inline-flex items-center gap-2 text-white/40 hover:text-brand text-sm mb-8 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            Back to News
        </a>
        <p class="text-brand/60 text-xs font-mono uppercase tracking-widest mb-4">{{ $item->published_at?->format('d M Y') }}</p>
        <h1 class="text-4xl lg:text-5xl font-black text-white leading-tight">{{ $item->title }}</h1>
    </div>
</section>

@if($item->image_url)
<div class="bg-slate-950">
    <div class="max-w-3xl mx-auto px-6 lg:px-8 py-8">
        <img src="{{ $item->image_url }}" alt="{{ $item->title }}" class="w-full rounded-2xl object-cover max-h-80">
    </div>
</div>
@endif

<article class="bg-white py-16">
    <div class="max-w-3xl mx-auto px-6 lg:px-8 prose prose-slate prose-lg max-w-none">
        {!! nl2br(e($item->body)) !!}
    </div>
</article>

<section class="bg-slate-50 py-16 border-t border-slate-200">
    <div class="max-w-3xl mx-auto px-6 lg:px-8 text-center">
        <h3 class="text-xl font-black text-slate-900 mb-2">Stay connected</h3>
        <p class="text-slate-500 mb-6">Get in touch with us for any queries or support needs.</p>
        <a href="/contact" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-brand text-ink font-bold text-sm hover:bg-brand-dark transition-all">
            Contact Us <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
        </a>
    </div>
</section>

</x-layouts.app>
