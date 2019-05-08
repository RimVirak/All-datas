<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
</head>
<body>

    <h1>Hello world I am from header </h1>
    
    {{-- @include('inc.navbar') --}}
    @yield('content');
    
</body>
</html>