@extends('appointment.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Appointment</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/appointment/create') }}" class="btn btn-success btn-sm" title="Add New appointment">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Diagnosis</th>
                                        <th>Treatment</th>
                                        <th>Medications</th>
                                        <th>Date</th>
                                        <th>Doctor</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($appointment as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->diagnosis}}</td>
                                        <td>{{ $item->treatment}}</td>
                                        <td>{{ $item->medications }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->doctor}}</td>
                                        <td>{{ $item->status}}</td>
 
                                        <td>
                                            <a href="{{ url('/appointment/' . $item->id) }}" title="View appointment"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/appointment/' . $item->id . '/edit') }}" title="Edit appointments"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/appointment' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete appointments" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
    </d
    