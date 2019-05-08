@extends('master')
@section('content')

  <div class="container mt-4">
      <table class="table table-bordered table-striped">
       <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Gender</th>
          <th>Age</th>
          <th>Action</th>
       </tr>
       <tr>
          <td>{{$stu->id}}</td>
          <td>{{$stu->name}}</td>
          <td>{{$stu->eamil}}</td>
          <td>{{$stu->gender}}</td>
          <td>{{$stu->age}}</td>
          <td>

          </td>
       </tr>
       </table>
  </div>
 @endsection