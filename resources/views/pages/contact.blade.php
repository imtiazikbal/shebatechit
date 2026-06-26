<x-layouts.app title="Contact">

{{-- ── Page Banner ─────────────────────────────────────────── --}}
<section class="bg-slate-900 pt-36 pb-14">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <nav class="flex items-center gap-2 text-xs text-white/35 mb-5">
            <a href="/" class="hover:text-brand transition-colors">Home</a>
            <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
            <span class="text-brand">Contact</span>
        </nav>
        <h1 class="text-4xl lg:text-5xl font-black text-white mb-3">Get In Touch</h1>
        <p class="text-white/55 text-lg max-w-xl">Tell us about your IT challenge and we'll respond within 2 hours with a tailored solution and transparent pricing.</p>
    </div>
</section>

{{-- ── Quick info bar ───────────────────────────────────────── --}}
@php
$barIconPaths = [
    'phone'   => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z',
    'email'   => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
    'address' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z',
    'website' => 'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9',
];
$barItems = collect();
foreach (['phone','email','address','website'] as $t) {
    if (isset($contactDetails[$t])) $barItems = $barItems->merge($contactDetails[$t]->take(1));
}
@endphp
<div class="bg-brand">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-3.5">
        <div class="flex flex-wrap items-center justify-center gap-8 text-ink text-sm font-semibold">
            @forelse($barItems as $item)
            <span class="flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $barIconPaths[$item->type] ?? $barIconPaths['website'] }}"/>
                </svg>
                {{ $item->value }}
            </span>
            @empty
            <span class="flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                Mon–Sat 9AM–7PM · Emergency 24/7
            </span>
            @endforelse
        </div>
    </div>
</div>

