@extends('welcome')


@section('content')

<form method="POST" action="/createcenter">
            {{ csrf_field() }}
  <div class="container">
  <div class='row'>

    
     <div class="form-group col">
       <label for="inputEmail4">Edu Center Name</label>
       <input type="text" name="name" class="form-control" id="inputname" placeholder="name" required>
      </div>
     

   
      <div class="form-group col">
        <label for="inputEmail4">Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="email" required>
      </div>
  </div>
  
  <div class='row'>  
 
    <div class="form-group">
     <div class="form-group col">
        <label for="inputAddress">Address</label>
        <input type="text" name="address" class="form-control" id="address" placeholder="address" required>
     </div>
    </div>

    <div class="form-group">
     <div class="form-group col">
        <label for="inputNumber">tell_number</label>
       <input type="text" name="tell_number" class="form-control" id="tell_number" placeholder="tell_number" required>
      </div>
   </div>

   <div class="form-group">
     <div class="form-group col">
       <label for="inputCenterSite">Edu Center Web Site</label>
        <input type="text" name="center_site" class="form-control" id="center_site" placeholder="center_site" required>
     </div>
   </div>
  </div>

  <div class="row">
   <div class="form-group">
     <div class="form-group col">
     <label for="inputCenterAbout">Edu Center About</label>
      <input type="text" name="center_about" class="form-control" id="center_about" placeholder="center_about" required>
     </div>
    </div>

    <div class="form-group">
     <div class="form-group col">
     <label for="inputName"> Name</label>
      <input type="text" name="user_name" class="form-control" id="name" placeholder="name" required>
     </div>
    </div>
 
    <div class="form-group">
     <div class="form-group col">
     <label for="login">login</label>
      <input type="text" name="login" class="form-control" id="login" placeholder="login" required>
     </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <div class="form-group col">
        <label for="inputpasword">password </label>
        <input type="text" name="password" class="form-control" id="password" placeholder="password" required>
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary btn-lg active float-right"> Go </button>
  </div>
</form>



@endsection