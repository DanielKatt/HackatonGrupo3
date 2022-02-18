@extends('layouts.app')

@section('content')
<div class="container d-flex">
    <div class="d-flex justify-content-center">
        <div class= "">
            <a href="{{ route('courses.create') }}" class="btn btn-primary  ">
                {{ __('Añadir Curso') }}
             </a>
        </div>
    </div>
</div>
@endsection


