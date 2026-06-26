<x-layouts.app title="Home">

    {{-- ════════════════════════════════════════════════════════
     HERO
════════════════════════════════════════════════════════ --}}
    <section class="relative bg-slate-950 overflow-hidden" style="min-height: 92vh; display: flex; align-items: center;">

        {{-- Background --}}
        <div class="absolute inset-0"
            style="background: radial-gradient(ellipse 80% 60% at 60% 40%, rgba(34,211,238,0.07) 0%, transparent 70%), radial-gradient(ellipse 60% 80% at 10% 80%, rgba(8,145,178,0.05) 0%, transparent 60%)">
        </div>
        <div class="absolute inset-0 dot-grid opacity-30 pointer-events-none"></div>
        {{-- Diagonal accent --}}
        <div class="absolute top-0 right-0 w-1/2 h-full opacity-10"
            style="background: linear-gradient(135deg, transparent 40%, rgba(34,211,238,0.12) 100%)"></div>

        <div class="relative w-full max-w-7xl mx-auto px-6 lg:px-8" style="padding-top: 130px; padding-bottom: 80px;">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                {{-- ── Left copy ── --}}
                <div>
                    {{-- Live badge --}}
                    <div
                        class="inline-flex items-center gap-2 bg-brand/10 border border-brand/25 rounded-full px-4 py-1.5 mb-8">
                        <span class="w-1.5 h-1.5 rounded-full bg-green-400 animate-pulse shrink-0"></span>
                        <span class="text-brand text-xs font-semibold tracking-wide">24/7 IT Support · Dhaka,
                            Bangladesh</span>
                    </div>

                    {{-- Headline --}}
                    <h1 class="text-5xl lg:text-6xl font-black text-white leading-[1.06] tracking-tight mb-6">
                        Your Business<br>Deserves
                        <span class="relative inline-block">
                            <span class="text-brand"> Reliable</span>
                        </span><br>IT Support
                    </h1>

                    <p class="text-white/55 text-lg leading-relaxed mb-10 max-w-lg">
                        End-to-end IT services for Dhaka businesses — On-site support, CCTV, Networking, Managed IT, and
                        more. Fast response. Real people. No jargon.
                    </p>

                    {{-- CTAs --}}
                    <div class="flex flex-wrap gap-3 mb-12">
                        <a href="/services"
                            class="inline-flex items-center gap-2 px-7 py-3.5 rounded-xl bg-brand text-ink font-bold text-sm hover:bg-brand-dark transition-all shadow-lg shadow-brand/30 hover:-translate-y-0.5">
                            Explore Services
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                        <a href="/contact"
                            class="inline-flex items-center gap-2 px-7 py-3.5 rounded-xl bg-white/8 border border-white/15 text-white font-semibold text-sm hover:bg-white/12 hover:border-brand/40 transition-all">
                            Get a Free Quote
                        </a>
                    </div>

                    {{-- Trust bar --}}
                    <div class="flex flex-wrap items-center gap-5 pt-8 border-t border-white/8">
                        @foreach ([['200+', 'Businesses Served'], ['5+', 'Years Experience'], ['< 1h', 'Avg. Response Time']] as [$n, $l])
                            <div class="text-center">
                                <div class="text-xl font-black text-brand font-mono">{{ $n }}</div>
                                <div class="text-white/40 text-xs mt-0.5">{{ $l }}</div>
                            </div>
                            @if (!$loop->last)
                                <div class="h-8 w-px bg-white/10"></div>
                            @endif
                        @endforeach
                    </div>
                </div>

                {{-- ── Right: Services panel ── --}}
                <div class="hidden lg:block">
                    <div class="rounded-2xl overflow-hidden border border-white/10 shadow-2xl"
                        style="background: rgba(255,255,255,0.04); backdrop-filter: blur(20px);">

                        {{-- Panel header --}}
                        <div class="px-6 py-4 border-b border-white/8 flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-red-400/70"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-yellow-400/70"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-green-400/70"></span>
                            </div>
                            <span class="text-white/30 text-[11px] font-mono">shebatech — services.exe</span>
                            <span class="flex items-center gap-1.5 text-[10px] text-green-400 font-mono">
                                <span class="w-1.5 h-1.5 rounded-full bg-green-400 animate-pulse"></span>ACTIVE
                            </span>
                        </div>

                        {{-- Services list --}}
                        <div class="p-5 space-y-2">
                            @php
                                $heroServices = [
                                    [
                                        'Online & On-site Support',
                                        '01',
                                        'bg-brand/20 text-brand',
                                        'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                                    ],
                                    [
                                        'CCTV Installation & Maintenance',
                                        '02',
                                        'bg-brand/20 text-brand',
                                        'M15 10l4.553-2.069A1 1 0 0121 8.82v6.36a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z',
                                    ],
                                    [
                                        'Hardware & Networking',
                                        '03',
                                        'bg-brand/20 text-brand',
                                        'M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2',
                                    ],
                                    [
                                        'Part-time & Full-time IT Staff',
                                        '04',
                                        'bg-brand/20 text-brand',
                                        'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z',
                                    ],
                                    [
                                        'Complete IT Management',
                                        '05',
                                        'bg-brand/20 text-brand',
                                        'M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18',
                                    ],
                                    [
                                        'Business IT Consulting',
                                        '06',
                                        'bg-brand/20 text-brand',
                                        'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
                                    ],
                                ];
                            @endphp
                            @foreach ($heroServices as [$name, $num, $clr, $ico])
                                <a href="/services"
                                    class="flex items-center gap-3 px-4 py-2.5 rounded-xl hover:bg-white/6 border border-transparent hover:border-white/8 transition-all group cursor-pointer">
                                    <div
                                        class="w-8 h-8 rounded-lg {{ $clr }} flex items-center justify-center shrink-0">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.75"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="{{ $ico }}" />
                                        </svg>
                                    </div>
                                    <span
                                        class="text-white/65 text-sm font-medium group-hover:text-white transition-colors flex-1">{{ $name }}</span>
                                    <svg class="w-3.5 h-3.5 text-white/20 group-hover:text-brand/60 transition-colors"
                                        fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            @endforeach
                        </div>

                        {{-- Panel footer --}}
                        <div class="px-5 py-3.5 border-t border-white/8 flex items-center justify-between">
                            <span class="text-white/25 text-[11px] font-mono">6 services available</span>
                            <a href="/contact"
                                class="text-[11px] font-bold text-brand hover:text-brand-dark transition-colors">Get a
                                Quote →</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ════════════════════════════════════════════════════════
     STATS STRIP
════════════════════════════════════════════════════════ --}}
    <div class="bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-2 lg:grid-cols-4 divide-x divide-slate-100">
                @foreach ([['5+', 'Years of Experience', 'text-brand', 'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z'], ['200+', 'Happy Clients', 'text-purple-500', 'M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'], ['500+', 'Projects Completed', 'text-green-500', 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4'], ['24/7', 'Support Available', 'text-amber-500', 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z']] as [$num, $label, $col, $icon])
                    <div class="py-8 px-6 text-center hover:bg-slate-50 transition-colors">
                        <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center mx-auto mb-3">
                            <svg class="w-5 h-5 {{ $col }}" fill="none" stroke="currentColor"
                                stroke-width="1.75" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $icon }}" />
                            </svg>
                        </div>
                        <div class="text-3xl font-black text-slate-900 mb-0.5">{{ $num }}</div>
                        <div class="text-xs text-slate-500 font-medium">{{ $label }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- ════════════════════════════════════════════════════════
     SERVICES
════════════════════════════════════════════════════════ --}}
    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            {{-- Section header --}}
            <div class="max-w-2xl mb-14">
                <span
                    class="inline-block text-brand text-xs font-bold uppercase tracking-widest bg-brand/8 border border-brand/20 px-3 py-1 rounded-full mb-4">Our
                    Services</span>
                <h2 class="text-4xl font-black text-slate-900 leading-tight mb-4">What We Do Best</h2>
                <p class="text-slate-500 text-base leading-relaxed">Comprehensive IT services to keep your business
                    running — from day-to-day helpdesk to full infrastructure management.</p>
            </div>

            {{-- Service cards --}}
            @php
                $services = [
                    [
                        'Online & On-site Support',
                        'Remote or on-site assistance — same-day visits, helpdesk support, and hardware repair.',
                        'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                        'bg-blue-50',
                        'bg-blue-500',
                        'text-white',
                    ],
                    [
                        'CCTV Installation & Maintenance',
                        'Professional surveillance systems — site survey, installation, DVR/NVR setup, and 24/7 upkeep.',
                        'M15 10l4.553-2.069A1 1 0 0121 8.82v6.36a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z',
                        'bg-cyan-50',
                        'bg-brand',
                        'text-ink',
                    ],
                    [
                        'Hardware & Networking',
                        'LAN/WAN, structured cabling, server setup, Wi-Fi design, and firewall/VPN configuration.',
                        'M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2',
                        'bg-purple-50',
                        'bg-purple-600',
                        'text-white',
                    ],
                    [
                        'Part-time & Full-time IT Staff',
                        'Dedicated IT personnel embedded in your team — flexible hours and contracts to match your growth.',
                        'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z',
                        'bg-amber-50',
                        'bg-amber-500',
                        'text-white',
                    ],
                    [
                        'Complete IT Management',
                        'Outsource your IT department — proactive monitoring, patching, backups, and monthly reporting.',
                        'M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18',
                        'bg-green-50',
                        'bg-green-600',
                        'text-white',
                    ],
                    [
                        'Business IT Consulting',
                        'Technology strategy, cloud migration, vendor selection, and IT road-mapping for long-term growth.',
                        'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
                        'bg-rose-50',
                        'bg-rose-600',
                        'text-white',
                    ],
                ];
            @endphp
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                @foreach ($services as $s)
                    <div
                        class="group relative bg-white border border-slate-200 hover:border-slate-300 rounded-2xl p-7 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 overflow-hidden">
                        {{-- Top accent line --}}
                        <div class="absolute top-0 inset-x-0 h-0.5 {{ $s[5] === 'text-ink' ? 'bg-brand' : str_replace(['bg-', '-50', '-600', '-500'], ['bg-', '', '', ''], $s[4]) }} opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                            style="background: {{ match ($s[4]) {'bg-blue-500' => '#3B82F6','bg-brand' => '#22D3EE','bg-purple-600' => '#9333EA','bg-amber-500' => '#F59E0B','bg-green-600' => '#16A34A','bg-rose-600' => '#E11D48',default => '#22D3EE'} }}">
                        </div>

                        <div class="flex items-start gap-4 mb-5">
                            <div
                                class="w-12 h-12 rounded-xl {{ $s[3] }} flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-5.5 h-5.5 {{ str_replace(['bg-blue-50', 'bg-cyan-50', 'bg-purple-50', 'bg-amber-50', 'bg-green-50', 'bg-rose-50'], ['text-blue-600', 'text-brand-dark', 'text-purple-600', 'text-amber-600', 'text-green-700', 'text-rose-600'], $s[3]) }}"
                                    fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $s[2] }}" />
                                </svg>
                            </div>
                            <h3 class="font-bold text-slate-900 text-base leading-snug pt-1">{{ $s[0] }}</h3>
                        </div>
                        <p class="text-slate-500 text-sm leading-relaxed mb-5">{{ $s[1] }}</p>
                        <a href="/services"
                            class="inline-flex items-center gap-1.5 text-brand text-xs font-bold hover:gap-3 transition-all group-hover:text-brand-dark">
                            Learn more
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-12">
                <a href="/services"
                    class="inline-flex items-center gap-2.5 px-8 py-3.5 rounded-xl border-2 border-slate-200 text-slate-700 font-bold text-sm hover:border-brand hover:text-brand transition-all">
                    View All Services
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>

        </div>
    </section>

    {{-- ════════════════════════════════════════════════════════
     WHY SHEBATECH
════════════════════════════════════════════════════════ --}}
    <section class="bg-slate-50 py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                {{-- Left --}}
                <div>
                    <span
                        class="inline-block text-brand text-xs font-bold uppercase tracking-widest bg-brand/8 border border-brand/20 px-3 py-1 rounded-full mb-5">Why
                        ShebaTech?</span>
                    <h2 class="text-4xl font-black text-slate-900 leading-tight mb-5">
                        Specialists in<br>Business IT Support
                    </h2>
                    <p class="text-slate-600 text-base leading-relaxed mb-8">
                        We don't use call centers or ticket queues. When you contact ShebaTech, a certified engineer
                        picks up. We treat your technology like our own — because your downtime costs us our reputation.
                    </p>

                    <div class="space-y-4 mb-10">
                        @foreach ([['Certified engineers — industry-qualified, not just trained', 'bg-blue-50   text-blue-600'], ['Fast response — most issues resolved within the hour', 'bg-green-50  text-green-700'], ['Transparent pricing — fixed quotes, no surprise invoices', 'bg-amber-50  text-amber-600'], ['Customized solutions — built for your business, not a template', 'bg-purple-50 text-purple-600']] as [$point, $clr])
                            <div class="flex items-start gap-3.5">
                                <span
                                    class="mt-0.5 w-5 h-5 rounded-full {{ $clr }} flex items-center justify-center shrink-0">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="3"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                                <span class="text-slate-700 text-sm leading-relaxed">{{ $point }}</span>
                            </div>
                        @endforeach
                    </div>

                    <div class="flex flex-wrap gap-3">
                        <a href="/about"
                            class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-brand text-ink font-bold text-sm hover:bg-brand-dark transition-all shadow-md shadow-brand/20">
                            About ShebaTech
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                        <a href="/contact"
                            class="inline-flex items-center gap-2 px-6 py-3 rounded-xl border border-slate-300 text-slate-700 font-semibold text-sm hover:border-brand hover:text-brand transition-all">
                            Get in Touch
                        </a>
                    </div>
                </div>

                {{-- Right: 4 feature tiles --}}
                <div class="grid grid-cols-2 gap-4">
                    @foreach ([['< 1 Hour', 'Avg. Response Time', 'bg-blue-600', 'M13 10V3L4 14h7v7l9-11h-7z'], ['99%', 'Client Satisfaction', 'bg-green-600', 'M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'], ['200+', 'Active Clients', 'bg-purple-600', 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857'], ['24/7', 'Emergency Support', 'bg-amber-500', 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z']] as [$stat, $label, $bg, $icon])
                        <div
                            class="bg-white rounded-2xl border border-slate-200 p-7 hover:shadow-lg hover:border-slate-300 transition-all group">
                            <div
                                class="w-12 h-12 rounded-xl {{ $bg }} flex items-center justify-center mb-5 group-hover:scale-105 transition-transform">
                                <svg class="w-5.5 h-5.5 text-white" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $icon }}" />
                                </svg>
                            </div>
                            <div class="text-3xl font-black text-slate-900 mb-1">{{ $stat }}</div>
                            <div class="text-slate-500 text-sm font-medium">{{ $label }}</div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>

    {{-- ════════════════════════════════════════════════════════
     WORK PROCESS
════════════════════════════════════════════════════════ --}}
    <section class="bg-slate-900 py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="text-center mb-16">
                <span
                    class="inline-block text-brand text-xs font-bold uppercase tracking-widest bg-brand/10 border border-brand/25 px-3 py-1 rounded-full mb-4">How
                    We Work</span>
                <h2 class="text-4xl font-black text-white mb-4">Our 4-Step Process</h2>
                <p class="text-white/45 max-w-lg mx-auto">A structured approach that gets results — from first contact
                    to long-term partnership.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 relative">
                {{-- Desktop connector --}}
                <div class="hidden lg:block absolute top-9 left-[calc(12.5%+2rem)] right-[calc(12.5%+2rem)] h-px"
                    style="background: linear-gradient(to right, rgba(34,211,238,0.15), rgba(34,211,238,0.4), rgba(34,211,238,0.4), rgba(34,211,238,0.15))">
                </div>

                @foreach ([
        ['01', 'Discovery', 'We audit your current setup and understand your business requirements, budget, and goals.', 'M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z', 'from-blue-600   to-blue-700'],
        ['02', 'Planning', 'We design a tailored solution roadmap with clear timelines, deliverables, and transparent pricing.', 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2', 'from-brand to-brand-dark'],
        ['03', 'Implementation', 'Certified engineers deploy, configure, and test everything — minimal disruption to your operations.', 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z M15 12a3 3 0 11-6 0 3 3 0 016 0z', 'from-purple-600 to-purple-700'],
        ['04', 'Ongoing Support', 'We monitor your systems, apply updates, and provide 24/7 emergency support — indefinitely.', 'M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z', 'from-green-600  to-green-700'],
    ] as [$num, $title, $desc, $icon, $grad])
                    <div class="relative z-10 flex flex-col items-center text-center group">
                        {{-- Numbered icon --}}
                        <div class="w-18 h-18 rounded-2xl bg-linear-to-b {{ $grad }} shadow-lg flex flex-col items-center justify-center mb-6 group-hover:scale-105 transition-transform duration-300"
                            style="width: 72px; height: 72px;">
                            <svg class="w-7 h-7 text-white mb-0.5" fill="none" stroke="currentColor"
                                stroke-width="1.75" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $icon }}" />
                            </svg>
                            <span
                                class="text-white/60 text-[9px] font-mono font-black tracking-widest">{{ $num }}</span>
                        </div>
                        <h3 class="text-white font-bold text-base mb-2">{{ $title }}</h3>
                        <p class="text-white/40 text-sm leading-relaxed max-w-50">{{ $desc }}</p>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- ════════════════════════════════════════════════════════
     TESTIMONIALS
