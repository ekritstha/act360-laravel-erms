@extends('layout.app')
@section('content')
<div class="container">
    <h2>Dashboard</h2>
    <div class="row justify-content-left">
        <div class="col-md-12">
            <div class="row">
                <table class="table table-bordered display" id="myTable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Mobile</th>
                            <th>Employed for</th>
                            <th>Department</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($employee) > 0)
                            @foreach($employee->all() as $employee)
                                <tr>
                                    <td>{{ $employee->name}}</td>
                                    <td>{!! \Carbon\Carbon::parse($employee->dob)->diff(\Carbon\Carbon::now())->format('%y years')!!}</td>
                                    <td>{{ $employee->number}}</td>
                                    <td>{!!\Carbon\Carbon::parse($employee->join_date)->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days')!!}</td>
                                    <td>{{ $employee->department}}</td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection