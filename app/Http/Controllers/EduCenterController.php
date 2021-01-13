<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EduCenter;

class EduCenterController extends Controller
{
    public function index()
    {
        $EduCenters = EduCenter::all();
        return view('roles.AdminPanel')->with('EduCenters', $EduCenters );
    }

    public function CreateCenter()
    {
        return view('centers.CreateCenter');
    }

    public function show($id)
    {
        $EduCenters = EduCenter::find($id);
        return view('centers.ShowCenter')->with('EduCenters', $EduCenters );
    }

    public function store(Request $request)
    {
        

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'address' => 'required'
        ]);

        $EduCenter = $request->all();
        EduCenter::create($EduCenter);
        
        return redirect('/adminpanel');

        // auth()->user()->publish(
        //     new Post(request(['name', 'email' , 'address']))
        // );


        // session()->flash(
        //     'message', 'your post has now been published'
        // );



        // And then redirrect to the home page
        

    }
}
