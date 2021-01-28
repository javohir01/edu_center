@extends('welcome')

@section ('content') 
<div>
  <div class="mb-3">
    <a href="{{ url('Student/'.$student->id.'/edit') }}" class="btn btn-primary  active float-right" role="button" aria-pressed="true">Update</a>
  </div>

  <div class="mb-3">
    <form method="POST" action="{{ route('Student.destroy', $student->id) }}" id="post-destroy">
       @method('DELETE')
       {{ csrf_field() }}
        <input type="submit" value="Delete" class="btn  btn-danger active float-right">
    </form>
  </div>

  <div class="mb-3">
    <a href="/educenter" class="btn btn-primary  active float-left" role="button" aria-pressed="true">Go back</a>
  </div>
<br>
<br>
<h2>About Student </h2>
<ol>
   <li>{{$student ->id}}</li>
   <li>{{$student->first_name}}</li>
   <li>{{$student->last_name}}</li>
   <li>{{$student->date_birth}}</li>
   <li>{{$student->TIN}}</li>
   <li>{{$student->email}}</li>
   <li>{{$student->address}}</li>
   <li>{{$student->tell_number}}</li>
</ol>



      
      
      
      
      
      
      
      
      
</div>  

@endsection