<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Wedding</title>
        <meta name="description" content="wedding">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{URL::asset('css/home.css')}}">

    </head>
    <body>
        
    @yield('body')
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $('aside').height(($('aside').height())-($('nav').outerHeight()));
        $('.container-new').css('width', ($('.container-new').outerWidth()) - ($("aside").outerWidth()));

    });
    

    
    </script>
    @yield('script')

    </body>

</html>