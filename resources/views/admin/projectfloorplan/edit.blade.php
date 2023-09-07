@extends('layouts.admin')

@section('content')

<h1>Edit Floor Plan</h1>
<h3>Edit</h3>
<form action="{{ route('Projectfloorplan.update', $floorplan['id']) }}" method="post" enctype="multipart/form-data" onSubmit="return FrmSub()">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" class="form-control" value="{{ $floorplan['id'] }}">

    <div class="form-group row">
        <div class="col-md-2">
            <label for="selectid">Select project</label>
        </div>
        <div class="col-md-4">
            <select class="form-control" name="project">
                @foreach ($project as $ss)
                <option value="{{ $ss->id }}" @if ($floorplan['project_id'] == $ss->id) selected @endif>{{ $ss->name }}</option>
            @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-2">
            <label for="title">Name</label>
        </div>
        <div class="col-md-4">
            <input type="text" name="title" value="{{ $floorplan['title'] }}" class="form-control"/>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-2">
            <label for="area">Area</label>
        </div>
        <div class="col-md-4">
            <input type="text" name="area" value="{{ $floorplan['area'] }}" class="form-control"/>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-2">
            <label for="image">Image</label>
        </div>
        <div class="col-md-4">
            <input type="file" class="form-control" name="image">
            <img src="{{ asset('storage/' . $floorplan['image']) }}" height="100px" width="100px" alt="" />
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-2"></div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary">SAVE</button>
        </div>

</form>

<form id="deleteForm{{  $floorplan->id }}" action="{{ route('Projectfloorplan.destroy',  $floorplan->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="button" class="btn btn-danger" onclick="showDeleteConfirmation({{  $floorplan->id }})">DELETE</button>
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
