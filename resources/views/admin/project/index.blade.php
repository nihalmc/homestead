@extends('layouts.admin')

@section('content')
@if (!request()->is('listprojectbycategory'))
<h3>Project</h3>
<form action="{{ route('project.listprojectbycategory') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <div class="col-md-2">
            <label for="selectid">Select project</label>
        </div>
        <div class="col-md-4">
            <select class="form-control" name="category">
                @foreach ( $projectcategory as $pro)
                    <option value="{{ $pro->id }}">{{ $pro->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <div class="col-md-1/2">
            </div>
            <button type="submit" class="btn btn-primary"> SHOW </button>
        </div>
    </div>
</form>

@if ($project->isEmpty())
        <!-- This section will be hidden when there are no projects -->
    @else
<h4>List project</h4>
<div class="row" style="margin-top:20px;">
    <table id="mlist" class="table table-bordered table-striped table-condensed" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Current status</th>
                <th>Location map</th>
                <th>Image</th>
                <th>Location</th>
                <th>Logo</th>
                <th>Order number</th>
                <th>Show in home page</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($project as $proj)
                <tr>
                    <td>{{ $proj->name }}</td>
                    <td>{!! $proj->txtDescription !!}</td>
                    <td>
                        <img src="{{ asset('storage/' .$proj->status) }}" height="100px" width="100px" alt="" />
                    </td>
                    <td>
                        <img src="{{ asset('storage/'.$proj->map) }}" height="100px" width="100px" alt="" />
                    </td>
                    <td>
                        <img src="{{ asset('storage/'.$proj->image) }}" height="100px" width="100px" alt="" />
                    </td>
                    <td>{{ $proj->location }}</td>
                    <td>
                        <img src="{{ asset('storage/'.$proj->logo) }}" height="100px" width="100px" alt="" />
                    </td>
                    <td>{{ $proj->order_number }}</td>
                    <td>{{ $proj->chkHomepage }}</td>
                    <td>
                        <a href="{{ route('project.edit',$proj->id) }}"> Edit </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif
@endif
@endsection
