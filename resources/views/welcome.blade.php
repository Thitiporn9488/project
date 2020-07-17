<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tobacco</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('css/wel.css') }}">

    </head>
    <body>
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->
<!-- 
            <div class="content">
                <div class="title m-b-md">
                    Tobacco Cure
                </div> -->

<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:100px">Tobacco Cure</h1>
    <!-- <p>And I'm a Photographer</p> -->
    <form action="{{url('login')}}" method="GET">
    <button>Login</button>
    </form><br>
    <form action="{{url('user/create')}}" method="GET">
    <button>Register</button>
    </form>
  </div>
</div>


            </div>
        </div>
    </body>
</html>