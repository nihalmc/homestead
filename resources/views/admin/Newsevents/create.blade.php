@extends('layouts.admin')

@section('content')

<h2>News & Events </h2>  <h3>Add News & Events </h3>
<div class="row container" style="">
 <script  src="{{ asset('admin/ckeditor/ckeditor.js') }}" > </script>


 <form action="{{ route('newsevents.store') }}" method="post" enctype="multipart/form-data">
    @csrf
<div class ="form-group row">

    <div class="col-md-2">
    Title
    </div>

    <div class="col-md-4">
        <input type="text" name ="title" class="form-control">
    </div>



</div>


<div class ="form-group row">
    <div class="col-md-2">
    Image
    </div>
    Image dimension should be 800x500 pixels
    <div class="col-md-4">
        <input type="file" class="form-control" name="image" >
    </div>

</div>
    <div class="form-group row">

<div class="col-md-2">
Text
</div>

<div class="col-md-8">


 	<textarea name="txtDescription"></textarea>

</div>
</div>


<div class ="form-group row">

    <div class="col-md-2">
Order Number
    </div>

    <div class="col-md-4">
        <input type="text" name ="ordernumber" class="form-control">
    </div>



</div>
       <div class="form-group">


    <div class="col-md-2">
   <button type="submit" class="btn btn-primary"> SAVE  </button>

    </div>
</div>




</form>



<script>

  CKEDITOR.replace( 'txtDescription' );


</script>
</div>


@endsection
