<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;

class UserEmailCollection extends Controller
{
    public function create()
    {
        // return view('clientmail');
    }

    public function store(Request $request)
    {

        $request->validate([
            'email' => 'required|string|email|max:255'
        ]);
        Email::create($request->all());

        return view('thanks', [
            'email' => $request->email,
        ]);
    }
}
