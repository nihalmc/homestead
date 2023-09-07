@extends('layouts.admin')

@section('content')
@if (!request()->is('listprojectbyProject'))
<h3>Project </h3>
<form action="{{ route('project.listprojectbybyspecification') }}" method="post" enctype="multipart/form-data" >
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

<li><a  href="{{ route('Projectspecification.create') }}">Add </a></li>
@if($projectSpecification->isEmpty())
        <!-- This section will be hidden when there are no projects -->
    @else
    <h4>List project specification </h4>
    <div class="row" style="margin-top:20px;">
        <table id="mlist" class="table table-bordered table-striped table-condensed" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Specification name</th>
                    <th>Value</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projectSpecification as $speci)
                    <tr>
                        <td>{{ $speci->specification->title }}</td>
                        <td>{{ $speci->value }}</td>
                        <th> <a href="{{ route('Projectspecification.edit', $speci->id) }}"> Edit </a> </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif
@endif
@endsection
