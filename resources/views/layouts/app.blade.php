<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Happay Party</title>
    <link rel="stylesheet" href="{{URL::asset('css/Home.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/Normaliz.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/Style.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('icomoon/style.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/About.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/Blog.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/brithdayservises.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/Contact.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('graduationservises.csss')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/Portfolio.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/Services.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/serviesCard_one.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/login.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/signin.css')}}" />

    <!-- slider commit -->
    <link rel="stylesheet" href="{{URL::asset('css/slick-theme.css')}}" />
    <!-- slider commit -->
    <link rel="stylesheet" href="{{URL::asset('css/slick.css')}}" />


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    <nav class="header">
      <div class="container">
        <a href="#" class="logo">happy party</a>
        <a href="#" class="Menu"><i class="icon-menu1"></i></a>
        <div class="nav_Menu">
          <ul>
            <li><a href="{{route('home')}}" class="active link__Menu">Home</a></li>
            <li><a href="{{route('about')}}" class="link__Menu">About</a></li>
            <li>
              <a href="{{route('services')}}" class="link__Menu">Services</a>
            </li>
            <li>
              <a href="{{route('portfolio')}}" class="link__Menu">Portfolio</a>
            </li>
            <li><a href="{{route('contact')}}" class="link__Menu">Contact</a></li>
            <li><a href="{{route('webblog')}}" class="link__Menu">Blog</a></li>
            <a href="#" class="close"><i class="icon-clear"></i></a>
                        
            <!-- Authentication Links -->
                                    @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">


                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
          </ul>

        </div>
      </div>
    </nav>
        <main class="py-4">
            @yield('content')
        </main>
</div>
</body>
</html>
