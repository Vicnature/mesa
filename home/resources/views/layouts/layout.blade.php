<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
</head>
<body>
    {{-- header --}}
    @yield('header')
    <header class="header">
        <x-header/>
    </header>
    


    {{-- body --}}
    @yield('body')
    


    {{-- footer --}}
    @yield('footer')
    <footer class="footer">
        <x-footer/>
    </footer>
    
</body>
</html>