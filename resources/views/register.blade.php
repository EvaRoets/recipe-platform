@extends('layouts.layout')
@section('content')
    <h1>Register</h1>

    <form action="{{ url('/registration') }}" method="post">
        @csrf
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name">

        <label for="name">Name:</label>
        <input type="text" name="name" id="name">

        <label for="email">Email:</label>
        <input type="text" name="email" id="email">

        <label for="password">Password:</label>
        <input type="password" name="password" id="password">

        <button type="submit">Register</button>
    </form>
    
@endsection
