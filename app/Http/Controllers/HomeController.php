<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function create()
    {
        return view('createUser');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
        $input = $request->all();
        $user = User::create($input);

        return back()->with('success', 'User created successfully.');
    }
}
