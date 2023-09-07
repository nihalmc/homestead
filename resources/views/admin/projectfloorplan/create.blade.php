@extends('layouts.admin')

@section('content')

<h1>Add Floor Plan</h1>
<form action="{{ route('Projectfloorplan.store') }}" method="post" enctype="multipart/form-data" onSubmit="return FrmSub()">
    @csrf

    <div class="form-group row">
        <div class="col-md-2">
            <label for="selectid">Select Project</label>
        </div>
        <div class="col-md-4">
            <select class="form-control" name="project">
                @foreach ($project as $proj)
        <option value="{{ $proj->id }}">{{ $proj->name }}</option>
    @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-2">
            <label for="title">Name</label>
        </div>
        <div class="col-md-4">
            <input type="text" name="title" class="form-control">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-2">
            <label for="area">Area</label>
        </div>
        <div class="col-md-4">
            <input type="text" name="area" class="form-control">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-2">
            <label for="image">Image</label>
        </div>
        <div class="col-md-4">
            <input type="file" class="form-control" name="image">
            <small>Image dimension should be 735x564 pixels</small>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-2"></div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary">SAVE</button>
        </div>
    </div>

</form>

@endsection
