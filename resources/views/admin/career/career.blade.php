@extends('layouts.admin')

@section('content')

<h1>Career</h1>
<div class="row container" style="">
 <script  src="{{ asset('admin/ckeditor/ckeditor.js') }}" > </script>
<form action="{{ route('career.update') }}" method="post" enctype="multipart/form-data">
    @csrf

    
<div class="form-group row">


    <div class ="col-md-2">
          Text
    </div>
    <div class = "col-md-8">
        <textarea name="text">{{ $career->text }}</textarea>

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

<script>

  CKEDITOR.replace( 'text' );


</script>
</div>

@endsection
