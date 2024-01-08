@extends('patient.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Patient Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">PATIENT INFORMATION</h5>
        <p class="card-text">Name : {{ $patient->name }}</p>
        <p class="card-text">Address : {{ $patient->address }}</p>
        <p class="card-text">Phone : {{ $patient->phone }}</p>
        <p class="card-text">Gender : {{ $patient->gender }}</p>
        <p class="card-text">Birthdate: {{ $patient->birthdate }}</p>
  </div>
       
    </hr>
  
  </div>
</div>