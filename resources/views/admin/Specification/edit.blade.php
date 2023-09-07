@extends('layouts.admin')

@section('content')
<h1>Edit Specification</h1>
<h3> Specification</h3>
<div class="row container" style="">
 <script  src="/ckeditor/ckeditor.js" > </script>
<form action="{{ route('Specification.update', $homeslider->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

<div class="form-group row">

    <div class ="col-md-2">
      Name
    </div>
    <div class = "col-md-4">
     <input type="Text" class="form-control" name ="title" value="{{ $homeslider->title }}">

    </div>

</div>








<div class="form-group">

    <div class="col-md-2">

    </div>
    <div class="col-md-2">
   <button type="submit" class="btn btn-primary"> SAVE  </button> </form>
   <form id="delete-form" action="{{ route('Specification.destroy', $homeslider->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="button" class="btn btn-danger" onclick="showDeleteConfirmation()">DELETE</button>
</form>

<script>
    function showDeleteConfirmation() {
        if (confirm("Are you sure you want to delete this specification?")) {
            document.getElementById('delete-form').submit();
        }
    }
</script>


</div>

</div>
</div>





<script>

  CKEDITOR.replace( 'txtDescription' );


</script>
</div>



@endsection
