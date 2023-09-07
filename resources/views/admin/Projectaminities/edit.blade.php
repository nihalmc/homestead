@extends('layouts.admin')

@section('content')


<h1>Edit Amenities</h1>
<h3>Edit</h3>
<form action="{{ route('Projectaminities.update', $projectaminities ['id']) }}" method="post" enctype="multipart/form-data"onSubmit="return FrmSub()">
    @csrf
    @method('PUT')

<input type="hidden" name ="id" class="form-control" value="{{ $projectaminities ['id'] }}">
 <div class ="form-group row">
    <div class="col-md-2">
   <label for="selectid">Select project</label>
    </div>
    <div class="col-md-4">
    <select class="form-control" name="project" >
        @foreach ($project as $ss)
        <option value="{{ $ss->id }}" @if ($projectaminities['project_id'] == $ss->id) selected @endif>{{ $ss->name }}</option>
    @endforeach

      </select>


    </div>
    </div>


     <div class ="form-group row">
    <div class="col-md-2">
   <label for="selectid">Select Amenities</label>
    </div>
    <div class="col-md-4">
       <select class="form-control" name="amin" >
        @foreach ($aminities as $amin)
        <option value="{{ $amin->id }}" @if ($projectaminities['aminities_id'] == $amin->id) selected @endif>{{ $amin->title }}</option>
    @endforeach
      </select>

    </div>
    </div>


<div class="form-group">

    <div class="col-md-2">

    </div>
    <div class="col-md-2">
   <button type="submit" class="btn btn-primary"> SAVE  </button>



</form>


<form id="deleteForm{{ $projectaminities->id }}" action="{{ route('Projectaminities.destroy', $projectaminities->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="button" class="btn btn-danger" onclick="showDeleteConfirmation({{ $projectaminities->id }})">DELETE</button>
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
