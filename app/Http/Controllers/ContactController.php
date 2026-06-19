<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name'    => ['required', 'string', 'max:100'],
            'email'   => ['required', 'email', 'max:150'],
            'phone'   => ['nullable', 'string', 'max:20'],
            'service' => ['nullable', 'string', 'max:50'],
            'message' => ['required', 'string', 'min:10', 'max:2000'],
        ]);

        Contact::create($data);

        return back()->with('success', 'Thanks for reaching out! We\'ll be in touch within a few hours.');
    }
}
