@extends('layouts.admin')

@section('content')

<h2>Specification</h2>
<h3>Add Specification</h3>

<div class="row container" style="">
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    <form action="{{ route('Projectspecification.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <div class="col-md-2">
                <label for="selectid">Select project</label>
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
                <label for="selectid">Select specification</label>
            </div>
            <div class="col-md-4">
                <select class="form-control" name="spec">
                    @foreach ($specification as $spec)
                        <option value="{{ $spec->id }}">{{ $spec->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-2">
                Value
            </div>
            <div class="col-md-4">
                <input type="text" name="value" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-2"></div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary"> SAVE </button>
            </div>
        </div>
    </form>
</div>

@endsection
