@extends('layout.app')
@section('content')
<div class = "container">
    <div class = "row justify-content-left">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4"><br>
                    <a href="/addDepartment"><button class="btn btn-primary">+Add Department</button></a>
                </div>
            </div><br>
            <div class="row">
                <table class="table table-bordered display" id="myTable">
                    <thead>
                        <tr>
                            <th>S.N.</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Edit/Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($department)>0)
                            @foreach($department->all() as $department)
                                <tr>
                                    <td>{{ $department->id}}</td>
                                    <td>{{ $department->title}}</td>
                                    <td>{{ $department->description}}</td>
                                    <td>
                                        <ul>
                                            <a href="/editDepartment/{{$department->id}}" class="btn btn-default">Edit</a>
                                            {!!Form::open(['action' => ['DepartmentController@destroy', $department->id], 'method' => 'GET', 'class' => 'pull-right'])!!}
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