@extends('layouts.web')
<x-header />
@section('content')     
<div class="grid grid-cols-3 gap-4">
    <div class="text-gray-700 col-span-2 d-flex">      
        <img src="{{ $course->img }}" width="50%" height="50%" class="img-responsive m-5">
        <div>
            <h1 class="text-xl text-center">{{ $course->name }}</h1>
            <p>{{ $course->description }}</p>
            <h2 class="mt-4">{{$course->price}}€</h2>
            <a href="#" class="btn btn-primary" id="cardButton">Agregar a mis cursos</a>
            <p class="text-gray-500 text-sm mt-5">{{ $course->user->name }}</p>
            {{-- <img src="{{ $course->user->avatar }}" class="h-10 w-10 rounded-full mr-2" /> --}}
            <p class="text-gray-300 text-xs">{{ $course->created_at->diffForHumans() }}</p>   
            <p>{{$course->user->email}}  </p> 
        </div>           
    </div>
    <hr>
</div>
<h1 class="text-center">Cursos Disponibles</h1>
<livewire:course-list>
@endsection 

