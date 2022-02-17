<div>
    <div class="container">
        <div class="row">
        @foreach($courses as $course)
        <div class="card" style="width: 17rem;">
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


            .btn{
                border-radius: 10%;
            }

            .card{
                margin: 0 auto;
                -webkit-box-shadow: -2px 3px 15px 11px rgba(0,0,0,0.19); 
                box-shadow: -2px 3px 15px 11px rgba(0,0,0,0.19);
                transition: all 500ms ease;
            }
            .card:hover{
                box-shadow: -2px 3px 15px 11px rgba(151, 203, 228, 0.6);
                transform: translateY(-5%);
                z-index: 9;
            }

            .container{
                width: 100%;
                display: flex;
                max-width: 1000px;
                padding: 10px 0px 300px 0px;
            }
            .row{
                width: 100%;
                margin: 20px;
                border-radius: 5%;
                overflow: hidden;
                background: #fff;

            }
            .cardTitleContainer{
                background-color: #119DA4;
                border-radius: 15%;
                padding: 3vw 0.5vw ; 
                color: rgb(168, 201, 223);
                font-family: 'Permanent Marker';
                text-align: center;
                text-decoration: none;
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
