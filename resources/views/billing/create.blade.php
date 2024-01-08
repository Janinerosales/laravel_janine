@extends('billing.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Billing Page</div>
  <div class="card-body">
      
      <form action="{{ url('billing') }}" method="post">
        {!! csrf_field() !!}
        <label>Date</label></br>
        <input type="text" name="date" id="date" class="form-control"></br>
        <label>Total Amount</label></br>
        <input type="text" name="total_amount" id="total_amount" class="form-control"></br>
        <label>Payment Method</label></br>
        <input type="text" name="payment_method" id="payment_method" class="form-control"></br>
        <label>Payment Status</label></br>
        <input type="text" name="payment_status" id="payment_status" class="form-control"></br>
        <label>Service Type</label></br>
        <input type="text" name="service_type" id="service_type" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop