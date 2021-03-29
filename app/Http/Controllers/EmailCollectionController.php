<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmailCollectionController extends Controller
{
    public function index () {
        $emails = Email::all();
        return view('emails.index', compact('emails'));
    }

    public function create ()
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
            ->with('success', 'Project created successfully.');
        // back()->with('post_created', 'Email has been submitted successfully');
        // return view('email_thanks');
    }
}
