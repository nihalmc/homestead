@extends('layouts.admin')

@section('content')

<h1>Add Home slider</h1>

<form action="{{ route('homesliders.store') }}" method="post" enctype="multipart/form-data" >
@csrf


<div class ="form-group row">

    <div class="col-md-2">
        First line
    </div>

    <div class="col-md-4">
        <input type="text" name ="title" class="form-control">
    </div>



</div>
<div class ="form-group row">

    <div class="col-md-2">
        Second line
    </div>

    <div class="col-md-4">
        <input type="text" name ="title2" class="form-control">
    </div>



</div>

<div class ="form-group row">
    <div class="col-md-2">
    Image
    </div>
    Image diemension should be 2190x1461 pixels
    <div class="col-md-4">
        <input type="file" class="form-control" name="image" >
    </div>

</div>
<div class ="form-group row">

    <div class="col-md-2">
        URL
    </div>

    <div class="col-md-4">
        <input type="text" name ="link" class="form-control">
    </div>



</div>
<div class ="form-group row">

    <div class="col-md-2">
       Order number
    </div>

    <div class="col-md-4">
        <input type="text" name ="order_number" class="form-control">
    </div>



</div>


<div class="form-group">

    <div class="col-md-2">

    </div>
    <div class="col-md-2">
   <button type="submit" class="btn btn-primary"> SAVE  </button>

    </div>
</div>



</div>

</form>
@endsection

