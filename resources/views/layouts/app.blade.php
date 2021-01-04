<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://kit.fontawesome.com/f14220d294.js" crossorigin="anonymous"></script>
    <livewire:styles />
</head>
<body>
    <div id="background"></div>
    <header>
        <div id="home_btn_div">
            <a href="{{ route('home') }}">
                <img id="home_btn" src="{{ asset('storage\home_button.png') }}" alt="" >
            </a>
            @auth
                <span id="user_welcome">Welcome, {{ auth()->user()->username }}</span>
            @endauth
        </div>
        @auth
            <form action="{{ route('logout') }}" method="POST" id="sign_out_container">
                @csrf
                <button id="user_button"><i class="fas fa-sign-out-alt"></i></button>
                <span>LOGOUT</span>
            </form>
        @endauth     
    </header>
    @yield('content')
    <livewire:scripts />
</body>
</html>