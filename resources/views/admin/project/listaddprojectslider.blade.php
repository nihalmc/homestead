@extends('layouts.admin')

@section('content')

<h3>Project slider</h3>

<h4>List project slider</h4>
<div class="row" style="margin-top:20px;">
    <table id="mlist" class="table table-bordered table-striped table-condensed" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Project Name</th>
                <th>Image</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projectslider as $slid)
            <tr>
                <td>{{ $slid->project->name }}</td>
                <td>
                    <img src="{{ asset('storage/' .$slid->image) }}" height="100px" width="100px" alt="">
                </td>
                <td>
                    <a href="{{ route('project.editprojectslider', $slid->id) }}">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
