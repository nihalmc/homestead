@extends('layouts.admin')

@section('content')
@if (!request()->is('listaminitiesbyproject'))
<h3>Project </h3>
<form action="{{ route('project.listaminitiesbyproject') }}" method="post"enctype="multipart/form-data">
@csrf
    <div class ="form-group row">
    <div class="col-md-2">
   <label for="selectid">Select project</label>
    </div>
     <div class="col-md-4">
      <select class="form-control" name="project_id" >
	  <option>--Select--</option>
      @foreach ($project as $pro)
      <option value="{{ $pro->id }}" @if(isset($selected_id) && ($selected_id == $pro->id)) selected @endif>{{ $pro->name }}</option>
  @endforeach

      </select>

    </div>






     <div class="form-group">

    <div class="col-md-1/2">

    </div>

   <button type="submit" class="btn btn-primary"> SHOW  </button>

    </div>



    </div>





</form>
<li><a  href="{{ route('Projectaminities.create') }}">Add </a></li>
@if($projectaminities->isEmpty())
        <!-- This section will be hidden when there are no projects -->
    @else


<h4>List project Amnities </h4>
<div class="row" style="margin-top:20px;">
  <table id="mlist" class="table table-bordered table-striped table-condensed" cellspacing="0" width="100%">


<thead>
            <tr>



		  <th>Aminities name</th>


                <th>Edit</th>


            </tr>
        </thead>

        <tbody>
            @foreach ($projectaminities as $speci)

             <tr>


				 <td>{{ $speci->aminities->title }}</td>

              <th> <a href="{{ route('Projectaminities.edit', $speci->id) }}"> Edit </th>


            </tr>

            @endforeach


            </tbody>

            </table>

    </div>
    @endif
    @endif

@endsection
