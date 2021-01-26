<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this ->middleware('guest', ['except' => 'destroy']);
    }


    public function create()
    {
        return view('sessions.create');

    }

    public function store()
    {
        if (! auth()->attempt(request(['login', 'password']))) {
            return back()->withErrors(['msg', 'The Message']);
        }

        $user = auth()->user();

       
        switch($user->role_id) 
        {
            case 1: return redirect('/adminpanel'); break; 
            case 2: return redirect('/educenter'); break; 
            case 3: return redirect('/student'); break; 
        }
    }
    
    
    public function destroy()
    {
        auth()->logout();

        return redirect()->home();

        
    }
}
