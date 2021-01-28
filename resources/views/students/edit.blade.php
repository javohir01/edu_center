@extends('welcome')


@section('content')

<form method="POST"  action="{{ route('student.update', $student->id) }}" id="post-update">
@method('PUT')
{{ csrf_field() }}
  <div class="container">
    <div class='row'>

    
     <div class="form-group col">
       <label for="first_name">First Name</label> 
       <input type="text" name="first_name" class="form-control" id="first_name" placeholder="{{$student->first_name}}" required>
      </div>
     

   
      <div class="form-group col">
        <label for="last_name">Last name</label>
        <input type="text" name="last_name" class="form-control" id="last_name" placeholder="{{$student->last_name}}" required>
      </div>
    </div>
  
    <div class='row'>  
 
        <div class="form-group">
            <div class="form-group col">
                <label for="date_birth">Date birth</label>
                <input type="date" name="date_birth" class="form-control" id="date_birth" placeholder="{{$student->date_birth}}" required>
            </div>
        </div>

        <div class="form-group">
            <div class="form-group col">
                <label for="TIN">TIN</label>
                <input type="text" name="TIN"  minlength="9" maxlength="9" class="form-control" id="TIN" placeholder="{{$student->TIN}}" required>
            </div>
        </div>

        <div class="form-group">
            <div class="form-group col">
                <label for="email">email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="{{$student->email}}" required>
            </div>
        </div>

    </div>

    <div class="row">
   
      <div class="form-group col">
        <label for="tell_number">tell number</label>
        <input type="number" name="tell_number" maxlength="20" class="form-control" id="tell_number" placeholder="{{$student->tell_number}}" required>
      </div>
   

    
      <div class="form-group col">
        <label for="exampleFormControlTextarea1">address</label>
        <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="{{$student->address}}" required></textarea>
      </div>
    </div>

    <!-- <div class="row">
    <div class="form-group">
      <div class="form-group col">
        <label for="name"> Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="name" required>
      </div>
    </div> -->
 
    <!-- <div class="form-group">
      <div class="form-group col">
        <label for="login">login</label>
        <input type="text" name="login" class="form-control" id="login" placeholder="login" required>
      </div>
    </div> -->


    <!-- <div class="form-group">
      <div class="form-group col">
        <label for="password">password </label>
        <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
      </div>
    </div> -->
  <!-- </div> -->
  
  <div class="">
    <div class="form-group">
      <div class="form-group">
        <button type="submit" class="btn btn-primary  active float-right"> SAVE </button>
      </div>
    </div>
  </div>
</div>
</form>

  @include('layouts.errors')

@endsection