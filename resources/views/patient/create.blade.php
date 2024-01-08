@extends('patient.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Patients Page</div>
  <div class="card-body">
      
      <form action="{{ url('patient') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Phone</label></br>
        <input type="text" name="phone" id="mobile" class="form-control"></br>
        <label>Gender</label></br>
        <input type="text" name="gender" id="mobile" class="form-control"></br>
        <label>Birthdate</label></br>
        <input type="text" name="birthdate" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop