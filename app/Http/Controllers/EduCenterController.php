<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EduCenter;
use App\User;
use DB;
use Illuminate\Support\Facades\Hash;

class EduCenterController extends Controller
{

    public function index()
    {
        return view('roles.EduCenter');
    }

    public function adminpanel()
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
            'address' => 'required',
            'tell_number' => 'required',
            'center_site' => 'required',
            'center_about' => 'required',
            'user_name' => 'required',
            'login' => 'required',
            'password' =>'required'
        ]);
       
        $eduCenter = EduCenter::create([ 
            'name' => $request->name,  
            'email' => $request->email,  
            'address' => $request->address, 
            'tell_number' => $request->tell_number,
            'center_site' => $request->center_site,
            'center_about' => $request->center_about
        ]);
       
        $user = DB::table('users')->insert([
            'role_id' => 2,
            'edu_center_id' => $eduCenter->id, 
            'name' => $request->user_name,
            'login' => $request->login,
            'password' => bcrypt($request->password) // nimaga buyerga newPassword deb yozgansan
            // internetdan olib yozgandim, shu bcrypt qilmoqchi bo`lib
            // togrla
        ]);
        
        return redirect('/adminpanel');
       // ishladiku bu ishladi, qolganlari ishlamayabdida

    }
}
