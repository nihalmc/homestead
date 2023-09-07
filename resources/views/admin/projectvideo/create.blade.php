@extends('layouts.admin')

@section('content')


<h1>Add project video</h1>
<form action="{{ route('Projectvideo.store') }}" method="post" enctype="multipart/form-data">

    @csrf
</div>
 <div class ="form-group row">
    <div class="col-md-2">
   <label for="selectid">Select project</label>
    </div>
    <div class="col-md-4">
       <select class="form-control" name="project" >
        
        @foreach ($project as $proj)
        <option value="{{ $proj->id }}">{{ $proj->name }}</option>
    @endforeach
      </select>

    </div>
    </div>

<div class ="form-group row">

    <div class="col-md-2">
   URL
    </div>

    <div class="col-md-4">
        <input type="text" name ="url" class="form-control">
    </div>



</div>











<div class="form-group">

    <div class="col-md-2">

    </div>
    <div class="col-md-2">
   <button type="submit" class="btn btn-primary"> SAVE  </button>

    </div>
</div>





</form>





@endsection
