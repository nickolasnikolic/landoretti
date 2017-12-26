<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@lang('header.description')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link type="image/x-icon" rel="icon" href="{{ asset('favicon.ico') }}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title>{{ config('app.name') }} | @yield('title')</title>
</head>
<body>
    @include('includes.logo', ['position' => 'top'])
    @include('includes.header')
    @yield('content')
    @include('includes.footer')
    @include('includes.logo', ['position' => 'bottom'])
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
