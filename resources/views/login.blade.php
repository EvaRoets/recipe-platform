@extends('layouts.layout')
@section('content')
    <h1>Login</h1>

    @if(isset(Auth::user()->email))
        <script>window.location="/successlogin";</script>
    @endif

    @if ($message = Session::get('error'))
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    @endif

    @if (count($errors) > 0)
        <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    @endif

    <form method="post" action="{{ url('/checklogin') }}">
        @csrf
        <label for="email">Enter Email</label>
        <input type="email" name="email" />
        <label>Enter Password</label>
        <input type="password" name="password" />
        <input type="submit" name="login" value="Login" />
    </form>
@endsection
