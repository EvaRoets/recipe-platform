@extends('layouts.layout')
@section('content')
    <h1>Register</h1>
    @if(isset(Auth::user()->email))
        <script>window.location="/registersuccess";</script>
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
    <form action="{{ url('/registration') }}" method="post">
        @csrf
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name" required>

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>

        <label for="password_confirmation">Password Confirmation:</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required>

        <button type="submit">Register</button>
    </form>
    
@endsection
