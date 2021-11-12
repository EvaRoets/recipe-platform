@extends('layouts.layout')
@section('content')
    <div class="login-container">
        {{-- Check for errors --}}
        @if ($message = Session::get('error'))
            <strong>{{ $message }}</strong>
        @endif
        @if (count($errors) > 0)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <div class="login-feed">
            <form method="post" action={{ route('checkLogin') }}>
                @csrf
                <div class="login-details">
                    <div class="login-title">
                        <h2>Login</h2>
                    </div>
                    <div class="login-box">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email"/>
                        <label for="password">Password</label>
                        <input type="password" name="password"/>
                        <div class="login-btn-container">
                            <a href="">
                                <button class="login-btn" type="submit" name="login" value="Login">
                                    <i class="fas fa-sign-in-alt"></i>&nbsp; Login
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="login-no-account">
                    <p>Don't have an account yet? Sign up <a href={{ route('register') }}>here</a>!</p>
                </div>
            </form>
        </div>
    </div>
@endsection
