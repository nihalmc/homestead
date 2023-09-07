@extends('layouts.admin')

@section('content')


<h1>Edit video</h1>
<h3>Edit</h3>
<form action="{{ route('Projectvideo.update', $projectvideo['id']) }}" method="post" enctype="multipart/form-data"onSubmit="return FrmSub()">

    @csrf
    @method('PUT')

</div>
<input type="hidden" name ="id" class="form-control" value="{{ $projectvideo ['id'] }}">
 <div class ="form-group row">
    <div class="col-md-2">
   <label for="selectid">Select project</label>
    </div>
    <div class="col-md-4">
    <select class="form-control" name="project" >
        @foreach ($project as $ss)
        <option value="{{ $ss->id }}" @if ($projectvideo['project_id'] == $ss->id) selected @endif>{{ $ss->name }}</option>
    @endforeach
      </select>


    </div>
    </div>


		<div class ="form-group row">

    <div class="col-md-2">
   URL
    </div>

    <div class="col-md-4">
         <input type="text" name = "url" value="{{ $projectvideo ['url'] }}"  class="form-control"/>
    </div>



</div>







<div class="form-group">

    <div class="col-md-2">

    </div>
    <div class="col-md-2">
   <button type="submit" class="btn btn-primary"> SAVE  </button>



</form>

<form id="deleteForm{{ $projectvideo->id }}" action="{{ route('Projectaminities.destroy', $projectvideo->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="button" class="btn btn-danger" onclick="showDeleteConfirmation({{ $projectvideo->id }})">DELETE</button>
</form>

</div>

</div>
</div>


<script>
function showDeleteConfirmation(projectId) {
    if (confirm('Are you sure you want to delete this ?')) {
        document.getElementById('deleteForm' + projectId).submit();
    }
}

     </script>

@endsection
