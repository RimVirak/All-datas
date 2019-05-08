

@extends('layouts.app')
@section('content')

<div class="row">
    <form class="col s12" method="POST" action="PostController@store"> 
      <div class="row">
        
            <div class="input-field col s6">
                    <i class="material-icons prefix">create</i>
                  <input type="text" id="title">
                   <label for="title">Post Title</label>
         </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">message</i>
          <textarea id="sms" class="materialize-textarea"></textarea>
          <label for="sms">Post Content</label>
        </div>

      </div>

      <button class="btn orange" type="submit" name="Submit">Add POst</button>
    </form>
  </div>

@endsection