@extends('welcome')

@section ('content') 
<div>
  <div class="ml-30" style="padding: 30px;">
    <a href="{{ url('Student/'.$student->id.'/edit') }}" class="btn btn-primary  active float-right" role="button" aria-pressed="true">Update</a>
  </div>

  <div class="ml-30" style="padding: 30px;">
    <form method="POST" action="{{ route('Student.destroy', $student->id) }}" id="post-destroy">
       @method('DELETE')
       {{ csrf_field() }}
        <input type="submit" value="Delete" class="btn  btn-danger active float-right">
    </form>
  </div>

  <div class="mb-3">
    <a href="/educenter" class="btn btn-primary  active float-left" role="button" aria-pressed="true">Go back</a>
  </div>
 
<style>
 body 
  {
      background-color: #f9f9fa
  }

  .padding {
      padding: 3rem !important
  }

  .user-card-full {
      overflow: hidden
  }

  .card {
      border-radius: 5px;
      -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
      box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
      border: none;
      margin-bottom: 30px
  }

  .m-r-0 {
      margin-right: 0px
  }

  .m-l-0 {
      margin-left: 0px
  }

  .user-card-full .user-profile {
      border-radius: 5px 0 0 5px
  }

  .bg-c-lite-green {
      background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
      background: linear-gradient(to right, #ee5a6f, #f29263)
  }

  .user-profile {
      padding: 20px 0
  }

  .card-block {
      padding: 1.25rem
  }

  .m-b-25 {
      margin-bottom: 25px
  }

  .img-radius {
      border-radius: 5px
  }

  h6 {
      font-size: 14px
  }

  .card .card-block p {
      line-height: 25px
  }

  @media only screen and (min-width: 1400px) {
      p {
          font-size: 14px
      }
  }

  .card-block {
      padding: 1.25rem
  }

  .b-b-default {
      border-bottom: 1px solid #e0e0e0
  }

  .m-b-20 {
      margin-bottom: 20px
  }

  .p-b-5 {
      padding-bottom: 5px !important
  }

  .card .card-block p {
      line-height: 25px
  }

  .m-b-10 {
      margin-bottom: 10px
  }

  .text-muted {
      color: #919aa3 !important
  }

  .b-b-default {
      border-bottom: 1px solid #e0e0e0
  }

  .f-w-600 {
      font-weight: 600
  }

  .m-b-20 {
      margin-bottom: 20px
  }

  .m-t-40 {
      margin-top: 20px
  }

  .p-b-5 {
      padding-bottom: 5px !important
  }

  .m-b-10 {
      margin-bottom: 10px
  }

  .m-t-40 {
      margin-top: 20px
  }

  .user-card-full .social-link li {
      display: inline-block
  }

  .user-card-full .social-link li a {
      font-size: 20px;
      margin: 0 10px 0 0;
      -webkit-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out
  }
</style>
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-12 col-md-16">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                <h6 class="f-w-600">{{$student->first_name}}  {{$student->last_name}} </h6>
                                <p>STUDENT </p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Personal data</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">First name:</p>
                                        <h6 class="text-muted f-w-400">{{$student->first_name}}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Last name:</p>
                                        <h6 class="text-muted f-w-400">{{$student->last_name}}</h6>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Date birth:</p>
                                        <h6 class="text-muted f-w-400">{{$student->date_birth}}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">TIN :</p>
                                        <h6 class="text-muted f-w-400">{{$student->TIN}}</h6>
                                    </div>
                                </div>

                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Contact information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Tell number:</p>
                                        <h6 class="text-muted f-w-400">{{$student->tell_number}}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email :</p>
                                        <h6 class="text-muted f-w-400">{{$student->email}}</h6>
                                    </div>
                                </div>

                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Territorial data</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Region :</p>
                                        <h6 class="text-muted f-w-400">{{$student->region->name_en}}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">City :</p>
                                        <h6 class="text-muted f-w-400">{{$student->city->name_en}}</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Address:</p>
                                        <h6 class="text-muted f-w-400">{{$student->address}}</h6>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


      
      
      
      
      
      
      
      
      
</div>  

@endsection