


@extends('layouts.app')

@section('content')

  <div class="card">
      <div class="card-content">
            <h2 class="card-title">{{$detail->title}}</h2>
            <p>{{$detail->body}}</p>
      </div>
      <div class="card-action">
          <a href="#" >{{$detail->created_at}}</a>
      </div>
  </div>

@endsection