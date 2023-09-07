@extends('layouts.admin')

@section('content')


<h1>Edit Project category</h1>
<h3>Edit </h3>projectcategory

<form action="{{ route('category.update', $projectcategory->id) }}" method="post" enctype="multipart/form-data" >
    @csrf

    @method('PUT')
<div class="form-group row">

    <div class ="col-md-2">
            Name
    </div>
    <div class = "col-md-4">
     <input type="Text" class="form-control" name ="name" value="{{ $projectcategory->name }}">
    </div>

</div>



<div class="form-group">

    <div class="col-md-2">

    </div>
    <div class="col-md-2">
   <button type="submit" class="btn btn-primary"> SAVE  </button>
    </form>

    <form action="{{ route('category.destroy', $projectcategory->id) }}" method="post" id="delete-form">
        @csrf
        @method('DELETE')
        <button type="button" class="btn btn-danger" onclick="showDeleteConfirmation()">DELETE</button>
    </form>

</div>

</div>
</div>


<script>
function showDeleteConfirmation() {
                if (confirm("Are you sure you want to delete this project category?")) {
                    document.getElementById('delete-form').submit();
                }
            }

     </script>




@endsection
