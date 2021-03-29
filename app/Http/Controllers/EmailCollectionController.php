<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmailCollectionController extends Controller
{
    public function index()
    {
        $emails = Email::all();
        return view('emails.index', compact('emails'));
    }

    public function create()
    {
        return view('emails.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'email' => 'required|string|email|max:255'
        ]);
        Email::create($request->all());

        return redirect()->route('emails.index')
            ->with('success', 'Email has been submitted successfully');
    }

    public function edit(Email $email)
    {
        return view('emails.edit', compact('email'));
    }

    public function update(Request $request, Email $email)
    {
        $request->validate([
            'email' => 'required',
        ]);

        $email->update($request->all());

        return redirect()->route('emails.index')
            ->with('success', 'Email updated successfully');
    }

    public function destroy(Email $email)
    {
        $email->delete();

        return redirect()->route('emails.index')
            ->with('success', 'Email deleted successfully');
    }
}
