@extends('billing.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Billing Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">BILLING</h5>
        <p class="card-text">Date : {{ $billing->date }}</p>
        <p class="card-text">Total Amount: {{ $billing->total_amount }}</p>
        <p class="card-text">Payment Method: {{ $billing->payment_method }}</p>
        <p class="card-text">Payment Status: {{ $billing->payment_status }}</p>
        <p class="card-text">Service Type: {{ $billing->service_type }}</p>
  </div>
       
    </hr>
  
  </div>
</div>