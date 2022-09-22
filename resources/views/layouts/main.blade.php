<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> ARP | {{ $title }} </title>
    
    <link rel="stylesheet" href=" {{ asset('bootstrap5/css/bootstrap.min.css') }} " />

</head>

<body>
    

    
    <div id="app">
        
        @include('partials.navbar')
        
        <main class="container mt-4">
            @yield('container')
        </main>
        <div>
            <center>@include('partials.footer') </center>
        </div>
    </div>

    <script src=" {{ asset('bootstrap5/js/bootstrap.min.js') }} "></script>
</body>

</html>