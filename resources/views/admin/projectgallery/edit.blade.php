@extends('layouts.admin')

@section('content')

<h1>Edit Gallery</h1>
<h3>Edit</h3>
<form action="{{ route('Projectgallery.update', $gallery['id']) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <input type="hidden" name="id" class="form-control" value="{{ $gallery['id'] }}">

    <div class="form-group row">
        <div class="col-md-2">
            <label for="selectid">Select project</label>
        </div>
        <div class="col-md-4">
            <select class="form-control" name="project">
                @foreach ($project as $gg)
                <option value="{{ $gg->id }}" @if ($gallery['project_id'] == $gg->id) selected @endif>{{ $gg->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-2">
            Image
        </div>
        <div class="col-md-4">
            <input type="file" class="form-control" name="image">
            <img src="{{ asset('storage/' . $gallery['image']) }}" height="100px" width="100px" alt="" />
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-2"></div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary">SAVE</button>
        </div>
</form>

<form id="deleteForm{{  $gallery->id  }}" action="{{ route('Projectgallery.destroy', $gallery->id  ) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="button" class="btn btn-danger" onclick="showDeleteConfirmation({{  $gallery->id  }})">DELETE</button>
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
