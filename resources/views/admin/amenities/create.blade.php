@extends('layouts.admin')

@section('content')

<h2>Amenities</h2>
<h3>Add Amenities </h3>
<div class="row container" style="">
 <script  src="/ckeditor/ckeditor.js" > </script>


 <form action="{{ route('aminities.store') }}" method="post" enctype="multipart/form-data">
    @csrf
<div class ="form-group row">

    <div class="col-md-2">
    Name
    </div>

    <div class="col-md-4">
        <input type="text" name ="title" class="form-control">
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
