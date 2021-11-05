@extends('layouts.layout')
@section('content')
    <h1>Account</h1>
    <ul>
        <li>First Name: {{ Auth::user()->first_name }}</li>
        <li>Name: {{ Auth::user()->name }}</li>
        <li>Email: {{ Auth::user()->email }}</li>
    </ul>
@endsection