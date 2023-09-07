@extends('layouts.admin')

@section('content')
<h1>Edit News & Events</h1>
<h3> News & Events</h3>
<div class="row container" style="">
 <script  src="{{ asset('admin/ckeditor/ckeditor.js') }}" > </script>
<form action="{{ route('newsevents.update',$homeslider->id) }}" method="post" enctype="multipart/form-data">
    @csrf

    @method('PUT')
<div class="form-group row">

    <div class ="col-md-2">
           Title
    </div>
    <div class = "col-md-4">
     <input type="Text" class="form-control" name ="title" value="{{ $homeslider['title'] }}">

    </div>

</div>



<div class ="form-group row">
    <div class="col-md-2">
    Image
    </div>
     Image dimension should be 1000x697 pixels
    <div class="col-md-4">
        <input type="file" class="form-control" name="image" >
        <img src="{{ asset('storage/' . $homeslider['image']) }}" height="100px" width ="100px" alt="" />
    </div>
</div>

<div class="form-group row">

<div class="col-md-2">
Text
</div>

<div class="col-md-10">


 	<textarea name="txtDescription">{{ $homeslider['txtDescription'] }}</textarea>

</div>
</div>
<div class="form-group row">

    <div class ="col-md-2">
          Order Number
    </div>
    <div class = "col-md-4">
     <input type="Text" class="form-control" name ="ordernumber" value="{{ $homeslider['ordernumber'] }}">

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

<form id="deleteForm{{ $homeslider->id }}" action="{{ route('newsevents.destroy', $homeslider->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="button" class="btn btn-danger" onclick="showDeleteConfirmation({{ $homeslider->id }})">DELETE</button>
</form>

<script>
function showDeleteConfirmation(homesliderId) {
    if (confirm('Are you sure you want to delete this ?')) {
        document.getElementById('deleteForm' + homesliderId).submit();
    }
}
</script>


<script>

  CKEDITOR.replace( 'txtDescription' );


</script>
</div>



@endsection
