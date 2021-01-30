@extends('welcome')


@section('content')

<form method="POST" action="/createstudent">
            {{ csrf_field() }}
  <div class="container">
    <h3>Shaxsiy malumotlar</h3>
    <br>


    <div class='row'>  
     <div class="form-group col">
       <label for="first_name">First Name</label> 
       <input type="text" name="first_name" class="form-control" id="first_name" placeholder="first name" required>
      </div>

      <div class="form-group col">
        <label for="last_name">Last name</label>
        <input type="text" name="last_name" class="form-control" id="last_name" placeholder="last_name" required>
      </div>
    </div>
  
    <div class='row'>  
      <div class="form-group">
        <div class="form-group col">
          <label for="date_birth">Date birth</label>
          <input type="date" name="date_birth" class="form-control" id="date_birth" placeholder="date_birth" required>
        </div>
      </div>

      <div class="form-group">
        <div class="form-group col">
          <label for="TIN">TIN</label>
          <input type="text" name="TIN"  minlength="9" maxlength="9" class="form-control" id="TIN" placeholder="TIN" required>
        </div>
      </div>

      <div class="form-group">
        <div class="form-group col">
          <label for="science_id">Select science</label>
          <select name="science_id" id="science_id" class="form-control input-lg" >
            <option value=""> Select science</option>
            @foreach($science_list as $science)
              <option value="{{$science->id}}">{{$science->name}}</option>
            @endforeach
          </select>
        </div>
      </div>

    </div>

    <h3>Aloqa malumotlari</h3>
    <br>

    <div class="row">
      <div class="form-group">
        <div class="form-group col">
          <label for="tell_number">tell number</label>
          <input type="number" name="tell_number" maxlength="20" class="form-control" id="tell_number" placeholder="tell_number" required>
        </div>
      </div>
    
      <div class="form-group">
        <div class="form-group col">
          <label for="email">email</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="email" required>
        </div>
      </div>
    </div>

    <h3>Hudud  malumotlari</h3>
    <br>

    <div class="row">
      <div class='row'>  
        <div class="container box">
           <br />
          <div class="form-group">
            <select name="region_id" id="region_id" class="form-control input-lg" data-dependent="city_id">
              <option value=""> Select region</option>
              @foreach($region_list as $name_uz)
              <option value="{{$name_uz->id}}">{{$name_uz->name_uz}}</option>
              @endforeach
            </select>
          </div>
          <br />
          <div class="form-group">
            <select name="city_id" id="city_id" class="form-control input-lg dynamic" >
            <option value=""> Select City</option>
            </select>
          </div>
          <br />
        </div>

        <div class="form-group col">
        <label for="exampleFormControlTextarea1">address</label>
        <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="address" required></textarea>
      </div>
      </div>

    </div>
    
    <h3>Foydalanuvchi  malumotlari</h3>
    <br> 
  
  <div class="row">
    <div class="form-group">
      <div class="form-group col">
        <label for="name"> Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="name" required>
      </div>
    </div>
 
    <div class="form-group">
      <div class="form-group col">
        <label for="login">login</label>
        <input type="text" name="login" class="form-control" id="login" placeholder="login" required>
      </div>
    </div>


    <div class="form-group">
      <div class="form-group col">
        <label for="password">password </label>
        <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
      </div>
    </div>
  </div>
  
  <div class="">
    <div class="form-group">
      <div class="form-group">
        <button type="submit" class="btn btn-primary  active float-right"> SAVE </button>
      </div>
    </div>
  </div>
</div>
</form>

<script>

$(document).ready(function(){ 
  $('#region_id').change(function(){ 
    if($(this).val() != '')
    {
      var select = $(this).attr("id");
      var value =$(this).val();
      var dependent = 'region_id';
      var _token = $('input[name="_token"]').val();
      $.ajax({
        url:"{{route('dynamicdependent.fetch')}}",
        method:"POST",
        data:{select:select, value:value, _token:_token, dependent}, // mana bula doim qo`yiladimi
        success:function(result)
        {
          $('#city_id').html(result);
        }
      })
    }
  });
});
</script>
  @include('layouts.errors')

@endsection