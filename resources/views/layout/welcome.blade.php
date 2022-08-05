<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Posty</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    </head>
    <body class="antialiased">
        <div class="container-fluid bg-primary py-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <a href="http://" class="btn text-white"> Home </a>
                        <a href="http://" class="btn text-white"> Dashboard </a>
                        <a href="http://" class="btn text-white"> Post </a>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        @auth
                            <a href="http://" class="btn text-white"> Bansah </a>
                            <form action="{{ route('logout') }} " method="post">
                                @csrf
                                <button href="{{ route('logout')}} " class="btn text-white"> Logout </button>                    
                            </form>
                        @endauth
                        @guest
                            <a href=" {{ route('login') }} " class="btn text-white"> Login </a>
                            <a href="{{ route('register') }}" class="btn text-white"> Register </a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            @yield('content')
        </div>
    </body>
</html>
