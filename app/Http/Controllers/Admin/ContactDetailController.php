<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactDetail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactDetailController extends Controller
{
    public function index(): View
    {
        return view('admin.contact-details.index', [
            'details' => ContactDetail::orderBy('sort_order')->orderBy('id')->get(),
        ]);
    }

    public function create(): View
    {
        return view('admin.contact-details.form', ['detail' => new ContactDetail()]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'type'       => 'required|string|max:50',
            'label'      => 'required|string|max:100',
            'value'      => 'required|string|max:500',
            'sort_order' => 'nullable|integer|min:0',
            'is_active'  => 'nullable|boolean',
        ]);

        $data['is_active']  = $request->boolean('is_active');
        $data['sort_order'] = $data['sort_order'] ?? 0;

        ContactDetail::create($data);

        return redirect()->route('admin.contact-details.index')->with('success', 'Contact detail added.');
    }

    public function edit(ContactDetail $contactDetail): View
    {
        return view('admin.contact-details.form', ['detail' => $contactDetail]);
    }

    public function update(Request $request, ContactDetail $contactDetail): RedirectResponse
    {
        $data = $request->validate([
            'type'       => 'required|string|max:50',
            'label'      => 'required|string|max:100',
            'value'      => 'required|string|max:500',
            'sort_order' => 'nullable|integer|min:0',
            'is_active'  => 'nullable|boolean',
        ]);

        $data['is_active']  = $request->boolean('is_active');
        $data['sort_order'] = $data['sort_order'] ?? 0;

        $contactDetail->update($data);

        return redirect()->route('admin.contact-details.index')->with('success', 'Contact detail updated.');
    }

    public function destroy(ContactDetail $contactDetail): RedirectResponse
    {
        $contactDetail->delete();

        return redirect()->route('admin.contact-details.index')->with('success', 'Contact detail deleted.');
    }
}
