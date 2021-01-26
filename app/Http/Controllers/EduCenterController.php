<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EduCenter;
use App\User;
use App\Student;
use DB;
use Illuminate\Support\Facades\Hash;

class EduCenterController extends Controller
{

    public function index()
    {
         // qara buyerda nomlashda xato qilgansan
        // $user ni edu_center_id degansan
        // user bu user, edu_center_id uni bitta ustuni (field i)
        // $user dedingmi $user ni ol, qaysidir ustunini emas
        $user = auth()->user();  // boldi shu senga hozir avtorizatsiyada turgan user ni beradi

        // $center_id = Student::students(center_id);
        // print_r($center_id); die;
        $students = Student::where('center_id', $user->edu_center_id)->get(); // endi manabuyerda whereni ishatamiz, ozgaruvchialr kichik harfda
        // man ham shunay qilib olib ko`rdim, faqat get berish kerak ekanligini bilganim yoqda
        // ha yaxshi unda, kn yana bitta joyi nimagadir ishlamayabdi
        // where ni ichiga 2 ta narsa yoziladi (,) bilan
        // birinchisi ustun nomi 2 chisi osha ustun nechiga teng bolishi kerakligi
        // students table da center_id si userni edu_center_id siga teng bo'lganlarini beradi endi senga
        // where qilgandan keyin oxirida get() qilib olinadi
        return view('roles.eduCenter')->with('students', $students );
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
