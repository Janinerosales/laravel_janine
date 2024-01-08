@extends('appointment.layout')
@section('content')
 
<div class="card">
  <div class="card-header">appointment Page</div>
  <div class="card-body">
      
      <form action="{{ url('appointment/' .$appointment->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$appointment->id}}" id="id" />
        <label>Diagnosis</label></br>
        <input type="text" name="diagnosis" id="diagnosis" value="{{$appointment->diagnosis}}" class="form-control"></br>
        <label>Treatment</label></br>
        <input type="text" name="treatment" id="treatment" value="{{$appointment->treatment}}" class="form-control"></br>
        <label>Medications</label></br>
        <input type="text" name="medications" id="medications" value="{{$appointment->medications}}" class="form-control"></br>
        <label>Date</label></br>
        <input type="text" name="date" id="date" value="{{$appointment->date}}" class="form-control"></br>
        <label>Doctor</label></br>
        <input type="text" name="doctor" id="doctor" value="{{$appointment->doctors}}" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" value="{{$appointment->status}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop