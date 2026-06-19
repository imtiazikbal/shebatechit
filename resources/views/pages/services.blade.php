<x-layouts.app title="Services">

{{-- ── Page Banner ─────────────────────────────────────────── --}}
<section class="bg-slate-900 pt-36 pb-14">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <nav class="flex items-center gap-2 text-xs text-white/35 mb-5">
            <a href="/" class="hover:text-brand transition-colors">Home</a>
            <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
            <span class="text-brand">Services</span>
        </nav>
        <h1 class="text-4xl lg:text-5xl font-black text-white mb-3">Our IT Services</h1>
        <p class="text-white/55 text-lg max-w-xl">End-to-end technology services tailored to your business — from daily support to full infrastructure management.</p>
    </div>
</section>

{{-- ── Why ShebaTech strip ─────────────────────────────────── --}}
<div class="bg-brand">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-3.5">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <p class="text-ink font-bold text-sm">Trusted by 200+ businesses in Dhaka — fast response, certified engineers, transparent pricing.</p>
            <a href="/contact" class="text-xs font-bold text-ink bg-white/30 hover:bg-white/50 px-4 py-2 rounded-lg transition-colors whitespace-nowrap">Get a Free Quote →</a>
        </div>
    </div>
</div>

{{-- ── Service Cards Grid ──────────────────────────────────── --}}
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="text-center mb-14">
            <span class="text-brand text-sm font-semibold uppercase tracking-widest">What We Offer</span>
            <h2 class="text-3xl font-black text-slate-900 mt-2 mb-4">Complete IT Solutions for Every Business</h2>
            <p class="text-slate-500 max-w-xl mx-auto">From a single support call to full managed IT — choose what your business needs.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
            $services = [
                [
                    'title'   => 'Online & On-site Support',
                    'tag'     => 'Support',
                    'desc'    => 'Remote assistance or on-site visit — your issues get resolved fast, wherever you are.',
                    'bullets' => ['Same-day on-site visits', 'Remote desktop assistance', 'Helpdesk ticketing', 'Hardware diagnostics & repair'],
                    'icon'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>',
                    'color'   => 'bg-blue-50 border-blue-100',
                    'ico_bg'  => 'bg-blue-100',
                    'ico_col' => 'text-blue-600',
                ],
                [
                    'title'   => 'CCTV Installation & Maintenance',
                    'tag'     => 'Security',
                    'desc'    => 'Professional surveillance systems — site survey, installation, configuration, and ongoing upkeep.',
                    'bullets' => ['Site survey & system design', 'Indoor & outdoor cameras', 'DVR / NVR setup', 'Remote viewing & training'],
                    'icon'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.069A1 1 0 0121 8.82v6.36a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>',
                    'color'   => 'bg-brand/5 border-brand/15',
                    'ico_bg'  => 'bg-brand/10',
                    'ico_col' => 'text-brand-dark',
                ],
                [
                    'title'   => 'Hardware & Networking',
                    'tag'     => 'Infrastructure',
                    'desc'    => 'LAN/WAN setup, structured cabling, server rooms, Wi-Fi design, and firewall configuration.',
                    'bullets' => ['Server setup & virtualisation', 'Structured cabling & patching', 'Wi-Fi design & deployment', 'Firewall & VPN configuration'],
                    'icon'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"/>',
                    'color'   => 'bg-purple-50 border-purple-100',
                    'ico_bg'  => 'bg-purple-100',
                    'ico_col' => 'text-purple-600',
                ],
                [
                    'title'   => 'Part-time & Full-time IT Staff',
                    'tag'     => 'Staffing',
                    'desc'    => 'Dedicated IT personnel embedded in your team — flexible hours and contracts to suit your workload.',
                    'bullets' => ['Flexible hours & contracts', 'System admin support', 'Staff IT onboarding', 'Software installation & licensing'],
                    'icon'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>',
                    'color'   => 'bg-amber-50 border-amber-100',
                    'ico_bg'  => 'bg-amber-100',
                    'ico_col' => 'text-amber-600',
                ],
                [
                    'title'   => 'Complete IT Management',
                    'tag'     => 'Managed IT',
                    'desc'    => 'Outsource your entire IT department — proactive monitoring, patching, backups, and strategy.',
                    'bullets' => ['24/7 system monitoring', 'Patch management', 'Disaster recovery planning', 'Monthly performance reports'],
                    'icon'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18"/>',
                    'color'   => 'bg-green-50 border-green-100',
                    'ico_bg'  => 'bg-green-100',
                    'ico_col' => 'text-green-600',
                ],
                [
                    'title'   => 'Business IT Consulting',
                    'tag'     => 'Consulting',
                    'desc'    => 'Strategic guidance on tech investments, cloud migration, vendor selection, and IT road-mapping.',
                    'bullets' => ['IT budget planning', 'Vendor evaluation', 'Cloud strategy', 'Compliance & data security'],
                    'icon'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>',
                    'color'   => 'bg-rose-50 border-rose-100',
                    'ico_bg'  => 'bg-rose-100',
                    'ico_col' => 'text-rose-600',
                ],
            ];
            @endphp

            @foreach($services as $s)
            <div class="group border border-slate-200 hover:border-brand/40 rounded-2xl p-7 hover:shadow-xl hover:shadow-brand/5 transition-all duration-300 hover:-translate-y-1 bg-white">
                <div class="flex items-start justify-between mb-5">
                    <div class="w-13 h-13 rounded-xl {{ $s['ico_bg'] }} flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 {{ $s['ico_col'] }}" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                            {!! $s['icon'] !!}
                        </svg>
                    </div>
                    <span class="text-[10px] font-semibold uppercase tracking-wider text-slate-400 bg-slate-100 px-2 py-1 rounded-full">{{ $s['tag'] }}</span>
                </div>
                <h3 class="font-bold text-slate-900 text-base mb-3">{{ $s['title'] }}</h3>
                <p class="text-slate-500 text-sm leading-relaxed mb-5">{{ $s['desc'] }}</p>
                <ul class="space-y-2 mb-5">
                    @foreach($s['bullets'] as $b)
                    <li class="flex items-center gap-2 text-xs text-slate-500">
                        <svg class="w-3.5 h-3.5 text-brand shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        {{ $b }}
                    </li>
                    @endforeach
                </ul>
                <a href="/contact" class="inline-flex items-center gap-1.5 text-brand text-xs font-semibold hover:gap-3 transition-all">
                    Get a quote
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>
            @endforeach
        </div>

    </div>
