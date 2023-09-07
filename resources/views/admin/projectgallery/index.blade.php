@extends('layouts.admin')

@section('content')
<h3>Project</h3>
<form action="{{ route('project.listgallerybyproject') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <div class="col-md-2">
            <label for="selectid">Select project</label>
        </div>
        <div class="col-md-4">
            <select class="form-control" name="project_id">
                <option>--Select--</option>
                @foreach ($project as $pro)
      <option value="{{ $pro->id }}" @if(isset($selected_id) && ($selected_id == $pro->id)) selected @endif>{{ $pro->name }}</option>
  @endforeach
            </select>
        </div>
        <div class="form-group">
            <div class="col-md-1/2"></div>
            <button type="submit" class="btn btn-primary"> SHOW </button>
        </div>
    </div>
</form>

@if(isset($gallery))
<h4>List Gallery</h4>
<div class="row" style="margin-top:20px;">
    <table id="mlist" class="table table-bordered table-striped table-condensed" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Image</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gallery as $gal)
            <tr>
                <td><img src="{{ asset('storage/' . $gal->image) }}" height="100px" width="100px" alt="" /></td>
                <th><a href="{{ route('Projectgallery.edit', $gal->id) }}">Edit</a></th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif

@endsection
