@extends('appointment.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Appointments Page</div>
  <div class="card-body">
      
      <form action="{{ url('appointment') }}" method="post">
        {!! csrf_field() !!}
        <label>Diagnosis</label></br>
        <input type="text" name="diagnosis" id="diagnosis" class="form-control"></br>
        <label>Treatment</label></br>
        <input type="text" name="treatment" id="treatment" class="form-control"></br>
        <label>Medications</label></br>
        <input type="text" name="medications" id="medications" class="form-control"></br>
        <label>Date</label></br>
        <input type="text" name="date" id="date" class="form-control"></br>
        <label>Doctor</label></br>
        <input type="text" name="doctor" id="doctor" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop