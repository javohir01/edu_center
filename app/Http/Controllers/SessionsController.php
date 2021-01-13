<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');

    }

    public function store()
    {
        // dd(request(['login', 'password']));
        if (! auth()->attempt(request(['login', 'password']))) {
            // return back()->withErrors([
            //     'massage' =>'Plaase check your credentisls and try again.'
            // ]);
            return back()->withErrors(['msg', 'The Message']);
        }

        return redirect()->home();
    }
    
    
    public function destroy()
    {
        auth()->logout();

        return redirect()->home();

        
    }
}
