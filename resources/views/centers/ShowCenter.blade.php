@extends('welcome')

@section ('content')
    <!-- <div>
    <p><a href="/adminpanel" class="btn-default"> Go back</a></p>
    <h3><a href="/adminpanel/{{$EduCenters->id}}">{{$EduCenters->name}}</a></h3>
    <p>{{$EduCenters->email}}</p>
    <p>{{$EduCenters->address}}</p>
    </div> -->

<div>
    <div class="mb-3">
    <a href="{{ url('EduCenter/'.$EduCenters->id.'/edit') }}" class="btn btn-primary  active float-right" role="button" aria-pressed="true">Update</a>
    </div>

    <div class="mb-3">
        <form method="POST" action="{{ route('EduCenter.destroy', $EduCenters->id) }}" id="post-destroy">
            @method('DELETE')
            {{ csrf_field() }}
            <input type="submit" value="Delete" class="btn  btn-danger active float-right">
        </form>
    </div>

    <div class="mb-3">
    <a href="/adminpanel" class="btn btn-primary  active float-left" role="button" aria-pressed="true">Go back</a>
    </div>
</div>
<br>
<br>
<h2>About {{$EduCenters->name}} </h2>
<ol>
   <p> Edu senter name : {{$EduCenters->name}}</p>
   <p> Edu senter email: {{$EduCenters->email}}</p>
   <p> Edu senter address: {{$EduCenters->address}}</p>
   <p> Edu senter tell number: {{$EduCenters->tell_number}}</p>
   <p> Edu senter web site:  {{$EduCenters->center_site}}</p>
   <p> Edu senter about: {{$EduCenters->center_about}} </p>
</ol>
    
        
        
        
        
       
       
        
        
   




@endsection 