@extends('welcome')

@section ('content')
    <div>
    <p><a href="/adminpanel" class="btn-default"> Go back</a></p>
    <h3><a href="/adminpanel/{{$EduCenters->id}}">{{$EduCenters->name}}</a></h3>
    <p>{{$EduCenters->email}}</p>
    <p>{{$EduCenters->address}}</p>
    </div>
@endsection 