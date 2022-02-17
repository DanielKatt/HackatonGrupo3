@extends('layouts.app')
<header>
    <x-header />
</header>
<body>
    @section('content')
    <div>
        <livewire:course-list />
    </div>
    @endsection

    
</body>

<footer>
    <x-footer />
</footer>