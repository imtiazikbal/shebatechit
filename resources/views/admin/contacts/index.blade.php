<x-admin.layout title="Contact Messages">

    <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-slate-50 border-b border-slate-200">
                <tr>
                    <th class="text-left px-6 py-3 font-semibold text-slate-600">From</th>
                    <th class="text-left px-4 py-3 font-semibold text-slate-600 hidden md:table-cell">Service</th>
                    <th class="text-left px-4 py-3 font-semibold text-slate-600">Message</th>
                    <th class="text-left px-4 py-3 font-semibold text-slate-600 hidden md:table-cell">Date</th>
                    <th class="px-4 py-3"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse($contacts as $contact)
                <tr class="hover:bg-slate-50 transition-colors {{ !$contact->is_read ? 'bg-brand/5' : '' }}">
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            @if(!$contact->is_read)
                            <span class="w-2 h-2 rounded-full bg-brand shrink-0"></span>
                            @else
                            <span class="w-2 h-2 shrink-0"></span>
                            @endif
                            <div>
                                <p class="font-semibold text-slate-800">{{ $contact->name }}</p>
                                <p class="text-xs text-slate-400">{{ $contact->email }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-4 hidden md:table-cell">
                        @if($contact->service)
                        <span class="text-xs bg-slate-100 text-slate-600 px-2 py-1 rounded-lg capitalize">{{ $contact->service }}</span>
                        @else
                        <span class="text-slate-300">—</span>
                        @endif
                    </td>
                    <td class="px-4 py-4 text-slate-500 max-w-xs">
                        <p class="line-clamp-2 text-xs leading-relaxed">{{ $contact->message }}</p>
                    </td>
                    <td class="px-4 py-4 text-slate-400 text-xs hidden md:table-cell">{{ $contact->created_at->format('d M Y, H:i') }}</td>
                    <td class="px-4 py-4">
                        <div class="flex items-center gap-2 justify-end">
                            <a href="{{ route('admin.contacts.show', $contact) }}" class="text-slate-400 hover:text-brand transition-colors p-1.5 rounded-lg hover:bg-brand/10" title="View">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                            </a>
                            <form method="POST" action="{{ route('admin.contacts.destroy', $contact) }}" onsubmit="return confirm('Delete this message?')">
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
                    <td colspan="5" class="px-6 py-12 text-center text-slate-400">No messages yet.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        @if($contacts->hasPages())
        <div class="px-6 py-4 border-t border-slate-100">{{ $contacts->links() }}</div>
        @endif
    </div>

</x-admin.layout>
