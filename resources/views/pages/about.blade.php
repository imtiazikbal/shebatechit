<x-layouts.app title="About Us">

{{-- ── Page Banner ─────────────────────────────────────────── --}}
<section class="bg-slate-900 pt-36 pb-14">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <nav class="flex items-center gap-2 text-xs text-white/35 mb-5">
            <a href="/" class="hover:text-brand transition-colors">Home</a>
            <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
            <span class="text-brand">About Us</span>
        </nav>
        <h1 class="text-4xl lg:text-5xl font-black text-white mb-3">About ShebaTech</h1>
        <p class="text-white/55 text-lg max-w-xl">A dedicated IT team built on trust, accountability, and real results — serving businesses across Dhaka since 2019.</p>
    </div>
</section>

{{-- ── Stats strip ─────────────────────────────────────────── --}}
<section class="bg-white border-b border-slate-100 shadow-sm">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 divide-x divide-slate-100">
            @foreach([
                ['2019', 'Established',          '<path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>'],
                ['200+', 'Clients Served',        '<path stroke-linecap="round" stroke-linejoin="round" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>'],
                ['500+', 'Projects Completed',    '<path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>'],
                ['24/7', 'Emergency Support',     '<path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>'],
            ] as [$num, $label, $icon])
            <div class="py-9 px-6 text-center group hover:bg-slate-50 transition-colors">
                <div class="flex justify-center mb-3">
                    <div class="w-10 h-10 rounded-xl bg-brand/10 flex items-center justify-center">
                        <svg class="w-5 h-5 text-brand" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $icon }}"/></svg>
                    </div>
                </div>
                <div class="text-3xl font-black text-ink mb-1">{{ $num }}</div>
                <div class="text-sm text-slate-500">{{ $label }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ── Who We Are ───────────────────────────────────────────── --}}
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <div>
                <span class="text-brand text-sm font-semibold uppercase tracking-widest">Our Story</span>
                <h2 class="text-3xl font-black text-slate-900 mt-3 mb-6 leading-tight">
                    Your Trusted Technology<br>Partner Since 2019
                </h2>
                <div class="space-y-4 text-slate-600 leading-relaxed text-sm">
                    <p>ShebaTech started from a simple frustration: too many businesses in Dhaka were paying for IT support that was slow to respond, hard to reach, and impossible to understand. We set out to fix that.</p>
                    <p>We began with on-site visits for small offices — fixing printers, setting up networks, installing cameras. Word spread fast. Clients referred us to their contacts, and those contacts referred us back. Within a few years, we were managing complete IT infrastructure for offices, retail chains, schools, and clinics.</p>
                    <p>Today, ShebaTech is a full-spectrum IT services provider — but our commitment hasn't changed. Every client, regardless of size, gets the same accountability and the same direct line to the people doing the work.</p>
                </div>
                <a href="/contact" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-brand text-ink font-bold text-sm mt-8 hover:bg-brand-dark transition-all shadow-md shadow-brand/20">
                    Work With Us
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            {{-- Timeline --}}
            <div class="relative pl-7 border-l-2 border-slate-200 space-y-9">
                @foreach([
                    ['2019', 'ShebaTech Founded',       'Started with on-site support for small offices in Dhaka.'],
                    ['2020', 'CCTV Division Launched',  'Added professional surveillance installation to the service line.'],
                    ['2021', 'Networking Team Formed',  'Structured cabling, server rooms, and enterprise Wi-Fi.'],
                    ['2023', 'Managed IT Contracts',    'First long-term managed IT agreements with mid-size businesses.'],
                    ['2025', '200+ Clients Milestone',  'Reached 200 active business clients across Dhaka.'],
                ] as [$year, $title, $desc])
                <div class="relative">
                    <span class="absolute left-[-2.1rem] top-1 w-4 h-4 rounded-full bg-brand border-4 border-white shadow-sm"></span>
                    <p class="text-xs font-black text-brand uppercase tracking-widest mb-1">{{ $year }}</p>
                    <h3 class="text-slate-900 font-bold text-sm mb-1">{{ $title }}</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">{{ $desc }}</p>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

