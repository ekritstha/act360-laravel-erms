@extends('layout.app')
@section('content')
<div class="container">
  <div class="row justify-content-left">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-3"><br>
          <a href="/addEmployee"><button class="btn btn-primary">+ Add Employee</button></a> 
        </div>
      </div><br>
      <div class="row"> 
        <table class="table table-bordered display" id="myTable">
          <thead>
            <tr>
              <th>S.N</th>
              <th>Name</th>
              <th>Date of Birth</th>
              <th>Gender</th>
              <th>Mobile Number</th>
              <th>Address</th>
              <th>Email</th>
              <th>Department</th>
              
              {{-- <th>About</th> --}}
              <th>Photo</th>
              <th>Edit/Delete</th>
            </tr>
          </thead>
          <tbody>
            @if(count($employee) > 0)
              @foreach($employee->all() as $employee)
                <tr>
                  <td>{{ $employee->id}}</td>
                  <td>{{ $employee->name}}</td>
                  <td>{{ $employee->dob}}</td>
                  <td>{{ $employee->gender}}</td>
                  <td>{{ $employee->number}}</td>
                  <td>{{ $employee->address}}</td>
                  <td>{{ $employee->email}}</td>
                  <td>{{ $employee->department}}</td>
                  {{-- <td>{{ $employee->about}}</td> --}}
                  <td><img src="images/{{ $employee->image}}" height="80px" width="80px" /></td>
                  <td>
                    <ul>
                      <a href="/editEmployee/{{$employee->id}}" class="btn btn-default">Edit</a>
                      {!!Form::open(['action' => ['EmployeeController@destroy', $employee->id], 'method' => 'GET', 'class' => 'pull-right'])!!}
                      {{Form::hidden('_method', 'DELETE')}}
                      {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                      {!!Form::close()!!}
                    </ul>
                  </td>  
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