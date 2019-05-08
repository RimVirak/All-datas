@section('content')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.css">
<div class="container mt-4 ">

    <hr class="shadow-lg">
    <br>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
                <div class="card shadow-lg">
                        <div class="card-header text-center">
                                <h3>Edit Student</h3>          
                            </div>
                    <div class="card-body">
                       <form action="{{route('student.edit',$student->id)}}" method="POST">
                            @csrf
                         @method('put')
                           <div class="form-group">
                               
                               <input type="text" name="title" id="" class="form-control" placeholder="Title" value="{{$student->title}}">
                           </div>
                           <div class="form-group">
                            <input type="text" name="email" id="" class="form-control" placeholder="Email" {{$student->email}}>
                           </div>
                           <div class="form-check-inline">
                         
                          
                            @foreach ( $studentall as $item)
                            <input type="checkbox" name="check[]"  value="{{$course->id}}" checked><label for="">{{$item['name']}}</label>
                        @endforeach
                        @foreach ($checkupdate as $item)
                            <input type="checkbox" name="check[]" value="{{$item->id}}"><label for="">{{$item['name']}}</label>
                        @endforeach 
                        </div >
                           
                           <div class="form-group float-right">
                               <button type="submit" name="submit" class="btn btn-info text-white">Update</button>
                           </div>
                       </form>
                    </div>
                </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>
@endsection