════════════════════════════════════════════════════════ --}}
    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="text-center mb-14">
                <span
                    class="inline-block text-brand text-xs font-bold uppercase tracking-widest bg-brand/8 border border-brand/20 px-3 py-1 rounded-full mb-4">Testimonials</span>
                <h2 class="text-4xl font-black text-slate-900 mb-3">What Our Clients Say</h2>
                <p class="text-slate-500 max-w-md mx-auto text-sm">Trusted by 200+ businesses across Dhaka — here's
                    what they think.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ([['ShebaTech completely transformed our office network. Professional, fast, and surprisingly affordable. Highly recommended!', 'Rahman Ahmed', 'CEO, Dhaka Textile Ltd.', 'R', 'bg-blue-600'], ['Our CCTV system was installed in a single day. Knowledgeable team, excellent quality. We feel so much more secure now.', 'Fatima Begum', 'Manager, ShopMart BD', 'F', 'bg-purple-600'], ['We rely on ShebaTech for all IT needs. Their 24/7 support has saved us multiple times. Worth every taka invested!', 'Karim Hassan', 'Director, TechStart BD', 'K', 'bg-green-600']] as [$quote, $name, $role, $initials, $avatarBg])
                    <div
                        class="relative bg-slate-50 rounded-2xl border border-slate-200 p-7 hover:border-brand/25 hover:shadow-lg hover:shadow-brand/5 transition-all">
                        {{-- Quote icon --}}
                        <div class="text-brand/15 text-6xl font-serif leading-none mb-4 select-none">"</div>

                        {{-- Stars --}}
                        <div class="flex gap-0.5 mb-4">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            @endfor
                        </div>

                        <p class="text-slate-700 text-sm leading-relaxed mb-6">{{ $quote }}</p>

                        <div class="flex items-center gap-3 pt-5 border-t border-slate-200">
                            <div
                                class="w-10 h-10 rounded-full {{ $avatarBg }} flex items-center justify-center text-white font-black text-sm shrink-0">
                                {{ $initials }}
                            </div>
                            <div>
                                <p class="font-bold text-slate-900 text-sm">{{ $name }}</p>
                                <p class="text-slate-400 text-xs mt-0.5">{{ $role }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- ════════════════════════════════════════════════════════
     PRICING
════════════════════════════════════════════════════════ --}}
    <section class="bg-slate-50 py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="text-center mb-14">
                <span
                    class="inline-block text-brand text-xs font-bold uppercase tracking-widest bg-brand/8 border border-brand/20 px-3 py-1 rounded-full mb-4">Pricing</span>
                <h2 class="text-4xl font-black text-slate-900 mb-4">Simple, Transparent Pricing</h2>
                <p class="text-slate-500 max-w-lg mx-auto">No hidden fees. Choose the plan that fits — or contact us
                    for a custom quote.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto items-start">
                @php
                    $plans = [
                        [
                            'Basic',
                            '৳8,000',
                            '/mo',
                            'For small businesses',
                            [
                                'Domain Registration',
                                '2GB Web Hosting',
                                'Basic Website Setup',
                                'Email Configuration',
                                'Monthly IT Visit',
                                '8×5 Phone Support',
                            ],
                            false,
                        ],
                        [
                            'Standard',
                            '৳15,000',
                            '/mo',
                            'Ideal for growing teams',
                            [
                                'Domain + 10GB Hosting',
                                'Professional Website',
                                '20 Email Accounts',
                                'Weekly Support Visits',
                                'Network Monitoring',
                                '24/7 Remote Support',
                            ],
                            true,
                        ],
                        [
                            'Enterprise',
                            'Custom',
                            '',
                            'Large organizations',
                            [
                                'Unlimited Hosting',
                                'Full IT Infrastructure',
                                'Unlimited Email',
                                'Dedicated On-site Staff',
                                'CCTV & Security',
                                '24/7 Priority Support',
                            ],
                            false,
                        ],
                    ];
                @endphp
                @foreach ($plans as [$name, $price, $period, $tagline, $features, $popular])
                    <div
                        class="relative bg-white rounded-2xl border {{ $popular ? 'border-brand shadow-2xl shadow-brand/10 scale-[1.03]' : 'border-slate-200 shadow-sm' }} p-8 flex flex-col">
                        @if ($popular)
                            <div class="absolute -top-3.5 left-0 right-0 flex justify-center">
                                <span
                                    class="bg-brand text-ink text-[11px] font-black uppercase tracking-widest px-5 py-1.5 rounded-full shadow-lg shadow-brand/20">Most
                                    Popular</span>
                            </div>
                        @endif

                        <div class="mb-6">
                            <h3 class="text-slate-900 font-black text-xl mb-1">{{ $name }}</h3>
                            <p class="text-slate-400 text-sm">{{ $tagline }}</p>
                            <div class="flex items-baseline gap-1 mt-5 mb-1">
                                <span
                                    class="text-4xl font-black {{ $popular ? 'text-brand' : 'text-slate-900' }}">{{ $price }}</span>
                                @if ($period)
                                    <span class="text-slate-400 text-sm font-medium">{{ $period }}</span>
                                @endif
                            </div>
                        </div>

                        <ul class="space-y-3 flex-1 mb-8">
                            @foreach ($features as $f)
                                <li class="flex items-center gap-2.5 text-sm text-slate-600">
                                    <svg class="w-4 h-4 text-brand shrink-0" fill="none" stroke="currentColor"
                                        stroke-width="2.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg>
                                    {{ $f }}
                                </li>
                            @endforeach
                        </ul>

                        <a href="/contact"
                            class="block text-center py-3.5 rounded-xl font-bold text-sm transition-all {{ $popular ? 'bg-brand text-ink hover:bg-brand-dark shadow-lg shadow-brand/20' : 'border-2 border-slate-200 text-slate-700 hover:border-brand hover:text-brand' }}">
                            Get Started
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- ════════════════════════════════════════════════════════
     GET A QUOTE
