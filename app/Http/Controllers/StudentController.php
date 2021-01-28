<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\EduCenter;
use App\User;
use DB;
use Illuminate\Support\Facades\Hash;


class StudentController extends Controller
{
    public function index()
    {
        return view('students.CreateStudent'); 
    } // showda 1 ta obyket keladi, uni jadval qilish nima keragi bor, joy keng chiroyli qilib yoyib chiqaz 

    public function showindex()
    {
        $user = auth()->user();
        $students = Student::where('id', $user->student_id)->get();
        return view('students.showStudent')->with('students', $students );; 
    }
    
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'date_birth' => 'required',
            'TIN' => 'required',
            'email' => 'required',
            'address' => 'required',
            'tell_number' => 'required',
            'name' => 'required',
            'login' => 'required',
            'password' =>'required'
        ]);
        // validatsiyadan otmagani uchun orqaga qaytarib yuborgan, 
        // san error larni chiqarishni qilmaganing uchun error message ni korsatmayapti
        $userr = auth()->user();
        $student = Student::create([ 
            'center_id' => $userr->edu_center_id, 
            'first_name' => $request->first_name,  
            'last_name' => $request->last_name,  
            'date_birth' => $request->date_birth, 
            'TIN' => $request->TIN,
            'email' => $request->email,
            'address' => $request->address,
            'tell_number' => $request->tell_number

        ]);
        $userr = auth()->user();
        $user = User::create([ 
            'edu_center_id' => $userr->edu_center_id,
            'role_id' => 3,
            'student_id' => $student->id, 
            'name' => $request->name,
            'login' => $request->login,
            'password' => bcrypt($request->password)
        ]);
        
        return redirect('/educenter');

    }

    public function show($id)
    {
        $student = Student::find($id);
        return view('students.showStudent')->with('student', $student );
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit')->with('student', $student);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'date_birth' => 'required',
            'TIN' => 'required',
            'email' => 'required',
            'address' => 'required',
            'tell_number' => 'required',
            // 'name' => 'required',
            // 'login' => 'required',
            // 'password' =>'required'
        ]);
        
        
        // $student = Student::update([ 
        //     'first_name' => $request->first_name,  
        //     'last_name' => $request->last_name,  
        //     'date_birth' => $request->date_birth, 
        //     'TIN' => $request->TIN,
        //     'email' => $request->email,
        //     'address' => $request->address,
        //     'tell_number' => $request->tell_number

        // ]);

        $data =$request->all();
        $student=Student::find($id);
        $student -> update($data);

        // $userr = auth()->user();
        // $user = User::create([ 
        //     'edu_center_id' => $userr->edu_center_id,
        //     'role_id' => 3,
        //     'student_id' => $student->id, 
        //     'name' => $request->name,
        //     'login' => $request->login,
        //     'password' => bcrypt($request->password)
        // ]);
        
        return redirect('/educenter')->with('success','center updated');
    }

    public function destroy($id)
    {
        $student=Student::find($id);
        $student->delete();

        return redirect('/educenter')->with('success','center deleted');
    }



}
