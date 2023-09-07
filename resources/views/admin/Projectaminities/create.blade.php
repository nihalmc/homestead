@extends('layouts.admin')

@section('content')

<h2>Amenities</h2>  <h3>Add Amenities </h3>
<div class="row container" style="">
 <script  src="{{ asset('ckeditor/ckeditor.js') }}" > </script>


 <form action="{{ route('Projectaminities.store') }}" method="post" enctype="multipart/form-data">
    @csrf
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
   <label for="selectid">Select Amenities</label>
    </div>
    <div class="col-md-4">
       <select class="form-control" name="amin" >
        @foreach ($aminities as $amin)
        <option value="{{ $amin->id }}">{{ $amin->title }}</option>
    @endforeach

      </select>

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