{{-- ── Contact body ─────────────────────────────────────────── --}}
<section class="bg-slate-50 py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

            {{-- Form (2/3) --}}
            <div class="lg:col-span-2">
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-8 lg:p-10">

                    <h2 class="text-xl font-black text-slate-900 mb-1">Send Us a Message</h2>
                    <p class="text-slate-500 text-sm mb-8">We'll get back to you within 2 business hours.</p>

                    @if(session('success'))
                    <div class="mb-6 flex items-start gap-3 bg-green-50 border border-green-200 text-green-700 rounded-xl px-5 py-4 text-sm font-medium">
                        <svg class="w-5 h-5 shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        {{ session('success') }}
                    </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                        @csrf

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="name" class="block text-sm font-semibold text-slate-700 mb-1.5">Full Name <span class="text-red-400">*</span></label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Your full name" required
                                    class="w-full rounded-xl border px-4 py-3 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:border-brand focus:bg-white focus:ring-2 focus:ring-brand/10 transition-all {{ $errors->has('name') ? 'border-red-300 bg-red-50' : 'border-slate-200 bg-slate-50' }}">
                                @error('name')<p class="mt-1.5 text-xs text-red-500">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-semibold text-slate-700 mb-1.5">Email Address <span class="text-red-400">*</span></label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="you@company.com" required
                                    class="w-full rounded-xl border px-4 py-3 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:border-brand focus:bg-white focus:ring-2 focus:ring-brand/10 transition-all {{ $errors->has('email') ? 'border-red-300 bg-red-50' : 'border-slate-200 bg-slate-50' }}">
                                @error('email')<p class="mt-1.5 text-xs text-red-500">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-slate-700 mb-1.5">Phone Number</label>
                                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="+880 1XXX-XXXXXX"
                                    class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:border-brand focus:bg-white focus:ring-2 focus:ring-brand/10 transition-all">
                            </div>
                            <div>
                                <label for="service" class="block text-sm font-semibold text-slate-700 mb-1.5">Service Interested In</label>
                                <select id="service" name="service"
                                    class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-brand focus:bg-white focus:ring-2 focus:ring-brand/10 transition-all">
                                    <option value="">— Select a service —</option>
                                    <option {{ old('service')==='support'   ? 'selected':'' }} value="support">Online & On-site Support</option>
                                    <option {{ old('service')==='staffing'  ? 'selected':'' }} value="staffing">Part-time / Full-time IT Staff</option>
                                    <option {{ old('service')==='cctv'      ? 'selected':'' }} value="cctv">CCTV Installation & Maintenance</option>
                                    <option {{ old('service')==='networking'? 'selected':'' }} value="networking">Hardware & Networking</option>
                                    <option {{ old('service')==='managed'   ? 'selected':'' }} value="managed">Complete IT Management</option>
                                    <option {{ old('service')==='consulting'? 'selected':'' }} value="consulting">IT Consulting</option>
                                    <option {{ old('service')==='other'     ? 'selected':'' }} value="other">Other / Not Sure</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-semibold text-slate-700 mb-1.5">Message <span class="text-red-400">*</span></label>
                            <textarea id="message" name="message" rows="5" required placeholder="Tell us about your business and what you need help with…"
                                class="w-full rounded-xl border px-4 py-3 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:border-brand focus:bg-white focus:ring-2 focus:ring-brand/10 transition-all resize-none {{ $errors->has('message') ? 'border-red-300 bg-red-50' : 'border-slate-200 bg-slate-50' }}">{{ old('message') }}</textarea>
                            @error('message')<p class="mt-1.5 text-xs text-red-500">{{ $message }}</p>@enderror
                        </div>

                        <button type="submit"
                            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-3.5 rounded-xl bg-brand text-ink font-bold text-sm hover:bg-brand-dark transition-all shadow-lg shadow-brand/20 hover:-translate-y-0.5">
                            Send Message
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </button>
                    </form>
                </div>
            </div>

            {{-- Sidebar (1/3) --}}
            <div class="space-y-5">

                {{-- Contact details (dynamic) --}}
                @php
                $sidebarIconPaths = [
                    'phone'    => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z',
                    'email'    => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                    'address'  => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z',
                    'whatsapp' => 'M17.498 14.382c-.301-.15-1.767-.867-2.04-.966-.273-.101-.473-.15-.673.15-.197.295-.771.964-.944 1.162-.175.195-.349.21-.646.075-.3-.15-1.263-.465-2.403-1.485-.888-.795-1.484-1.77-1.66-2.07-.174-.3-.019-.465.13-.615.136-.135.301-.345.451-.523.146-.181.194-.301.297-.496.1-.21.049-.375-.025-.524-.075-.15-.672-1.62-.922-2.206-.24-.584-.487-.51-.672-.51-.172-.015-.371-.015-.571-.015-.2 0-.523.074-.797.359-.273.3-1.045 1.02-1.045 2.475s1.07 2.865 1.219 3.075c.149.195 2.105 3.195 5.1 4.485.714.3 1.27.48 1.704.629.714.227 1.365.195 1.88.121.574-.091 1.767-.721 2.016-1.426.255-.705.255-1.29.18-1.425-.074-.135-.27-.21-.57-.345z M12 2a10 10 0 110 20A10 10 0 0112 2z',
                    'facebook' => 'M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z',
                    'website'  => 'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9',
                ];
                $allDetails = $contactDetails->flatten();
                @endphp
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-7">
                    <h3 class="font-bold text-slate-900 mb-6">Contact Details</h3>
                    <ul class="space-y-5">
                        @forelse($allDetails as $detail)
                        <li class="flex items-start gap-3">
                            <div class="w-9 h-9 rounded-xl bg-brand/10 border border-brand/20 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-brand" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $sidebarIconPaths[$detail->type] ?? $sidebarIconPaths['website'] }}"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-slate-400 font-medium mb-0.5">{{ $detail->label }}</p>
                                <p class="text-sm text-slate-800 font-semibold">{{ $detail->value }}</p>
                            </div>
                        </li>
                        @empty
                        <li class="text-sm text-slate-400">No contact details added yet.</li>
                        @endforelse
                    </ul>
                </div>

                {{-- Emergency support --}}
                <div class="bg-red-50 border border-red-200 rounded-2xl p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="w-2 h-2 rounded-full bg-red-400 animate-pulse"></span>
                        <span class="text-red-600 text-xs font-bold uppercase tracking-widest">Emergency Support</span>
                    </div>
                    <p class="text-slate-700 text-sm leading-relaxed mb-4">
                        For critical system failures outside business hours, call our emergency line. We respond within <strong>30 minutes</strong>.
                    </p>
                    @php $emergencyPhone = isset($contactDetails['phone']) ? $contactDetails['phone']->first() : null; @endphp
                    <a href="tel:{{ $emergencyPhone ? preg_replace('/\s+/', '', $emergencyPhone->value) : '+8801XXXXXXXXX' }}" class="flex items-center justify-center gap-2 py-2.5 rounded-xl bg-red-500 text-white text-sm font-bold hover:bg-red-600 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        Call Emergency Line
                    </a>
                </div>

                {{-- Response promise --}}
                <div class="bg-brand/8 border border-brand/20 rounded-2xl p-6">
                    <h4 class="font-bold text-slate-900 text-sm mb-3">Our Response Promise</h4>
                    <div class="space-y-2">
                        @foreach(['Email reply within 2 hours', 'On-site visit same or next day', 'Emergency response in 30 min', 'No ticket queues — real humans'] as $p)
                        <div class="flex items-center gap-2 text-xs text-slate-600">
                            <svg class="w-3.5 h-3.5 text-brand shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            {{ $p }}
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

</x-layouts.app>