{{-- ── Mission & Vision ─────────────────────────────────────── --}}
<section class="bg-slate-50 py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="text-center mb-12">
            <span class="text-brand text-sm font-semibold uppercase tracking-widest">What Drives Us</span>
            <h2 class="text-3xl font-black text-slate-900 mt-3">Mission, Vision & Values</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
            <div class="bg-white rounded-2xl border border-slate-200 p-8 shadow-sm">
                <div class="w-12 h-12 rounded-xl bg-brand/10 flex items-center justify-center mb-5">
                    <svg class="w-6 h-6 text-brand" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="text-slate-900 font-black text-lg mb-3">Our Mission</h3>
                <p class="text-slate-600 leading-relaxed text-sm">To be the trusted technology partner for every business in Bangladesh — delivering reliable, affordable, and human-centered IT solutions that empower people to achieve more with less friction.</p>
            </div>
            <div class="bg-ink rounded-2xl p-8">
                <div class="w-12 h-12 rounded-xl bg-brand/20 flex items-center justify-center mb-5">
                    <svg class="w-6 h-6 text-brand" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                </div>
                <h3 class="text-white font-black text-lg mb-3">Our Vision</h3>
                <p class="text-white/60 leading-relaxed text-sm">To become Bangladesh's fastest and most innovative IT transformation partner — engaging top talent, building lasting client relationships, and creating a positive technological impact across the country.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach([
                ['Reliability',    'We show up — on time, every time. If we commit, it happens.',                          'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z'],
                ['Clarity',        'No jargon, no runaround. You always know what we\'re doing and why.',                  'M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z'],
                ['Accountability', 'Problems don\'t get blamed away. We own them, fix them, keep them fixed.',             'M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z'],
                ['Innovation',     'We invest in our team\'s skills so clients always get current expertise.',              'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z'],
            ] as [$value, $desc, $ico])
            <div class="bg-white rounded-2xl border border-slate-200 p-6 hover:border-brand/30 hover:shadow-md transition-all group">
                <div class="w-10 h-10 rounded-xl bg-brand/10 flex items-center justify-center mb-4 group-hover:bg-brand/20 transition-colors">
                    <svg class="w-5 h-5 text-brand" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $ico }}"/></svg>
                </div>
                <h3 class="text-slate-900 font-bold text-sm mb-2">{{ $value }}</h3>
                <p class="text-slate-500 text-xs leading-relaxed">{{ $desc }}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>

{{-- ── Team ─────────────────────────────────────────────────── --}}
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="text-center mb-12">
            <span class="text-brand text-sm font-semibold uppercase tracking-widest">The People</span>
            <h2 class="text-3xl font-black text-slate-900 mt-3">Meet Our Core Team</h2>
            <p class="text-slate-500 mt-3 max-w-xl mx-auto text-sm">Certified professionals who show up, solve problems, and take ownership of your IT environment.</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
            @foreach([
                ['Operations Lead',  'Network & Infrastructure', 'OL'],
                ['Support Lead',     'On-site & Remote Helpdesk','SL'],
                ['CCTV Specialist',  'Surveillance Systems',     'CS'],
                ['IT Consultant',    'Strategy & Procurement',   'IC'],
            ] as [$role, $dept, $initials])
            <div class="bg-slate-50 rounded-2xl border border-slate-200 p-6 text-center hover:border-brand/30 hover:shadow-md transition-all group">
                <div class="w-16 h-16 rounded-full bg-linear-to-br from-brand/20 to-brand/5 border-2 border-brand/20 mx-auto mb-4 flex items-center justify-center group-hover:border-brand/40 transition-colors">
                    <span class="text-brand font-black text-lg">{{ $initials }}</span>
                </div>
                <p class="text-slate-900 font-semibold text-sm">{{ $role }}</p>
                <p class="text-slate-400 text-xs mt-1">{{ $dept }}</p>
            </div>
            @endforeach
        </div>

        <p class="mt-8 text-slate-400 text-sm text-center">
            Our team grows with our client base —
            <a href="/contact" class="text-brand hover:underline font-medium">get in touch</a>
            to meet the engineer assigned to your account.
        </p>
    </div>
</section>

{{-- ── CTA ──────────────────────────────────────────────────── --}}
<section class="bg-slate-900 py-16">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-black text-white mb-4">Work with a team that cares.</h2>
        <p class="text-white/55 text-lg mb-8">Let's talk about what your business needs and how ShebaTech can help you move forward.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="/contact" class="px-7 py-3.5 rounded-xl bg-brand text-ink font-bold text-sm hover:bg-brand-dark transition-all shadow-lg shadow-brand/20">
                Contact Us
            </a>
            <a href="/services" class="px-7 py-3.5 rounded-xl border border-white/20 text-white font-semibold text-sm hover:border-brand hover:text-brand transition-all">
                View Services
            </a>
        </div>
    </div>
</section>

</x-layouts.app>
