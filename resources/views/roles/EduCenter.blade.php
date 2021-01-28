@extends ('welcome')

@section ('content')
<h2 align='center'> "{{ Auth::user()->name }}" o`quv markazi markazi o`quvchilari ro`yxati</h2>


<div>
<div class="mb-3">
  <a href="/createstudent" class="btn btn-primary active float-right" role="button" aria-pressed="true">O`quvchi qo`shish</a>
</div>

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
      <th scope="col"> update</th>
      <th scope="col"> delete</th>
    </tr>
  </thead>

    @if(count($students))
        @foreach($students as $student)
          <tbody>
              <tr>
              <th scope="row">{{$student ->id}}</th>
               <td><a href="/educenter/{{$student ->id}}">{{$student->first_name}}</a></td>
               <td>{{$student->last_name}}</td>
               <td>{{$student->date_birth}}</td>
               <td>{{$student->TIN}}</td>
               <td>{{$student->email}}</td>
               <td>{{$student->address}}</td>
               <td>{{$student->tell_number}}</td>
               <td><a href="{{ url('Student/'.$student->id.'/edit') }}" class="btn btn-primary  active " role="button" aria-pressed="true">Update</a></td>
               <td><form method="POST" action="{{ route('Student.destroy', $student->id) }}" id="post-destroy">
                    @method('DELETE')
                    {{ csrf_field() }}
                    <input type="submit" value="Delete" class="btn  btn-danger active float-right">
                </form></td>
              </tr>
          </tbody>
        @endforeach
    @endif

</table>
</div>
@endsection
