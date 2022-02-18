




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
        <a class="navbar-brand" href="/">
        <img class="logo" src="/Images/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        CodeMarket
</a>

        <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="¿Qué curso buscas?" aria-label="Buscar">
        <button class="btn btn-outline-secondary" type="submit">Search</button>
        </form>
        
{{-- LOG IN AND REGISTER --}}

        <div class="">
            @if (Route::has('login'))
                <div class="login">
                    @auth
                    
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-dark" href="{{ route('courses.create') }}">
                             {{ __('Añade tu Curso') }}
                         </a>
                            <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                   
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
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>