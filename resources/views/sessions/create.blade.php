@extends ('welcome')
 

@section ('content')

    <div class="col-md-8">
        <h1> Sign In </h1>
    
        <form  method="POST" action="/login"> 
            {{ csrf_field() }}

            <div class="form-group">
                <label for="login">Login</label>
                <input type="text" class="form-control" id="login" name="login">
            </div>

            <div class="form-group">
                <label for="password"> password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="form-group">
                <button type="sumbit" class="btn btn-primary" >Sign In</button>
                
            </div>


        </form>

    </div>
    @include('layouts.errors')
@endsection 