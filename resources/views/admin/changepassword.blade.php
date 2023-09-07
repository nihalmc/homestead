@extends('layouts.admin')

@section('content')
<div class="container">

    <h3>Change password </h3>
    
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif
    <form method ="post" action ="{{ route('change.password') }}">
        @csrf
        <div class="row form-group">
        <label class="col-md-2">Old Password </label>
        <div class="col-md-2">
        <input name="old_password" type="password" required class="form-control"/>

        </div>

        </div>
         <div class="row form-group">
        <label class="col-md-2"> New Password </label>
        <div class="col-md-2">
        <input name="new_password" type="password" required class="form-control"/>

        </div>

        </div>
         <div class="row form-group">
        <label class="col-md-2"> Confirm Password </label>
        <div class="col-md-2">
        <input name="new_password_confirmation" type="password" required class="form-control"/>

        </div>

        </div>
           <div class="row form-group">
           <div class="col-md-2">
           </div>
           <div class="col-md-2">
           <button type="submit" class="btn btn-primary">Change Password </button>
           </div>
           </div>
    </form>

    </div>


@endsection

