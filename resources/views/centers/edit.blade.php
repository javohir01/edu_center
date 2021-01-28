@extends('welcome')


@section('content')

<form method="POST" action="{{ route('EduCenter.update', $EduCenter->id) }}" id="post-update">
    @method('PUT')
            {{ csrf_field() }}
  <div class="container">
  <div class='row'>

    
     <div class="form-group col">
       <label for="name">Edu Center Name</label>
       <input type="text" name="name" class="form-control" id="name" placeholder="{{$EduCenter->name}}" required>
      </div>
     

   
      <div class="form-group col">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="{{$EduCenter->email}}" required>
      </div>
  </div>
  
  <div class='row'>  
 
    <div class="form-group">
     <div class="form-group col">
        <label for="address">Address</label>
        <input type="text" name="address" class="form-control" id="address" placeholder="{{$EduCenter->address}}" required>
     </div>
    </div>

    <div class="form-group">
     <div class="form-group col">
        <label for="tell_number">tell_number</label>
       <input type="text" name="tell_number" class="form-control" id="tell_number" placeholder="{{$EduCenter->tell_number}}" required>
      </div>
   </div>

   <div class="form-group">
     <div class="form-group col">
       <label for="center_site">Edu Center Web Site</label>
        <input type="text" name="center_site" class="form-control" id="center_site" placeholder="{{$EduCenter->center_site}}" required>
     </div>
   </div>
  </div>

  <div class="row">
    <div class="form-group col">
      <label for="exampleFormControlTextarea1">Center About</label>
      <textarea name="center_about" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="{{$EduCenter->center_about}}" required></textarea>
    </div>
  </div>
    <!-- <div class="form-group">
     <div class="form-group col">
     <label for="name"> Name</label>
      <input type="text" name="user_name" class="form-control" id="name" placeholder="{{$EduCenter->user_name}}" required>
     </div>
    </div>
 
    <div class="form-group">
      <div class="form-group col">
        <label for="login">login</label>
        <input type="text" name="login" class="form-control" id="login" placeholder="login" required>
      </div>
    </div>
  

  <div class="row">
    <div class="form-group">
      <div class="form-group col">
        <label for="password">password </label>
        <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
      </div>
    </div>
  </div> -->
  <button type="submit" class="btn btn-primary  active float-right"> Save </button>
  
</div>

</form>

<a href="/adminpanel/{{$EduCenter ->id}}">
    <button type="submit"  class="btn btn-primary  active float-left"> Go back </button>
</a>

  @include('layouts.errors')
@endsection