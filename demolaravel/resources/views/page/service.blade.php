


@extends('layouts.app')
@section('content')
<h1>{{$title}}</h1>
@if(count($services)> 0)
<ul class="collection">
  @foreach($services as $service)
      <li class="collection-item">{{$service}}</li>
  @endforeach
</ul>
@endif
<div class="container">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
         Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
    </p>
     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
     Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
     </p>
</div>
@endsection 