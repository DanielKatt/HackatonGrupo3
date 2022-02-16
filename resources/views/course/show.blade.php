@extends('layouts.app')

@section('template_title')
    {{ $course->name ?? 'Show Course' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Course</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('courses.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $course->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $course->name }}
                        </div>
                        <div class="form-group">
                            <strong>Slug:</strong>
                            {{ $course->slug }}
                        </div>
                        <div class="form-group">
                            <strong>Img:</strong>
                            {{ $course->img }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $course->description }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $course->price }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
