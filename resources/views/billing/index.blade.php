@extends('billing.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Billing</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/billing/create') }}" class="btn btn-success btn-sm" title="Add New Billing">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Total Amount</th>
                                        <th>Payment Method</th>
                                        <th>Payment Status</th>
                                        <th>Service Type</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($billing as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->total_amount }}</td>
                                        <td>{{ $item->payment_method}}</td>
                                        <td>{{ $item->payment_status}}</td>
                                        <td>{{ $item->service_type }}</td>
 
                                        <td>
                                            <a href="{{ url('/billing/' . $item->id) }}" title="View Billing"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/billing/' . $item->id . '/edit') }}" title="Edit Billing"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/billing' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Patient" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <a href="javascript:history.back()" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </d
    
    
    
    