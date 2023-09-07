@extends('layouts.admin')

@section('content')
<h3> Specification </h3>

<h4>List Specification </h4>
<div class="row" style="margin-top:20px;">
  <table id="mlist" class="table table-bordered table-striped table-condensed" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Name</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($homeslider as $nam)

      <tr>
        <td>{{ $nam->title}}</td>

        <td><a href="{{ route('Specification.edit', $nam->id) }}">Edit</a></td>
        
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
