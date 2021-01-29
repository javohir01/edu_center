@extends('welcome')


@section('content')

<form method="POST" action="/createcenter">
            {{ csrf_field() }} 
  <div class="container">
    <h3>Shaxsiy malumotlar</h3>
    <br>


    <div class='row'>  
      <div class="form-group col">
        <label for="name">Edu Center Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="name" required>
      </div>
      
      <div class="form-group col">
        <label for="head_name">Head Name</label>
        <input type="text" name="head_name" class="form-control" id="head_name" placeholder="head name" required>
      </div>
    </div>
    
    <br>
    <h3>Aloqa malumotlari</h3>
    <br>
    
    <div class="row">
      
      <div class="form-group col">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="email" required>
      </div>
      

      
      <div class="form-group col">
        <label for="tell_number">tell_number</label>
        <input type="text" name="tell_number" class="form-control" id="tell_number" placeholder="tell_number" required>
      </div>
    

    
      <div class="form-group col">
        <label for="center_site">Edu Center Web Site</label>
        <input type="text" name="center_site" class="form-control" id="center_site" placeholder="center_site" required>
      </div>
    
    </div>
    <br>
    <h3>Hudud  malumotlari</h3>
    <br>

    <div class='row'>  
      <div class="container box">
        <h3 align="center">Ajax Dynamic Dependent</h3> <br />
        <div class="form-group">
          <select name="region_id" id="region_id" class="form-control input-lg" data-dependent="city">
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
        
    </div>
      <br>
    <div class="row">
       
      <div class="form-group col">
          <label for="address">Address</label>
          <input type="text" name="address" class="form-control" id="address" placeholder="address" required>
      </div>
      
    </div>
    <br>
    <h3>Foydalanuvchi  malumotlari</h3>
    <br>  

    <div class="row">
      
        <div class="form-group col">
          <label for="name"> Name</label>
          <input type="text" name="user_name" class="form-control" id="name" placeholder="name" required>
        </div>
       
      
     
        <div class="form-group col">
          <label for="login">login</label>
          <input type="text" name="login" class="form-control" id="login" placeholder="login" required>
        </div>
      

      
        <div class="form-group col">
          <label for="password">password </label>
          <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
        </div>
      
    </div>

    <div class="row">
      <div class="form-group col">
          <label for="center_about">address</label>
          <textarea name="center_about" class="form-control" id="center_about" rows="3" placeholder="center_about" required></textarea>
      </div>
    </div>

    
    <button type="submit" class="btn btn-primary btn-lg active float-right"> Go </button>
  
  


  </div>
</form>
<script>

$(document).ready(function(){ // id ishlatsang # bilan, class ishlatsng . bilan
  $('#region').change(function(){ // manabuyerda yozilgan $('.dynamic).change  nima deb oylaysan, 
  // anig`ini bilmadim, balki dinamik malumotku bu, shu tanlanganda degani bo`lsa kk, yani select tanlanganda bajaradigan ish
  //   .dynamic deb yzilgani bu class degani, dynamic degan classga ega elementda change hodisasi sodir bo'lganda ioshla degani
   // change bu tanlanganda deganimi, change bu event nomi, selectda tanlaganignda change eventi sodir bo'ladi, ha tushundim
   // qani dynamic degan class, bilmadim 
  //  console.log('select tanlandi!!!')// xop bu nima qilishi kerak
  // seelct tanlanganda tanlangan regionni id sini olib ,citydagi shu region_id ga teng name_uz larini olib kelishi kk
    // toliq yoz, cities table dagi shu region id siga teng bo`lgan region_id larni olishi kerak va shu region_id larni name_uz ustunini selectda chiqarishi kerak
   //  interneting yaxshimas
   // region id siga teng bo`lgan region_id larni, bu nima degani regions tabledagi id bilan cities tabledagi region_is ni taqqoslashimiz kerak
   // keyin mos kelganini name_us ustunini selectda chiqarishimiz kerak
   // masalan qoraqalpogistonni tanladi deylik, nima bolishi kerak shunda
   // qoraqoalpoqni idsi 8, endi cities tableda region_id 8 bo`lganlarni chaqirib olamiz va shularni name_uz ustunini chiqaramiz
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
          $('#city').html(result);
        }
      })
    }
  });
});
</script>

  @include('layouts.errors')
@endsection