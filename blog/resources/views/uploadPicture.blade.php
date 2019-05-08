

@extends('layouts.app')
@section('content')
<div class="container mt-4">
<div class="card">
    <div class="card-body">
       
    <form action="?.,AWERTYERTY"method="post" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" name='fileUpload' class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-group">
            <button class="btn btn-primary m-6" type="submit">Upload</button>
        </div>
    </form>
</div>
</div>
</div>
@endsection