@extends ('welcome')

@section ('content')
<h2 align='center'> O`quv markazlar ro`yxati</h2>
<div>
<div class="mb-3">
    <a href="/createcenter" class="btn btn-primary  active float-right" role="button" aria-pressed="true">O`quv markaz qo`shish</a>
</div>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"> Name</th>
      <th scope="col"> Email</th>
      <th scope="col"> Address</th>
      <th scope="col"> Tell_number</th>
      <th scope="col"> Edu Center web site</th>
      <th scope="col"> Edu Center about</th>
      <th scope="col"> update</th>
      <th scope="col"> delete</th>
    </tr>
  </thead>
  @if(count($EduCenters))
        @foreach($EduCenters as $EduCenter)
          <tbody>
            <tr>
              <th scope="row">{{$EduCenter ->id}}</th>
              <td><a href="/adminpanel/{{$EduCenter ->id}}">{{$EduCenter->name}}</a></td>
              <td>{{$EduCenter->email}}</td>
              <td>{{$EduCenter->address}}</td>
              <td>{{$EduCenter->tell_number}}</td>
              <td>{{$EduCenter->center_site}}</td>
              <td>{{$EduCenter->center_about}}</td>
              <td><a href="{{ url('EduCenter/'.$EduCenter->id.'/edit') }}" class="btn btn-primary  active float-right" role="button" aria-pressed="true">Update</a></td>
              <td>
                <form method="POST" action="{{ route('EduCenter.destroy', $EduCenter->id) }}" id="post-destroy">
                  @method('DELETE')
                  {{ csrf_field() }}
                  <input type="submit" value="Delete" class="btn  btn-danger active float-right">
                </form>
              </td>
            </tr>
          </tbody>
        @endforeach
   @endif
  
</table> 

</div>
@endsection 