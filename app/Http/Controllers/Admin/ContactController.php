<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('admin.contacts.index', [
            'contacts' => Contact::latest()->paginate(20),
        ]);
    }

    public function show(Contact $contact): View
    {
        $contact->update(['is_read' => true]);
        return view('admin.contacts.show', compact('contact'));
    }

    public function destroy(Contact $contact): RedirectResponse
    {
        $contact->delete();
        return redirect()->route('admin.contacts.index')->with('success', 'Message deleted.');
    }
}
