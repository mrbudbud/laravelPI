<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

    <title> @yield('title') </title>

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-info">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/')}}">Navbar</a>
            <div class=" navbar-justify-content">
                <div class="navbar-nav">
                        <a class="nav-item nav-link" href="{{ url('/')}}">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="{{ url('/about')}}">About</a>
                        <a class="nav-item nav-link" href="{{ url('/cars')}}">Cars</a>
                </div>
            </div>
        </div>
    </nav>
    
        <!-- <div class="container">
            <ul class="nav justify-content navbar-expand-lg">        
                <li class="nav-item">
                    <a class="btn btn-info" href="{{ url('/')}}">Home<a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-info" href="{{ url('/about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-info" href="{{ url('/cars')}}">Cars</a>
                </li>
            </ul>
        </div> -->


    @yield('container')

</body>
</html>