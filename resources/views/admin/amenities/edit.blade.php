@extends('layouts.admin')

@section('content')
    <h1>Edit Amenities</h1>
    <h3>Amenities</h3>
    <div class="row container" style="">
        <form action="{{ route('aminities.update', $aminities->id) }}" method="post" enctype="multipart/form-data">
            @csrf

            @method('PUT')

            <div class="form-group row">
                <div class="col-md-2">
                    Name
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="title" value="{{ $aminities->title }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">SAVE</button>
                </div>
            </div>
        </form>

        <form action="{{ route('aminities.destroy', $aminities->id) }}" method="post" id="delete-form">
            @csrf
            @method('DELETE')
            <button type="button" class="btn btn-danger" onclick="showDeleteConfirmation()">DELETE</button>
        </form>

        <script>
            function showDeleteConfirmation() {
                if (confirm("Are you sure you want to delete this amenity?")) {
                    document.getElementById('delete-form').submit();
                }
            }
        </script>

    </div>
@endsection
