@extends('layouts.admin')

@section('content')


<h1>Edit Project slider</h1>
<h3>Edit</h3>
<form action="{{ route('project.updateprojectslider',$projectslider->id) }}" method="post" enctype="multipart/form-data">
    @csrf

    @method('PUT')

</div>
<input type="hidden" name ="id" class="form-control" value="{{ $projectslider->id }}">

 <div class ="form-group row">
    <div class="col-md-2">
   <label for="selectid">Select project</label>
    </div>
    <div class="col-md-4">
    <select class="form-control" name="project_id" >
        @foreach ($project as $pro)
        <option value="{{ $pro->id }}" {{  $pro->id == $projectslider->project_id ? 'selected' : '' }} >
            {{ $pro->name }}
        </option>
    @endforeach
</select>
    </div>
    </div>
<div class ="form-group row">
    <div class="col-md-2">
    Image
    </div>
    <div class="col-md-4">
        <input type="file" class="form-control" name="image" >
        <img src="{{ asset('storage/' .$projectslider->image) }}" height="100px" width ="100px" alt="" />
    </div>
</div>






<div class="form-group">

    <div class="col-md-2">

    </div>
    <div class="col-md-2">
   <button type="submit" class="btn btn-primary"> SAVE  </button>



</form>

<form action="{{ route('project.deleteProjectSlider', $projectslider->id) }}" method="post" id="delete-form">
    @csrf
    @method('DELETE')
    <button type="button" class="btn btn-danger" onclick="showDeleteConfirmation()">DELETE</button>
</form>

</div>

</div>
</div>


<script>
    function showDeleteConfirmation() {
        if (confirm("Are you sure you want to delete this project slide?")) {
            document.getElementById('delete-form').submit();
        }
    }
</script>

@endsection
