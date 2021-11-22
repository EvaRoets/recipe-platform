<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--Styles--}}
    <link rel="stylesheet" href={{ asset('css/app.css') }}>

    {{--Favicon--}}
    <link rel="apple-touch-icon" sizes="180x180" href={{ asset('images/favicon/apple-touch-icon.png') }}>
    <link rel="icon" type="image/png" sizes="16x16" href={{ asset('images/favicon/favicon-16x16.png') }}>
    <link rel="icon" type="image/png" sizes="32x32" href={{ asset('images/favicon/favicon-32x32.png') }}>
    <link rel="icon" type="image/png" sizes="192x192" href={{ asset('images/favicon/android-chrome-192x192.png') }}>
    <link rel="icon" type="image/png" sizes="194x194" href={{'images/favicon/favicon-194x194.png'}}>

    <link rel="mask-icon" href={{'images/favicon/safari-pinned-tab.svg'}} color="#4e918e">
    <link rel="manifest" href={{ asset('images/favicon/site.webmanifest') }}>
    <meta name="msapplication-TileColor" content="#4e918e">
    <meta name="msapplication-TileImage" content={{'images/favicon/mstile-144x144.png'}}>
    <meta name="theme-color" content="#fff5e9">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">



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

    <title>Flavorly | All recipes in once place</title>
</head>
<body class="{{ !empty($frosted) ? 'frosted' : null }}" >
@include('layouts.components.header')
@section('content')
@show
<script src="../../js/app.js"></script>
<noscript>Your browser does not support JavaScript.</noscript>
@include('layouts.components.footer')
</body>
</html>
