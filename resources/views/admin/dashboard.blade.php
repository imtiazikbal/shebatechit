<x-admin.layout title="Dashboard">

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
        @foreach([
            ['Blog Posts',    $blogCount,      'admin.blogs.index',    '#19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z', 'bg-brand/10 text-brand'],
            ['News Items',    $newsCount,      'admin.news.index',     'M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z', 'bg-purple-500/10 text-purple-400'],
            ['Total Messages',$contactCount,   'admin.contacts.index', 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'bg-accent/10 text-accent'],
            ['Unread',        $unreadContacts, 'admin.contacts.index', 'M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9', 'bg-red-500/10 text-red-400'],
        ] as [$label, $count, $route, $icon, $iconClass])
        <a href="{{ route($route) }}" class="bg-white rounded-2xl border border-slate-200 p-6 hover:shadow-md transition-shadow group">
            <div class="flex items-start justify-between mb-4">
                <div class="w-10 h-10 rounded-xl {{ $iconClass }} flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $icon }}"/>
                    </svg>
                </div>
                <svg class="w-4 h-4 text-slate-300 group-hover:text-brand transition-colors" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </div>
            <div class="text-3xl font-black text-slate-900">{{ $count }}</div>
            <div class="text-sm text-slate-500 mt-1">{{ $label }}</div>
        </a>
        @endforeach
    </div>

    {{-- Recent Messages --}}
    <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden">
        <div class="flex items-center justify-between px-6 py-4 border-b border-slate-100">
            <h2 class="font-bold text-slate-800">Recent Contact Messages</h2>
            <a href="{{ route('admin.contacts.index') }}" class="text-brand text-sm font-semibold hover:underline">View all</a>
        </div>
        @forelse($recentContacts as $c)
        <a href="{{ route('admin.contacts.show', $c) }}" class="flex items-start gap-4 px-6 py-4 hover:bg-slate-50 transition-colors border-b border-slate-50 last:border-0">
            <div class="w-9 h-9 rounded-full bg-brand/10 flex items-center justify-center text-brand font-bold text-sm shrink-0">
                {{ strtoupper(substr($c->name, 0, 1)) }}
            </div>
            <div class="flex-1 min-w-0">
                <div class="flex items-center gap-2">
                    <p class="font-semibold text-sm text-slate-800 truncate">{{ $c->name }}</p>
                    @if(!$c->is_read)<span class="w-2 h-2 rounded-full bg-red-500 shrink-0"></span>@endif
                </div>
                <p class="text-xs text-slate-400 truncate">{{ $c->message }}</p>
            </div>
            <p class="text-xs text-slate-400 shrink-0">{{ $c->created_at->diffForHumans() }}</p>
        </a>
        @empty
        <p class="px-6 py-8 text-center text-slate-400 text-sm">No messages yet.</p>
        @endforelse
    </div>

</x-admin.layout>