════════════════════════════════════════════════════════ --}}
    <section class="bg-slate-900 py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 items-start">

                {{-- Left: info (2/5) --}}
                <div class="lg:col-span-2 pt-1">
                    <span
                        class="inline-block text-brand text-xs font-bold uppercase tracking-widest bg-brand/10 border border-brand/25 px-3 py-1 rounded-full mb-5">Free
                        Consultation</span>
                    <h2 class="text-3xl font-black text-white mb-4 leading-tight">
                        Get a Free Quote<br>Within 2 Hours
                    </h2>
                    <p class="text-white/50 text-sm leading-relaxed mb-8">
                        Fill in the form and a certified engineer will contact you with a tailored solution and
                        transparent pricing. No obligation, no spam.
                    </p>

                    @php
                        $homePhone   = isset($contactDetails['phone'])   ? $contactDetails['phone']->first()   : null;
                        $homeEmail   = isset($contactDetails['email'])   ? $contactDetails['email']->first()   : null;
                        $homeAddress = isset($contactDetails['address']) ? $contactDetails['address']->first() : null;
                        $homeInfoItems = [
                            ['M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z', 'Call Us',  $homePhone   ? $homePhone->value   : '+880 1XXX-XXXXXX'],
                            ['M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',                                                                                                                   'Email Us', $homeEmail   ? $homeEmail->value   : 'info@shebatech.com'],
                            ['M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z',                                                                                                   'Find Us',  $homeAddress ? $homeAddress->value : 'Dhaka, Bangladesh'],
                            ['M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',                                                                                                                                                                             'Hours',    'Mon–Sat 9AM–7PM · 24/7 Emergency'],
                        ];
                    @endphp
                    <div class="space-y-3">
                        @foreach ($homeInfoItems as [$ico, $label, $value])
                            <div class="flex items-center gap-4 bg-white/5 border border-white/10 rounded-xl px-4 py-3">
                                <svg class="w-5 h-5 text-brand shrink-0" fill="none" stroke="currentColor"
                                    stroke-width="1.75" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $ico }}" />
                                </svg>
                                <div>
                                    <p class="text-white/40 text-[10px] uppercase tracking-widest font-bold">{{ $label }}</p>
                                    <p class="text-white text-sm font-semibold mt-0.5">{{ $value }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Right: form (3/5) --}}
                <div class="lg:col-span-3 bg-white rounded-2xl p-8 shadow-2xl">
                    <h3 class="text-slate-900 font-black text-lg mb-1">Send Your Enquiry</h3>
                    <p class="text-slate-400 text-sm mb-7">We'll respond with a solution within 2 business hours.</p>

                    @if (session('success'))
                        <div
                            class="flex items-center gap-3 bg-green-50 border border-green-200 text-green-700 rounded-xl px-4 py-3 text-sm mb-6">
                            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-slate-700 text-xs font-semibold mb-1.5">Full Name *</label>
                                <input type="text" name="name" required value="{{ old('name') }}"
                                    placeholder="Your name"
                                    class="w-full border border-slate-200 bg-slate-50 rounded-xl px-4 py-3 text-slate-900 text-sm placeholder-slate-400 focus:outline-none focus:border-brand focus:bg-white focus:ring-2 focus:ring-brand/10 transition-all">
                            </div>
                            <div>
                                <label class="block text-slate-700 text-xs font-semibold mb-1.5">Email Address
                                    *</label>
                                <input type="email" name="email" required value="{{ old('email') }}"
                                    placeholder="you@company.com"
                                    class="w-full border border-slate-200 bg-slate-50 rounded-xl px-4 py-3 text-slate-900 text-sm placeholder-slate-400 focus:outline-none focus:border-brand focus:bg-white focus:ring-2 focus:ring-brand/10 transition-all">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-slate-700 text-xs font-semibold mb-1.5">Phone Number</label>
                                <input type="tel" name="phone" value="{{ old('phone') }}"
                                    placeholder="+880 1XXX-XXXXXX"
                                    class="w-full border border-slate-200 bg-slate-50 rounded-xl px-4 py-3 text-slate-900 text-sm placeholder-slate-400 focus:outline-none focus:border-brand focus:bg-white focus:ring-2 focus:ring-brand/10 transition-all">
                            </div>
                            <div>
                                <label class="block text-slate-700 text-xs font-semibold mb-1.5">Service Needed</label>
                                <select name="service"
                                    class="w-full border border-slate-200 bg-slate-50 rounded-xl px-4 py-3 text-slate-900 text-sm focus:outline-none focus:border-brand focus:bg-white focus:ring-2 focus:ring-brand/10 transition-all">
                                    <option value="">Choose a service…</option>
                                    @foreach (['Online / On-site Support', 'CCTV Installation', 'Hardware & Networking', 'IT Staffing', 'Complete IT Management', 'Business Consulting', 'Other'] as $opt)
                                        <option {{ old('service') === $opt ? 'selected' : '' }}>{{ $opt }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div>
                            <label class="block text-slate-700 text-xs font-semibold mb-1.5">Tell Us About Your
                                Challenge *</label>
                            <textarea name="message" rows="4" required placeholder="Describe your IT issue or project…"
                                class="w-full border border-slate-200 bg-slate-50 rounded-xl px-4 py-3 text-slate-900 text-sm placeholder-slate-400 focus:outline-none focus:border-brand focus:bg-white focus:ring-2 focus:ring-brand/10 transition-all resize-none">{{ old('message') }}</textarea>
                        </div>
                        <button type="submit"
                            class="w-full py-4 rounded-xl bg-brand text-ink font-black text-sm hover:bg-brand-dark transition-all shadow-lg shadow-brand/20 hover:-translate-y-0.5 tracking-wide">
                            Send Message — Get Free Quote →
                        </button>
                        <p class="text-center text-slate-400 text-xs">We respect your privacy. No spam, ever.</p>
                    </form>
                </div>

            </div>
        </div>
    </section>

</x-layouts.app>