</section>

{{-- ── Featured: CCTV deep-dive ───────────────────────────── --}}
<section class="bg-slate-50 py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

            {{-- Image placeholder --}}
            <div class="relative">
                <div class="aspect-4/3 rounded-2xl bg-linear-to-br from-brand/10 to-slate-200 border border-slate-200 flex flex-col items-center justify-center text-center px-8 shadow-sm">
                    <div class="w-20 h-20 rounded-2xl bg-brand/15 border border-brand/25 flex items-center justify-center mb-4">
                        <svg class="w-9 h-9 text-brand" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.069A1 1 0 0121 8.82v6.36a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                    </div>
                    <p class="text-slate-400 text-sm">CCTV System Diagram</p>
                    <p class="text-brand text-xs font-mono mt-1">142 live feeds monitored</p>
                </div>
                <div class="absolute -bottom-3 -right-3 bg-brand text-ink text-xs font-bold px-4 py-2 rounded-xl shadow-lg">
                    Installed & Monitored 24/7
                </div>
            </div>

            {{-- Text --}}
            <div>
                <span class="text-brand text-sm font-semibold uppercase tracking-widest">Featured Service</span>
                <h2 class="text-3xl font-black text-slate-900 mt-3 mb-5 leading-tight">
                    Professional CCTV<br>Installation & Maintenance
                </h2>
                <p class="text-slate-600 leading-relaxed mb-6">
                    Protect your business with a professionally designed surveillance system. We survey your site, recommend the right cameras and NVR setup, handle full installation, and provide ongoing maintenance to keep your feed reliable 24/7.
                </p>
                <div class="grid grid-cols-2 gap-3 mb-7">
                    @foreach(['Site survey & system design', 'Indoor & outdoor cameras', 'DVR / NVR configuration', 'Remote viewing & training', 'Annual maintenance contracts', 'Emergency repair service'] as $f)
                    <div class="flex items-center gap-2 text-sm text-slate-700">
                        <svg class="w-4 h-4 text-brand shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        {{ $f }}
                    </div>
                    @endforeach
                </div>
                <a href="/contact" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-brand text-ink font-bold text-sm hover:bg-brand-dark transition-all shadow-md shadow-brand/20">
                    Request CCTV Survey
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ── Featured: Networking deep-dive ─────────────────────── --}}
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

            {{-- Text --}}
            <div>
                <span class="text-brand text-sm font-semibold uppercase tracking-widest">Featured Service</span>
                <h2 class="text-3xl font-black text-slate-900 mt-3 mb-5 leading-tight">
                    Hardware &<br>Networking Solutions
                </h2>
                <p class="text-slate-600 leading-relaxed mb-6">
                    From a single workstation to a complete office LAN/WAN — we source, configure, and cable everything to enterprise standards. Reliable network infrastructure is the backbone of your business.
                </p>
                <div class="grid grid-cols-2 gap-3 mb-7">
                    @foreach(['Server setup & virtualisation', 'Structured cabling', 'Enterprise Wi-Fi design', 'Firewall & VPN', 'Switch & router config', 'Network monitoring'] as $f)
                    <div class="flex items-center gap-2 text-sm text-slate-700">
                        <svg class="w-4 h-4 text-brand shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        {{ $f }}
                    </div>
                    @endforeach
                </div>
                <a href="/contact" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-slate-900 text-white font-bold text-sm hover:bg-slate-800 transition-all shadow-md">
                    Get Network Consultation
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            {{-- Image placeholder --}}
            <div class="relative">
                <div class="aspect-4/3 rounded-2xl bg-linear-to-br from-slate-100 to-slate-50 border border-slate-200 flex flex-col items-center justify-center text-center px-8 shadow-sm">
                    <div class="w-20 h-20 rounded-2xl bg-slate-200 flex items-center justify-center mb-4">
                        <svg class="w-9 h-9 text-slate-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"/></svg>
                    </div>
                    <p class="text-slate-400 text-sm">Network Topology Diagram</p>
                    <p class="text-slate-500 text-xs font-mono mt-1">LAN / WAN / Wi-Fi / VPN</p>
                </div>
                <div class="absolute -top-3 -left-3 bg-slate-900 text-white text-xs font-bold px-4 py-2 rounded-xl shadow-lg">
                    Enterprise-grade Setup
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── CTA ──────────────────────────────────────────────────── --}}
<section class="bg-slate-900 py-16">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-black text-white mb-4">Not sure which service you need?</h2>
        <p class="text-white/55 text-lg mb-8">Describe your situation and we'll recommend the right combination of services — no obligation.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="/contact" class="px-7 py-3.5 rounded-xl bg-brand text-ink font-bold text-sm hover:bg-brand-dark transition-all shadow-lg shadow-brand/20">
                Talk to Us
            </a>
            <a href="tel:+8801XXXXXXXXX" class="px-7 py-3.5 rounded-xl border border-white/20 text-white font-semibold text-sm hover:border-brand hover:text-brand transition-all">
                Call Now
            </a>
        </div>
    </div>
</section>

</x-layouts.app>
