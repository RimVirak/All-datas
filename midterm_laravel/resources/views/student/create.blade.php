@extends('master')
@section('content')
<h2 class="my-3">Add A New Student</h2>
@if ($errors->all())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
     @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
     @endforeach
 </div>   
@endif
<form action="{{route('student.store')}}" method="post">
    @csrf
       <div class="form-group">
           <label for="name">Name</label>
           <input type="text" name="name" id="name" class="form-control" >
       </div>
       <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control" >               
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="text" name="gender" id="gender" class="form-control" >
        </div>

        <div class="form-group">
            <label for="age">Age</label>
            <input type="text" name="age" id="gender" class="form-control" >               
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-success">Add New</button>
        </div>
   </form>     
@endsection