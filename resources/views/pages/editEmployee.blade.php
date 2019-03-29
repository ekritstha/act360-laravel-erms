@extends('layouts.app')
@section('content')
<div class="container">
<h1>Edit Employee</h1>
        {!! Form::open(['action' => ['EmployeeController@update',$employee->id],'method'=>'GET', 'enctype'=> 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('name','Name')}}
                {{Form::text('name',$employee->name,['class' =>'form-control','placeholder'=>'Name of the Employee'])}}
            </div>
            <div class="form-group">
                    {{Form::label('dob','Date of Birth')}}
                    {{Form::date('dob',$employee->dob,['class' =>'form-control','placeholder'=>'Date of Birth'])}}
            </div>
            <div class="form-group">
                    {{Form::label('gender','Gender: ')}}
                    {{Form::select('gender', ['male' => 'Male', 'female' => 'Female', 'others' => 'Others'])}}
            </div>
            <div class="form-group">
                    {{Form::label('number','Mobile number')}}
                    {{Form::text('number',$employee->number,['class' =>'form-control','placeholder'=>'Number'])}}
            </div>
            <div class="form-group">
                    {{Form::label('address','Address')}}
                    {{Form::text('address',$employee->address,['class' =>'form-control','placeholder'=>'Address'])}}
            </div>
            <div class="form-group">
                    {{Form::label('email','Email')}}
                    {{Form::email('email',$employee->email,['class' =>'form-control','placeholder'=>'Email address'])}}
            </div>
            <div class="form-group">
                    {{Form::label('department','Department')}}
                    {{Form::text('department',$employee->department,['class' =>'form-control','placeholder'=>'Department'])}}
            </div>
            <div class="form-group">
                    {{Form::label('join_date','Join Date')}}
                    {{Form::date('join_date',$employee->join_date,['class' =>'form-control','placeholder'=>'Join Date'])}}
            </div>
            <div class="form-group">
                    {{Form::label('about','About')}}
                    {{Form::textarea('about',$employee->about,['class' =>'form-control','placeholder'=>'About the Employee'])}}
            </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        
        {!! Form::close() !!}
 </div>
@endsection