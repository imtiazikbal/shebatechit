<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin' }} · ShebaTech</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full bg-slate-100 font-sans" x-data="{ sidebarOpen: false }">

<div class="flex h-full">

    {{-- ── Sidebar ── --}}
    <aside
        :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
        class="fixed inset-y-0 left-0 z-50 w-64 bg-ink flex flex-col transition-transform duration-300
               lg:relative lg:translate-x-0 lg:flex shrink-0"
    >
        {{-- Logo --}}
        <div class="flex items-center gap-3 px-5 py-5 border-b border-white/10">
            <div class="bg-white rounded-xl px-2 py-1">
                <img src="{{ asset('/ShebaTech.png') }}" alt="ShebaTech" class="h-8 w-auto object-contain">
            </div>
            <div class="leading-tight">
                <p class="text-white font-bold text-sm">Sheba<span class="text-brand">Tech</span></p>
                <p class="text-white/40 text-[10px] font-mono uppercase tracking-widest">Admin Panel</p>
            </div>
        </div>

        {{-- Nav --}}
        <nav class="flex-1 px-3 py-4 space-y-1 overflow-y-auto">
            @php
            $navItems = [
                ['route' => 'admin.dashboard',      'label' => 'Dashboard',  'icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6'],
                ['route' => 'admin.blogs.index',    'label' => 'Blog Posts', 'icon' => 'M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z'],
                ['route' => 'admin.news.index',     'label' => 'News',       'icon' => 'M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z'],
                ['route' => 'admin.contacts.index',        'label' => 'Contacts',        'icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
                ['route' => 'admin.contact-details.index', 'label' => 'Contact Details', 'icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z'],
            ];
            @endphp
            @foreach($navItems as $item)
            @php $active = request()->routeIs($item['route']) || request()->routeIs($item['route'].'*'); @endphp
            <a
                href="{{ route($item['route']) }}"
                class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium transition-all
                       {{ $active ? 'bg-brand/15 text-brand border border-brand/25' : 'text-white/60 hover:text-white hover:bg-white/8' }}"
            >
                <svg class="w-4.5 h-4.5 shrink-0" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['icon'] }}"/>
                </svg>
                {{ $item['label'] }}
                @if($item['route'] === 'admin.contacts.index')
                    @php $unread = \App\Models\Contact::where('is_read', false)->count(); @endphp
                    @if($unread > 0)
                    <span class="ml-auto text-[10px] font-bold bg-red-500 text-white rounded-full px-1.5 py-0.5">{{ $unread }}</span>
                    @endif
                @endif
            </a>
            @endforeach
        </nav>

        {{-- Footer --}}
        <div class="px-4 py-4 border-t border-white/10">
            <div class="flex items-center justify-between">
                <div class="text-xs text-white/35 font-mono">{{ session('admin_email') }}</div>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="text-white/40 hover:text-red-400 transition-colors" title="Logout">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                    </button>
                </form>
            </div>
        </div>
    </aside>

    {{-- Overlay (mobile) --}}
    <div x-show="sidebarOpen" @click="sidebarOpen=false" class="fixed inset-0 bg-black/50 z-40 lg:hidden"></div>

    {{-- ── Main ── --}}
    <div class="flex-1 flex flex-col min-w-0 overflow-hidden">

        {{-- Top bar --}}
        <header class="bg-white border-b border-slate-200 px-6 py-4 flex items-center gap-4 shrink-0">
            <button @click="sidebarOpen=true" class="lg:hidden text-slate-500 hover:text-slate-900">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
            <h1 class="text-slate-800 font-bold text-lg">{{ $title ?? 'Dashboard' }}</h1>
            <div class="ml-auto flex items-center gap-2 text-xs text-slate-400 font-mono">
                <span class="w-1.5 h-1.5 rounded-full bg-green-400 animate-pulse"></span>
                Admin · {{ date('D, d M Y') }}
            </div>
        </header>

        {{-- Flash --}}
        @if(session('success'))
        <div class="mx-6 mt-4 flex items-center gap-3 bg-green-50 border border-green-200 text-green-700 rounded-xl px-4 py-3 text-sm">
            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            {{ session('success') }}
        </div>
        @endif

        {{-- Page content --}}
        <main class="flex-1 overflow-y-auto p-6">
            {{ $slot }}
        </main>
    </div>

</div>
</body>
</html>
