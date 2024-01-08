@extends('appointment.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">appointment Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">APPOINTMENT</h5>
        <p class="card-text">Diagnosis : {{ $appointment->diagnosis }}</p>
        <p class="card-text">Treatment : {{ $appointment->treatment }}</p>
        <p class="card-text">Medications : {{ $appointment->medications }}</p>
        <p class="card-text">Date: {{ $appointment->date }}</p>
        <p class="card-text">Doctor: {{ $appointment->doctor }}</p>
        <p class="card-text">Status: {{ $appointment->status }}</p>
  </div>
       
    </hr>
  
  </div>
</div>