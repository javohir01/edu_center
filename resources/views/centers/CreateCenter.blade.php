@extends('welcome')


@section('content')

<form method="POST" action="/createcenter">
            {{ csrf_field() }}>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Edu Center Name</label>
      <input type="text" name="name" class="form-control" id="inputname" placeholder="name" required>
    </div>
  </div> 

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="email" required>
    </div>
  </div>

  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" name="address" class="form-control" id="address" placeholder="address" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>

@endsection