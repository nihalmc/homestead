@extends('layouts.admin')

@section('content')


<h1>Add Project category</h1>

<form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
    @csrf
<div class="form-group row">

    <div class ="col-md-2">
            Name
    </div>
    <div class = "col-md-4">
     <input type="Text" class="form-control" name="name">
    </div>

</div>

<div class="form-group">

    <div class="col-md-2">

    </div>
    <div class="col-md-2">
   <button type="submit" class="btn btn-primary"> SAVE  </button>

    </div>
</div>


</form>
</div>
<br/>
<h3>Project category </h3>

<h4>List project category </h4>
<div class="row" style="margin-top:20px;">
  <table id="mlist" class="table table-bordered table-striped table-condensed" cellspacing="0" width="100%">
<thead>
                <tr>


                 <th>Name</th>


                <th>Edit</th>


                </tr>
        </thead>

        <tbody>
            @foreach ($projectcategory as $nam)

             <tr>

                <td>{{ $nam->name }}</td>



              <th> <a href="{{ route('category.edit', $nam->id) }}"> Edit </th>

            </tr>


           @endforeach

            </tbody>

            </table>

    </div>





@endsection
