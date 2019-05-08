
 @section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<div class="container mt-5">
<a href="{{route('student.create')}}" class="btn btn-success text-white" method="POST">New Student</a>

    @foreach ($student as $item)
   
        <div class="card mt-4 shadow-lg ">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @csrf
            @method('delete')

              <td></td>
              <td>{{$item['title']}}</td>
              <td>{{$item['email']}}</td>
              <td>{{$item['course']}}</td>
              <td> 
                   <a href="{{route('student.edit',$item->id)}}" class="btn btn-info btn-sm float-left text-white">Update</a>
                   <a href="{{route('student.destroy',$item->id)}}" type="submit" class="btn btn-sm float-left btn-danger">Delete"></a>
               </td>
            </tbody>     
            
            </div>
        </div>
    @endforeach
</div>
@endsection
