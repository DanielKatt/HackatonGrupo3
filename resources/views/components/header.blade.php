
        <style>

        @import url('https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap');

            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }

            /* MARKETPLACE LOGO */
            .logo{
                width: 6vw;
                height: 5vw;
            }

            /* MARKETPLACE NAME ("a" container) */
            .navbar-brand{
                color: #fff;
            }
            .navbar-brand:hover{
                color: #119DA4;
            }

            /*SEARCH BUTTON*/
            .btn{
                color: #fff;
            }
            .btn:hover{
                background-color: #119DA4;
            }

            /*LOGIN AND REGISTER*/
            .login a{
                color: #fff;
                margin-right: 2vw;
            }

        </style>



<!-- HEADER -->

<nav class="navbar" style="background-color: #13505B;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img class="logo" src="/Images/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        CodeMarket
</a>

        <form class="d-flex" type="get" action="{{ url('/search') }}">
        <input class="form-control me-2" name="query" type="search" placeholder="¿Qué curso buscas?" aria-label="Buscar">
        <button class="btn btn-outline-secondary" type="submit">Search</button>
        </form>
        
{{-- LOG IN AND REGISTER --}}

        <div class="">
            @if (Route::has('login'))
                <div class="login">
                    @auth
{{--                         <a href="{{ url('/home') }}" class="">Home</a> --}}
                    @else
                        <a href="{{ route('login') }}" class="">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="">Register</a>
                        @endif
                    @endauth
                    </div> 
            @endif
        </div>
    </div>
    </nav>
