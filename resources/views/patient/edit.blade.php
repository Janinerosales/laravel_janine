@extends('patient.layout')
@section('content')
 
<div class="card">
  <div class="card-header">patient Page</div>
  <div class="card-body">
      
      <form action="{{ url('patient/' .$patient->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$patient->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$patient->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$patient->address}}" class="form-control"></br>
        <label>Phone</label></br>
        <input type="text" name="phone" id="phone" value="{{$patient->phone}}" class="form-control"></br>
        <label>Gender</label></br>
        <input type="text" name="gender" id="gender" value="{{$patient->gender}}" class="form-control"></br>
        <label>Birthdate</label></br>
        <input type="text" name="birthdate" id="gender" value="{{$patient->birthdate}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop