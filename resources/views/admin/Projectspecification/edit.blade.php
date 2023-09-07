@extends('layouts.admin')

@section('content')

<h1>Edit specification</h1>
<h3>Edit</h3>
<form action="{{ route('Projectspecification.update', $projectSpecification ['id']) }}" method="post" enctype="multipart/form-data" onSubmit="return FrmSub()">

    @csrf
    @method('PUT')
    <input type="hidden" name="id" class="form-control" value="{{ $projectSpecification['id'] }}">

    <div class="form-group row">
        <div class="col-md-2">
            <label for="selectid">Select project</label>
        </div>
        <div class="col-md-4">
            <select class="form-control" name="project">
                @foreach ($project as $ss)
                    <option value="{{ $ss->id }}" @if ($projectSpecification['project_id'] == $ss->id) selected @endif>{{ $ss->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-2">
            <label for="selectid">Select specification</label>
        </div>
        <div class="col-md-4">
            <select class="form-control" name="spec">
                @foreach ($specification as $spec)
                    <option value="{{ $spec->id }}" @if ($projectSpecification['specification_id'] == $spec->id) selected @endif>{{ $spec->title }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-2">
            Value
        </div>
        <div class="col-md-4">
            <input type="text" name="value" value="{{ $projectSpecification['value'] }}" class="form-control"/>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-2"></div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary"> SAVE </button>
        </div>
    </div>
</form>

<form id="deleteForm" action="{{ route('Projectspecification.destroy', $projectSpecification->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="button" class="btn btn-danger" onclick="showDeleteConfirmation()">DELETE</button>
</form>


<script>
function showDeleteConfirmation() {
    if (confirm('Are you sure you want to delete this ?')) {
        document.getElementById('deleteForm').submit();
    }
}
</script>

@endsection
