@extends('layout.app')
@section('content')
<div class="container">
    <h1>Add Department</h1>
    {!! Form::open(['action' => 'DepartmentController@store','method'=>'POST', 'enctype'=> 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class' =>'form-control','placeholder'=>'Title of Department'])}}
        </div>
        <div class="form-group">
                {{Form::label('description','Descripton')}}
                {{Form::textarea('description','',['class' =>'form-control','placeholder'=>'Description about the Department'])}}
        </div>
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
@endsection