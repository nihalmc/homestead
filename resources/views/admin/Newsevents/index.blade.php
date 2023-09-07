@extends('layouts.admin')

@section('content')
<h3> News & Events </h3>

<h4>List News & Events </h4>
<div class="row" style="margin-top:20px;">
  <table id="mlist" class="table table-bordered table-striped table-condensed" cellspacing="0" width="100%">
<thead>
            <tr>

               <th>Title</th>

                <th>Image</th>


                <th>Text</th>
				 <th>Order Number</th>
                <th>Edit</th>


            </tr>
        </thead>

        <tbody>
        @foreach ( $homeslider as $new)


             <tr>
                <td>{{ $new->title }}</td>
                  <td><img src="{{ asset('storage/' . $new['image']) }}" height="100px" width ="100px" alt="" /> </td>



                  <td>{!! $new->txtDescription !!}</td>
				    <td>{{ $new->ordernumber }}</td>
              <th> <a href="{{ route('newsevents.edit',$new->id) }}"> Edit </th>


            </tr>


            @endforeach

            </tbody>

            </table>

    </div>


@endsection
