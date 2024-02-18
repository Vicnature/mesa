<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layouts.layout')

    {{-- main body.HOME PAGE --}}
    @section('body')

    {{-- hero section --}}
    <x-hero/>

    {{-- about section --}}
    <x-about/>

    {{-- testimonials section --}}
    <x-testimonials/>

    {{-- patnerships section:scrolling logos --}}
    <x-patnerships/>

    {{-- jursidictions section --}}
    <x-jurisdictions/>

    {{-- delivery section --}}
    <x-delivery/>

    {{-- reviews section --}}
    <x-reviews/>

    @endsection
</body>
</html>