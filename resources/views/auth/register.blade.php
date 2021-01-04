@extends('layouts/app')

@section('content')
    <div id="sign_form_div">
        <form action="{{ route('register') }}" method="POST" id="sign_form">
            @csrf
            <div id="sign_input_group">
                <input type="text" name="username" value="{{ old('username') }}" placeholder="USERNAME...">
                    @error('username')
                        {{ $message }}
                    @enderror
                <input type="email" name="email" value="{{ old('email') }}" placeholder="E-MAIL...">
                    @error('email')
                        {{ $message }}
                    @enderror
                <input type="password" name="password" placeholder="PASSWORD...">
                    @error('password')
                        {{ $message }}
                    @enderror
                <input type="password" name="password_confirmation" placeholder="PASSWORD AGAIN...">
            </div>
            <div id="login_register_btns">
               <button type="submit">REGISTER</button>
                <a href="{{ route('login') }}">LOGIN</a> 
            </div>
        </form>
    </div>
@endsection