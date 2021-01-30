<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\EduCenter;
use App\User;
use App\Regions;
use App\Cities;
use DB;
use Illuminate\Support\Facades\Hash;


class StudentController extends Controller
{
    public function index()
    {
        $region_list=DB::table('regions')
                    ->get();
        $science_list=DB::table('sciences')
                    ->get();
        return view('students.createStudent', ['region_list' => $region_list, 'science_list' => $science_list ]); 
    }  

    public function fetch(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $data =DB::table('cities')
                ->where('region_id', $value)
                ->get();
                // dd($data);
        $output = '<option value="">Select '.ucfirst($dependent).'</option>';
        foreach($data as $row)
        {
            $output .=( '<option value="'.$row->id.'">'. $row->name_uz .'</option>');
        }
        echo $output;
    }

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
        $user = auth()->user(); // nega 2 ta r
        // nega requestda region deb nomlagansan, senga region kelmaydiku, region_id keladi hozi tog`irlab qo`yaman
        $student = Student::create([ 
            'science_id'=>$request->science_id,
            'region_id'=>$request->region_id,
            'city_id'=>$request->city_id,
            'center_id' => $user->edu_center_id, 
            'first_name' => $request->first_name,  
            'last_name' => $request->last_name,  
            'date_birth' => $request->date_birth, 
            'TIN' => $request->TIN,
            'email' => $request->email,
            'address' => $request->address,
            'tell_number' => $request->tell_number

        ]);
        $user = auth()->user();
        User::create([ // bu aslida kerak emas, bizga yaratsa boldi uni olib qayerdadir ishlatmagankusan
            'edu_center_id' => $user->edu_center_id, // bu user da edu_center_id bo'lmaydi, null tushuntirgandimu
            'role_id' => 3,  // nimaga edu_center_id bo`lmaydi, student qaysi centerdan ekanligini bilish uchun kerakku
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
        // $region_id = $student->region_id; // mananbuyerda alohida ozgaruvchiga olish shartmas
        $region = Regions::where('id', $student->region_id)->first(); 
        $city = Cities::where('id' , $student->city_id)->first();
        // tuhsundingmi, ha tushundim
        // qara buishni laravleozonlashtirib qo'ygan
        // sen hozir ergionnjni ruchnoy bazadan ozing olding
        $student->region;
        $student->city;
        // dd($student->toArray()); 
        // relation shu uchun kerak
        // model nomida kiopliok qoshimchasi bo'lmaydi deb aytganman
        // student degan modelga regionni relationini bglab qoyasan
        return view('students.showStudent', ['student' => $student, 'region' => $region ]);
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
