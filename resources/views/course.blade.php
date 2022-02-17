@extends('layouts.web')

@section('content')     
<div class="d-flex justify-content-around">
<img src="{{$course->img}}" alt="" height="300" width="500">
<h1>{{$course->name}}</h1>
</div> 
<div>
    <p>{{$course->description}}</p>
</div>

    <livewire:course-list>
@endsection