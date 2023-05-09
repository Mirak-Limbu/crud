<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    function nextPage()
    {
        $people = Person::all();
        $i = 1;
        return view('newPage',compact('people','i'));
    }

    function create(Request $request)
    {
        $person = new Person();
        $person->email = $request->email;
        $person->full_name = $request->full_name;
        return redirect()->back();
    }
}
