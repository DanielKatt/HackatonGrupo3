<div>
        @foreach($courses as $course)
        <div>
            <img src="{{$course->img}}">
            <h2>{{$course->name}}</h2>
        </div>
        @endforeach

        {{ $courses->links() }}
</div>
