@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                
            @if($courses->isNotEmpty())
            @foreach ($courses as $course)
                <div class="course-list">
                    <p>{{ $course->title }}</p>
                    <img src="{{ $course->image }}">
                </div>
            @endforeach
        @else 
            <div>
                <h2>No courses found</h2>
            </div>
        @endif

            @endforeach
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection