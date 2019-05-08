<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
        {{-- @extends('layout.app')
        @section('content') --}}
        {{-- @include('customer')
        <h1>This is index page!!!</h1>
         <h1>{{$test}}</h1>
        @endsection --}}

        @extends('inc.navbar')
            @section('nav')
                
            @endsection
        
       
</body>
</html>