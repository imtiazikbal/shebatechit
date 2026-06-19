<header x-data="{ open: false, scrolled: false }" x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 50 })" class="fixed top-0 inset-x-0 z-50">

    {{-- ── Top contact bar (desktop only) ── --}}
    <div class="bg-slate-900 border-b border-white/5">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="hidden md:flex items-center justify-between h-9 text-[11px] text-white/45">

                <div class="flex items-center gap-5">
                    <a href="tel:+8801XXXXXXXXX" class="flex items-center gap-1.5 hover:text-brand transition-colors">
                        <svg class="w-3 h-3 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        +880 1XXX-XXXXXX
                    </a>
                    <span class="h-3 w-px bg-white/10"></span>
                    <a href="mailto:info@shebatech.com" class="flex items-center gap-1.5 hover:text-brand transition-colors">
                        <svg class="w-3 h-3 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        info@shebatech.com
                    </a>
                </div>

                <div class="flex items-center gap-4">
                    <span class="flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-green-400 animate-pulse shrink-0"></span>
                        24/7 Support Available
                    </span>
                    <span class="h-3 w-px bg-white/10"></span>
                    <div class="flex items-center gap-2.5">
                        <a href="#" aria-label="Facebook" class="hover:text-brand transition-colors">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" aria-label="WhatsApp" class="hover:text-brand transition-colors">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        </a>
                        <a href="#" aria-label="LinkedIn" class="hover:text-brand transition-colors">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- ── Main nav ── --}}
    <div :class="scrolled ? 'bg-ink/96 backdrop-blur-xl shadow-xl shadow-black/30' : 'bg-ink'" class="border-b border-white/8 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">

                {{-- Logo --}}
                <a href="{{ url('/') }}" class="group shrink-0 flex items-center gap-3">
                    <div class="relative bg-white rounded-xl px-2 py-1 border border-slate-100 shadow-md group-hover:shadow-lg transition-all">
                        <img src="{{ asset('/ShebaTech.png') }}" alt="ShebaTech IT Solutions" class="h-10 w-auto object-contain block">
                        <span class="absolute -top-1 -right-1 w-2 h-2 rounded-full bg-green-400 border-2 border-white animate-pulse"></span>
                    </div>
                    <div class="flex flex-col leading-tight">
                        <span class="text-white font-black text-lg tracking-tight">Sheba<span class="text-brand">Tech</span></span>
                        <span class="text-white/40 text-[10px] font-mono font-semibold uppercase tracking-widest">IT Solutions</span>
                    </div>
                </a>

                {{-- Desktop links --}}
                <nav class="hidden md:flex items-center gap-0.5">
                    @php
                    $links = [
                        ['/', 'Home'],
                        ['/services', 'Services'],
                        ['/blog', 'Blog'],
                        ['/news', 'News'],
                        ['/about', 'About'],
                        ['/contact', 'Contact'],
                    ];
                    @endphp
                    @foreach($links as [$href, $label])
                    @php $active = ($href === '/' ? request()->is('/') : request()->is(ltrim($href, '/').'*')); @endphp
                    <a href="{{ $href }}"
                        class="relative px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200
                               {{ $active ? 'text-brand' : 'text-white/65 hover:text-white hover:bg-white/8' }}"
                    >
                        {{ $label }}
                        @if($active)<span class="absolute bottom-1 left-1/2 -translate-x-1/2 w-1 h-1 rounded-full bg-brand"></span>@endif
                    </a>
                    @endforeach
                </nav>

                {{-- CTA --}}
                <div class="hidden md:flex items-center">
                    <a href="/contact" class="flex items-center gap-2 px-5 py-2 rounded-xl bg-brand text-ink text-sm font-bold hover:bg-brand-dark transition-all shadow-lg shadow-brand/20 hover:-translate-y-px">
                        Get Support
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>

                {{-- Mobile hamburger --}}
                <button @click="open = !open" class="md:hidden w-9 h-9 rounded-xl text-white border border-white/15 hover:border-brand/50 hover:text-brand hover:bg-brand/10 transition-all flex items-center justify-center" aria-label="Toggle menu">
                    <svg x-show="!open" x-transition class="w-4 h-4 absolute" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h10M4 18h16"/></svg>
                    <svg x-show="open" x-transition class="w-4 h-4 absolute" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>

            </div>
        </div>
    </div>

    {{-- ── Mobile menu ── --}}
    <div x-show="open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="md:hidden bg-ink/98 backdrop-blur-xl border-t border-white/8"
    >
        <nav class="max-w-7xl mx-auto px-6 py-4 flex flex-col gap-1">
            @foreach($links as [$href, $label])
            @php $active = ($href === '/' ? request()->is('/') : request()->is(ltrim($href, '/').'*')); @endphp
            <a href="{{ $href }}" @click="open = false"
                class="flex items-center gap-3 py-2.5 px-4 rounded-xl font-medium text-sm transition-all
                       {{ $active ? 'text-brand bg-brand/10 border border-brand/20' : 'text-white/70 hover:text-white hover:bg-white/6' }}"
            >
                @if($active)<span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0"></span>@endif
                {{ $label }}
            </a>
            @endforeach
            <div class="mt-2 pt-3 border-t border-white/8 flex items-center gap-3">
                <span class="flex items-center gap-1.5 text-xs text-white/40">
                    <span class="w-1.5 h-1.5 rounded-full bg-green-400 animate-pulse"></span>Online
                </span>
                <a href="/contact" @click="open = false" class="flex-1 text-center py-2.5 rounded-xl bg-brand text-ink text-sm font-bold hover:bg-brand-dark transition-colors">
                    Get Support
                </a>
            </div>
        </nav>
    </div>

</header>
