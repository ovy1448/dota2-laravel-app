@extends('layouts/app')

@section('content')
    <div id="sign_form_div">
        @if (session('status'))
            {{ session('status') }}
        @endif
        <form action="{{ route('login') }}" method="POST" id="sign_form">
            @csrf
            <div id="sign_input_group">
                <input type="email" name="email" value="{{ old('email') }}" placeholder="E-MAIL...">
                    @error('email')
                        {{ $message }}
                    @enderror
                <input type="password" name="password" placeholder="PASSWORD...">
                    @error('password')
                        {{ $message }}
                    @enderror
            </div>
            <div id="sign_form_remember">
                <input type="checkbox" name="remeber">
                <label for="remeber">REMEMBER ME</label>
            </div>
            <div id="login_register_btns">
                <button type="submit">LOGIN</button>
                <a href="{{ route('register') }}">REGISTER</a>
            </div>
        </form>
    </div>
@endsection