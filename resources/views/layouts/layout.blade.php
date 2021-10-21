<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

{{--    Styles--}}
    <link rel="stylesheet" href={{ asset('css/app.css') }}>

{{--Favicon--}}
    <link rel="apple-touch-icon" sizes="180x180" href={{ asset('images/favicon/apple-touch-icon.png') }}>
    <link rel="icon" type="image/png" sizes="32x32" href={{ asset('images/favicon/favicon-32x32.png') }}>
    <link rel="icon" type="image/png" sizes="16x16" href={{ asset('images/favicon/favicon-16x16.png') }}>
    <link rel="manifest" href={{ asset('images/favicon/site.webmanifest') }}>
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">



    <title>Recipes TBD</title>
</head>
<body>
@include('layouts.components.header')
@section('content')
@show
@include('layouts.components.footer')
<script src="../../js/app.js"></script>
<noscript>Your browser does not support JavaScript.</noscript>
</body>
</html>
