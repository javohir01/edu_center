@extends ('welcome')

@section ('content')
<div>
<a href="/createcenter" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">O`quv markaz qo`shish</a>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"> Name</th>
      <th scope="col"> Email</th>
      <th scope="col"> Adres</th>
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
            </tr>
          </tbody>
        @endforeach
   @endif
  
</table> 

</div>
@endsection 