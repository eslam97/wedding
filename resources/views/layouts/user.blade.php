<!DOCTYPE html>
<html lang="en">
  <head>
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
  </head>
  <body>
    @yield('content')
    <!-- jquery bacuse slider commit -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js"></script>
    <script src="{{URL::asset('js/q_a.js')}}"></script>
    <script src="{{URL::asset('js/slick.min.js')}}"></script>
    <script src="{{URL::asset('js/Main.js')}}"></script>
    <script src="{{URL::asset('js/Home.js')}}"></script>
    <script src="{{URL::asset('js/About.js')}}"></script>
  </body>
</html>
