@extends('layouts.admin')

@section('content')
<h1>Add Project</h1>
<div class="row container" style="">
 <script  src="{{ asset('admin/ckeditor/ckeditor.js') }}" ></script>
<form action="{{ route('project.store') }}" method="post" enctype="multipart/form-data" >
    @csrf
<div class="form-group row">

    <div class ="col-md-2">
            Name
    </div>
    <div class = "col-md-4">
     <input type="Text" class="form-control" name="name">
    </div>

</div>
  <div class="form-group row">

<div class="col-md-2">
Description
</div>

<div class="col-md-8">


 	<textarea name="txtDescription"></textarea>

</div>
</div>
<div class ="form-group row">
    <div class="col-md-2">
Current status
    </div>

     Image diemension should be 600x400 pixels
    <div class="col-md-4">
        <input type="file" class="form-control" name="status">
    </div>
</div>



<div class ="form-group row">
    <div class="col-md-2">
   Location map
    </div>

     Image diemension should be 880x1254 pixels
    <div class="col-md-4">
        <input type="file" class="form-control" name="map">
    </div>
</div>
<div class ="form-group row">
    <div class="col-md-2">
    Image
    </div>

     Image diemension should be 600x400 pixels
    <div class="col-md-4">
        <input type="file" class="form-control" name="image">
    </div>
</div>
<div class="form-group row">

    <div class ="col-md-2">
         Location
    </div>
    <div class = "col-md-4">
     <input type="Text" class="form-control" name="location">
    </div>

</div>

<div class="form-group row">

    <div class ="col-md-2">
           Order number
    </div>
    <div class = "col-md-4">
     <input type="Text" class="form-control" name="order_number">
    </div>

</div>





    <div class ="form-group row">
    <div class="col-md-2">
   <label for="selectid">Select category</label>
    </div>
     <div class="col-md-4">
   <select class="form-control" name="category_id" >
    @foreach ($project as $pro)



        <option value={{ $pro->id }}>{{ $pro->name }}</option>
        @endforeach
      </select>
    </div>
    </div>

	<div class ="form-group row">
    <div class="col-md-2">
   Logo
    </div>

     Image diemension should be 200x100 pixels
    <div class="col-md-4">
        <input type="file" class="form-control" name="logo">
    </div>
</div>

	<div class="row from-group">
        <div class="col-md-2">
                  <label>
                     Showinhomepage
                      </label>
                    </div>
                      <div class="col-md-4">
                          <input type="checkbox" name="chkHomepage" id="chkHomepage"  value="1"/>
                          <input type="hidden" name="hiddenshowhomepage" id="hiddenshowhomepage">
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

  CKEDITOR.replace( 'txtDescription' );


</script>

</div>

@endsection
