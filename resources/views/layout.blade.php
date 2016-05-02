<!DOCTYPE html>
<html>
    <head>
        <title>About</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="{{elixir('css/app.css')}}"> -->
        @yield('header')
    </head>
    <body>
        <div class="container">
        @yield('content')
        
        @yield('footer')
        </div>
    </body>
</html>