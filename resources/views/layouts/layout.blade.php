<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--Styles--}}
    <link rel="stylesheet" href={{ asset('css/app.css') }}>

    {{--Favicon--}}
    <link rel="apple-touch-icon" sizes="180x180" href={{ asset('images/favicon/apple-touch-icon.png') }}>
    <link rel="icon" type="image/png" sizes="32x32" href={{ asset('images/favicon/favicon-32x32.png') }}>
    <link rel="icon" type="image/png" sizes="16x16" href={{ asset('images/favicon/favicon-16x16.png') }}>
    <link rel="manifest" href={{ asset('images/favicon/site.webmanifest') }}>
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    {{--Open Graph--}}
    <meta property="og:title" content="Flavorly">
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="" />

    {{--Twitter tags--}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

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
