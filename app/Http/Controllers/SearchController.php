<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Student;

class SearchController extends Controller
{
    //
    public function search(Request $request)
    {
        
        // get the search value from the request form
        $search = $request->input('query');

        //   search the names in the user's table
        $users= Student::query()
            ->where('state', 'LIKE', "%{$search}%")
            ->get();
        // return the search view
        return view('webpages.search', compact('users'));

    }
}
