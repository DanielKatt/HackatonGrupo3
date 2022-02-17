<div>
    <div class="container">
        <div class="row">
        @foreach($courses as $course)
        <div class="card" style="width: 18rem;">
        <a href="{{ route('course', $course) }}">
            <div class="cardTitleContainer" > 
            <h5 class="card-title">{{$course->name}}</h5>
            </div>
        </a>

            <div class="card-body">
            <img src="{{$course->img}}" class="card-img-top" alt="img">
            {{-- <p class="card-text">Categoría:  </p>

            <p class="card-text">{{$course->description}}</p> --}}
            <p class="card-text">{{$course->price}}€</p>

            <a href="#" class="btn btn-primary" id="cardButton">Agregar a mis cursos</a>

        </div>
    </div>
    @endforeach
</div>
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap');


            /*CARDS*/
            .card{
                margin: 5vw;
            }

            .cardTitleContainer{
                background-color: #119DA4;
                padding: 2vw 1vw 1vw 1vw; 
                color: #fff;
                font-family: 'Permanent Marker';
                text-align: center;
            }

            .card-title{
                font-size: 3vw;
            }

            .card-body{
                padding: 0;
                text-align: center;
                margin: 2vw 1.5vw 2vw 1.5vw;
                font-family: Montserrat;
                font-size: 2vw;
            }

            #cardButton{
                background-color: #119DA4;
                border-color: #119DA4;
            }

            #cardButton:hover{
                background-color: #13505B;
            }


        </style>
</div>
    
    <div class="d-flex justify-content-center">
    {{ $courses->links('pagination::Bootstrap-4') }}
    </div>
</div>
