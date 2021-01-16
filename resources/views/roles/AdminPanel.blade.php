@extends ('welcome')

@section ('content')
<div>
<div class="mb-3">
    <a href="/createcenter" class="btn btn-primary btn-lg active float-right" role="button" aria-pressed="true">O`quv markaz qo`shish</a>
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
            </tr>
          </tbody>
        @endforeach
   @endif
  
</table> 

</div>
@endsection 