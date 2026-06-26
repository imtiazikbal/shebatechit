@php $editing = $detail->exists; @endphp
<x-admin.layout title="{{ $editing ? 'Edit Contact Detail' : 'Add Contact Detail' }}">

    <div class="max-w-2xl">
        <a href="{{ route('admin.contact-details.index') }}"
           class="inline-flex items-center gap-2 text-slate-400 hover:text-slate-700 text-sm mb-6 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            Back to contact details
        </a>

        <form
            method="POST"
            action="{{ $editing ? route('admin.contact-details.update', $detail) : route('admin.contact-details.store') }}"
            class="space-y-5"
        >
            @csrf
            @if($editing) @method('PUT') @endif

            <div class="bg-white rounded-2xl border border-slate-200 p-6 space-y-5">

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-500 uppercase tracking-widest mb-1.5">Type *</label>
                        <select name="type"
                            class="w-full border border-slate-200 rounded-xl px-4 py-3 text-slate-900 text-sm focus:outline-none focus:border-brand focus:ring-2 focus:ring-brand/20 transition-all @error('type') border-red-300 @enderror">
                            @foreach([
                                'email', 'phone', 'whatsapp', 'facebook', 'twitter',
                                'instagram', 'linkedin', 'youtube', 'address', 'website',
                            ] as $t)
                            <option value="{{ $t }}" {{ old('type', $detail->type) === $t ? 'selected' : '' }}>
                                {{ ucfirst($t) }}
                            </option>
                            @endforeach
                        </select>
                        @error('type')<p class="mt-1 text-xs text-red-500">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-500 uppercase tracking-widest mb-1.5">Sort Order</label>
                        <input type="number" name="sort_order" min="0"
                               value="{{ old('sort_order', $detail->sort_order ?? 0) }}"
                               class="w-full border border-slate-200 rounded-xl px-4 py-3 text-slate-900 text-sm focus:outline-none focus:border-brand focus:ring-2 focus:ring-brand/20 transition-all">
                        <p class="mt-1 text-[11px] text-slate-400">Lower number shows first</p>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-500 uppercase tracking-widest mb-1.5">Label *</label>
                    <input type="text" name="label" value="{{ old('label', $detail->label) }}"
                        class="w-full border border-slate-200 rounded-xl px-4 py-3 text-slate-900 text-sm focus:outline-none focus:border-brand focus:ring-2 focus:ring-brand/20 transition-all @error('label') border-red-300 @enderror"
                        placeholder="e.g. Email Address, Support Phone, Facebook Page…">
                    @error('label')<p class="mt-1 text-xs text-red-500">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-500 uppercase tracking-widest mb-1.5">Value *</label>
                    <input type="text" name="value" value="{{ old('value', $detail->value) }}"
                        class="w-full border border-slate-200 rounded-xl px-4 py-3 text-slate-900 text-sm focus:outline-none focus:border-brand focus:ring-2 focus:ring-brand/20 transition-all @error('value') border-red-300 @enderror"
                        placeholder="e.g. info@shebatech.com or https://facebook.com/shebatech">
                    @error('value')<p class="mt-1 text-xs text-red-500">{{ $message }}</p>@enderror
                </div>

            </div>

            <div class="bg-white rounded-2xl border border-slate-200 p-6 flex items-center justify-between">
                <label class="flex items-center gap-3 cursor-pointer">
                    <div class="relative">
                        <input type="hidden" name="is_active" value="0">
                        <input type="checkbox" name="is_active" value="1" class="sr-only peer"
                            {{ old('is_active', $detail->is_active ?? true) ? 'checked' : '' }}>
                        <div class="w-10 h-6 bg-slate-200 peer-checked:bg-brand rounded-full transition-colors"></div>
                        <div class="absolute top-1 left-1 w-4 h-4 bg-white rounded-full shadow transition-transform peer-checked:translate-x-4"></div>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-slate-800">Active</p>
                        <p class="text-xs text-slate-400">Show this on the website</p>
                    </div>
                </label>

                <button type="submit"
                    class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-ink text-white font-bold text-sm hover:bg-slate-800 transition-all">
                    {{ $editing ? 'Save Changes' : 'Add Detail' }}
                </button>
            </div>

        </form>
    </div>

</x-admin.layout>
