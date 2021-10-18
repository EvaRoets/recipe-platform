<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../css/app.css">
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
