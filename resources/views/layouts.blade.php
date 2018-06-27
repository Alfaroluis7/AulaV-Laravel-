<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AulaV</title>
     <!-- Styles -->
    
     <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('js/jquery.min.js') }}" defer></script>


</head>
<body>

    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark2 ">
    <a class="navbar-brand ml-lg-5" href="{{ url('/') }}">AulaV</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav ml-lg-auto mr-lg-5">
                @if (Auth::guest())
                    <li class="nav-item active" ><a class="nav-link" href="{{ url('/login') }}">Entrar</a></li>
                    <li class="nav-item active"><a class="nav-link" href="{{ url('/register') }}">Registrarse</a></li>
                @else
                    <a class="nav-link" href="{{ url('/home') }}">
                        {{ Auth::user()->nombre }}
                    </a>
          
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Cerrar Sesion') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                         
                @endif
            </ul>
        </div>
    </nav>

    <div id="body">
        <div>
            @yield('content')
        </div>
    </div>

    
</body>
</html>