@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Edit Department</h1>
        {!! Form::open(['action' => ['DepartmentController@update',$department->id],'method'=>'GET', 'enctype'=> 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('title','Title')}}
                {{Form::text('title',$department->title,['class' =>'form-control','placeholder'=>'Title of Department'])}}
            </div>
            <div class="form-group">
                    {{Form::label('description','Descripton')}}
                    {{Form::textarea('description',$department->description,['class' =>'form-control','placeholder'=>'Description about the Department'])}}
            </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection