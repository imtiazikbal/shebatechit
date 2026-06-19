<x-admin.layout title="News">

    <div class="flex items-center justify-between mb-6">
        <p class="text-slate-500 text-sm">{{ $items->total() }} item(s)</p>
        <a href="{{ route('admin.news.create') }}" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-brand text-ink font-bold text-sm hover:bg-brand-dark transition-all shadow-sm">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
            New News Item
        </a>
    </div>

    <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-slate-50 border-b border-slate-200">
                <tr>
                    <th class="text-left px-6 py-3 font-semibold text-slate-600">Title</th>
                    <th class="text-left px-4 py-3 font-semibold text-slate-600">Status</th>
                    <th class="text-left px-4 py-3 font-semibold text-slate-600 hidden md:table-cell">Published</th>
                    <th class="px-4 py-3"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse($items as $item)
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="px-6 py-4">
                        <p class="font-semibold text-slate-800 line-clamp-1">{{ $item->title }}</p>
                        @if($item->excerpt)
                        <p class="text-xs text-slate-400 mt-0.5 line-clamp-1">{{ $item->excerpt }}</p>
                        @endif
                    </td>
                    <td class="px-4 py-4">
                        @if($item->is_published)
                            <span class="inline-flex items-center gap-1 text-xs font-semibold text-green-700 bg-green-50 border border-green-200 px-2 py-1 rounded-lg">
                                <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Published
                            </span>
                        @else
                            <span class="text-xs font-semibold text-slate-400 bg-slate-100 px-2 py-1 rounded-lg">Draft</span>
                        @endif
                    </td>
                    <td class="px-4 py-4 text-slate-400 text-xs hidden md:table-cell">
                        {{ $item->published_at?->format('d M Y') ?? '—' }}
                    </td>
                    <td class="px-4 py-4">
                        <div class="flex items-center gap-2 justify-end">
                            <a href="{{ route('admin.news.edit', $item) }}" class="text-slate-400 hover:text-brand transition-colors p-1.5 rounded-lg hover:bg-brand/10">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                            </a>
                            <form method="POST" action="{{ route('admin.news.destroy', $item) }}" onsubmit="return confirm('Delete this item?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="text-slate-400 hover:text-red-500 transition-colors p-1.5 rounded-lg hover:bg-red-50">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-12 text-center text-slate-400">
                        No news items yet. <a href="{{ route('admin.news.create') }}" class="text-brand font-semibold">Create the first one.</a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
        @if($items->hasPages())
        <div class="px-6 py-4 border-t border-slate-100">{{ $items->links() }}</div>
        @endif
    </div>

</x-admin.layout>
