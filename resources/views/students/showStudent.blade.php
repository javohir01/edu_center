@extends('welcome')

@section ('content')
<div>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"> First Name</th>
      <th scope="col"> Last Name</th>
      <th scope="col"> Data birth</th>
      <th scope="col"> TIN</th>
      <th scope="col"> Email</th>
      <th scope="col"> address</th>
      <th scope="col"> tell number</th>
    </tr>
  </thead>

    @if(count($students))
        @foreach($students as $student)
          <tbody>
              <tr>
              <th scope="row">{{$student ->id}}</th>
               <td><a href="/educenter/{{$student ->id}}">{{$student->firs_name}}</a></td>
               <td>{{$student->last_name}}</td>
               <td>{{$student->data_birth}}</td>
               <td>{{$student->TIN}}</td>
               <td>{{$student->email}}</td>
              <td>{{$student->address}}</td>
               <td>{{$student->tell_number}}</td>
              </tr>
          </tbody>
        @endforeach
    @endif

</table>
</div>
@endsection