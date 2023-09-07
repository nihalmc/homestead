@extends('layouts.admin')

@section('content')
<h3>Project </h3>
<form action="{{ route('projectvideo.listvideobyproject') }}" method="post"enctype="multipart/form-data"onSubmit="return FrmSub()">
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

@if($projectvideo->isEmpty())
        <!-- This section will be hidden when there are no projects -->
    @else


<h4>List video </h4>
<div class="row" style="margin-top:20px;">
  <table id="mlist" class="table table-bordered table-striped table-condensed" cellspacing="0" width="100%">
<thead>
            <tr>




                 <th>URL</th>

                <th>Edit</th>


            </tr>
        </thead>

        <tbody>


            @foreach ($projectvideo as $vid)
             <tr>



				<td>{{ $vid->url }}</td>

              <th> <a href="{{ route('Projectvideo.edit', $vid->id) }}"> Edit </th>


            </tr>

            @endforeach


            </tbody>

            </table>

    </div>
    @endif


@endsection
