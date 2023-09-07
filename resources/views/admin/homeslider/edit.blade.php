@extends('layouts.admin')

@section('content')

<h1>Edit Home slider</h1>
<h1>Edit</h1>



<form action="{{ route('homesliders.update',$homeslider->id) }}" method="post" enctype="multipart/form-data" >
    @csrf

    @method('PUT')

<div class ="form-group row">

    <div class="col-md-2">
        First line
    </div>

    <div class="col-md-4">
        <input type="text" name ="title" class="form-control" value="{{ $homeslider['title'] }}">
    </div>
</div>
<div class ="form-group row">

    <div class="col-md-2">
        Second line
    </div>

    <div class="col-md-4">
        <input type="text" name ="title2" class="form-control" value="{{ $homeslider['title2'] }}">
    </div>
</div>



<div class ="form-group row">
    <div class="col-md-2">
    Image
    </div>
     Image diemension should be 2190x1461 pixels
    <div class="col-md-4">
        <input type="file" class="form-control" name="image" >
        <img src="{{ asset('storage/' . $homeslider['image']) }}" height="100px" width ="100px" alt="" />
    </div>
</div>
<div class ="form-group row">

    <div class="col-md-2">
        URL
    </div>

    <div class="col-md-4">
        <input type="text" name ="link" class="form-control" value="{{ $homeslider['link'] }}">
    </div>
</div>
<div class ="form-group row">

    <div class="col-md-2">
       Order number
    </div>

    <div class="col-md-4">
        <input type="text" name ="order_number" class="form-control" value="{{ $homeslider['order_number'] }}">
    </div>
</div>


<div class="form-group">

    <div class="col-md-2">

    </div>
    <div class="col-md-2">
   <button type="submit" class="btn btn-primary"> SAVE  </button>


   </form>

   <form id="deleteForm{{ $homeslider->id }}" action="{{ route('homesliders.destroy', $homeslider->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="button" class="btn btn-danger" onclick="showDeleteConfirmation({{ $homeslider->id }})">DELETE</button>
</form>

<script>
function showDeleteConfirmation(homesliderId) {
    if (confirm('Are you sure you want to delete this home slider?')) {
        document.getElementById('deleteForm' + homesliderId).submit();
    }
}
</script>

</div>

</div>
</div>
@endsection
