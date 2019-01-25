<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <script src="//code.jquey.com/jquery-1.10.2.js"></script>
        <script src="//code.jquey.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="jquery.min.js"></script>
        <script src='http://cdnjs.cloudfare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
        <script src='http://cdnjs.cloudfare.com/ajax/libs/bootstrap-validator/0.11.5/js/bootstrapvalidator.min.js'></script>
        <link  href="{{asset('css/nav.css')}}" rel="stylesheet" type="text/css">
        <link  href="{{asset('css/footer.css')}}" rel="stylesheet" type="text/css">
        <!--<link rel="stylesheet" href="{{asset('css/app.css')}}">-->
        <title>{{config('app.name','CAR_RENTAL')}}</title>


        
        
    </head>
    <body>
        @include('inc.navbar')
        <br>
        <br>
        <br>
        <div class="container">
            @include('inc.messages')
            @yield('content') 
        </div>
        @include('inc.footer')
    </body>
</html>