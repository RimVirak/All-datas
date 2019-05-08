@extends('master')

     @section('content')
         <h1>All Student here</h1>
         @foreach($student as $stu)
         <div class="card">
            <div class="card-body">
               <p>
                 <h6>
                   <a href="{{route('student.show', $stu->id)}}">
                       {{$stu->name}}
                   </a>
                   <a href="{{route('student.edit',$stu->id)}}" class="btn btn-info btn-sm">Edit</a>
                    <form onsubmit="return confirm('Are you sure you want to delete this Student?')" class=" d-inline-block" method="POST" action="{{route('student.destroy',$stu->id)}}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </h6>
               </p>
            </div>
         </div>
         @endforeach
          <div class="mt-4">
               {{$student->links()}}
          </div>
   @endsection