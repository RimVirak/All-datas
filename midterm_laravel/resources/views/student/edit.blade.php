@extends('master')
@section('content')
<h2 class="my-3">Update Post</h2>
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

@if (session()->has('Message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
       {{session()->get('Message')}}
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
  </div>  
@endif

<form action="{{route('student.update',$stu->id)}}" method="post">
    @csrf
    @method('put')
       <div class="form-group">
       <label for="name" >Name</label>
           <input type="text" name="name" id="name" class="form-control" value="{{($stu->name)}}" >
       </div>
       <label for="email" >Email</label>
           <input type="text" name="email" id="email" class="form-control" value="{{($stu->email)}}" >
       </div>
       <label for="gender" >Gender</label>
           <input type="text" name="gender" id="gender" class="form-control" value="{{($stu->gender)}}" >
       </div>
       <label for="age" >Age</label>
           <input type="text" name="age" id="age" class="form-control" value="{{($stu->age)}}" >
    </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-success">Edit Now</button>
        </div>
   </form>     
@endsection