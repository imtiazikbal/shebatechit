<x-admin.layout title="Message from {{ $contact->name }}">

    <div class="max-w-2xl">
        <a href="{{ route('admin.contacts.index') }}" class="inline-flex items-center gap-2 text-slate-400 hover:text-slate-700 text-sm mb-6 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            Back to messages
        </a>

        <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden">
            <div class="px-6 py-5 border-b border-slate-100 flex items-start justify-between gap-4">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-brand/15 flex items-center justify-center text-brand font-black text-lg">
                        {{ strtoupper(substr($contact->name, 0, 1)) }}
                    </div>
                    <div>
                        <h2 class="font-bold text-slate-900">{{ $contact->name }}</h2>
                        <a href="mailto:{{ $contact->email }}" class="text-brand text-sm hover:underline">{{ $contact->email }}</a>
                        @if($contact->phone)
                        <p class="text-slate-400 text-xs mt-0.5">{{ $contact->phone }}</p>
                        @endif
                    </div>
                </div>
                <div class="text-right shrink-0">
                    <p class="text-xs text-slate-400">{{ $contact->created_at->format('d M Y') }}</p>
                    <p class="text-xs text-slate-400">{{ $contact->created_at->format('H:i') }}</p>
                    @if($contact->service)
                    <span class="inline-block mt-1 text-xs bg-brand/10 text-brand border border-brand/20 px-2 py-0.5 rounded-lg capitalize">{{ $contact->service }}</span>
                    @endif
                </div>
            </div>

            <div class="px-6 py-6">
                <p class="text-xs font-semibold text-slate-400 uppercase tracking-widest mb-3">Message</p>
                <p class="text-slate-700 leading-relaxed whitespace-pre-wrap">{{ $contact->message }}</p>
            </div>

            <div class="px-6 py-4 bg-slate-50 border-t border-slate-100 flex items-center justify-between">
                <a href="mailto:{{ $contact->email }}?subject=Re: Your enquiry to ShebaTech"
                   class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-brand text-ink font-bold text-sm hover:bg-brand-dark transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"/></svg>
                    Reply via Email
                </a>
                <form method="POST" action="{{ route('admin.contacts.destroy', $contact) }}" onsubmit="return confirm('Delete this message?')">
                    @csrf @method('DELETE')
                    <button type="submit" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl border border-red-200 text-red-500 text-sm hover:bg-red-50 transition-all">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>

</x-admin.layout>
