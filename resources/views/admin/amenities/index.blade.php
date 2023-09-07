@extends('layouts.admin')

@section('content')
<h3>Amenities </h3>

<h4>List Amenities  </h4>
<div class="row" style="margin-top:20px;">
  <table id="mlist" class="table table-bordered table-striped table-condensed" cellspacing="0" width="100%">
<thead>
            <tr>

               <th>Name</th>


                <th>Edit</th>


            </tr>
        </thead>

        <tbody>

		@foreach ($aminities as $nam)


             <tr>
                <td>{{ $nam->title }}</td>





              <th> <a href="{{ route('aminities.edit', $nam->id) }}"> Edit </th>


            </tr>

            @endforeach

            </tbody>

            </table>

    </div>


@endsection
