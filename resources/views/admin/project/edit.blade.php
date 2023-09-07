@extends('layouts.admin')

@section('content')


<h1>Edit Project</h1>
<h3>Edit</h3>
<div class="row container" style="">
 <script  src="{{ asset('admin/ckeditor/ckeditor.js') }}" > </script>
<form action="{{ route('project.update',$project->id) }}" method="post"enctype="multipart/form-data">
    @csrf

    @method('PUT')
<div class="form-group row">

    <div class ="col-md-2">
            Name
    </div>
    <div class = "col-md-4">
     <input type="Text" class="form-control" name ="name" value="{{ $project->name }}">
    </div>
    </div>

</div>

 <div class="form-group row">

<div class="col-md-2">
Description
</div>

<div class="col-md-8">


 	<textarea name="txtDescription">{{ $project->txtDescription}}</textarea>

</div>
</div>
<div class ="form-group row">
    <div class="col-md-2">
Current status
    </div>

     Image diemension should be 2190x1250 pixels
    <div class="col-md-4">
	 <input type="file" class="form-control" name="status">
         <img src="{{ asset('storage/' .$project->status) }}" height="100px" width ="100px" alt="" />
    </div>
</div>


<div class ="form-group row">
    <div class="col-md-2">
   Location map
    </div>

     Image diemension should be 2190x1250 pixels
    <div class="col-md-4">
	 <input type="file" class="form-control" name="map">
       <img src="{{ asset('storage/' .$project->map) }}" height="100px" width ="100px" alt="" />
    </div>
</div>




<div class ="form-group row">
    <div class="col-md-2">
    Image
    </div>
     Image diemension should be 2190x1461 pixels
    <div class="col-md-4">
        <input type="file" class="form-control" name="image">
        <img src="{{ asset('storage/' .$project->image) }}" height="100px" width ="100px" alt="" />
    </div>
</div>
<div class="form-group row">

    <div class ="col-md-2">
         Location
    </div>
    <div class = "col-md-4">
      <input type="Text" class="form-control" name ="location" value="{{ $project->location}}">
    </div>

</div>

<div class ="form-group row">
    <div class="col-md-2">
   Logo
    </div>

     Image diemension should be 2190x1250 pixels
    <div class="col-md-4">
	 <input type="file" class="form-control" name="logo">
         <img src="{{ asset('storage/' .$project->logo) }}" height="100px" width ="100px" alt="" />
    </div>
</div>
  <div class ="form-group row">

    <div class="col-md-2">
       Order number
    </div>

    <div class="col-md-4">
        <input type="text" name ="order_number" class="form-control" value="{{ $project->order_number}}">
    </div>


</div>

    <div class ="form-group row">
    <div class="col-md-2">
   <label for="selectid">Select category</label>
    </div>
     <div class="col-md-4">
        <select class="form-control" name="category_id">
            @foreach ($projectcategory as $pro)
                <option value="{{ $pro->id }}" @if ($project['category_id'] == $pro->id) selected @endif>
                    {{ $pro->name }}
                </option>
            @endforeach
        </select>
    </div>
    </div>

	<div class="row from-group">
                  <label class="col-md-2">
                     Show in home page
                      </label>
                      <div class="col-md-4">
                          <input type="checkbox"  name="chkHomepage" id="chkHomepage"  @if ($project['chkHomepage'] == "1") checked @endif/>
                          <input type="hidden" name="hiddenshowhomepage" id="hiddenshowhomepage">
                          </div>
                  </div>

    <div class="form-group">

        <div class="col-md-2">

        </div>
        <div class="col-md-2">
    <button type="submit" class="btn btn-primary"> SAVE  </button>

    </form>

   <!-- Delete Button -->

   <form action="{{ route('project.destroy', $project->id) }}" method="post" id="delete-form">
    @csrf
    @method('DELETE')
    <button type="button" class="btn btn-danger" onclick="showDeleteConfirmation()">DELETE</button>
</form>

    </div>

    </div>
    </div>


<script>
function showDeleteConfirmation() {
                if (confirm("Are you sure you want to delete this project?")) {
                    document.getElementById('delete-form').submit();
                }
            }
      </script>
     <br/><br/>


     <h4>Add Project slider</h4>
 <form action="{{ route('project.saveaddprojectslider') }}" method="post" enctype="multipart/form-data">
@csrf

</div>
<input type="hidden" name ="id" class="form-control" value="{{ $project->id }}">

<div class ="form-group row">
    <div class="col-md-2">
    Image
     </div>
    <div class="col-md-4">
        <input type="file" class="form-control" name="image" >
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
 <br/>
      <h4>List project slider </h4>
 <div class="row" style="margin-top:20px;">   <table id="mlist" class="table table-bordered table-striped table-condensed" cellspacing="0" width="100%">
     <thead>
             <tr>

            <th>Project Name</th>
                 <th>Image</th>



                 <th>Edit</th>


            </tr>
         </thead>

         <tbody>

            @foreach ($projectslider as $slider)
            <tr>
                <td>{{ $slider->project->name }}</td>
                <td><img src="{{ asset('storage/' . $slider->image) }}" height="100px" width="100px" alt="" /></td>
                <td><a href="{{ route('project.editprojectslider', $slider->id) }}">Edit</a></td>
            </tr>
            @endforeach

            </tbody>

             </table>

     </div>
 <br/>

 <script>
	CKEDITOR.replace('txtDescription');

</script>
</div>





@endsection
