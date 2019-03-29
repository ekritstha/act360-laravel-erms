@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Add Employee</h1>
        {!! Form::open(['action' => 'EmployeeController@store','method'=>'POST', 'enctype'=> 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('name','Name')}}
                {{Form::text('name','',['class' =>'form-control','placeholder'=>'Name of the Employee'])}}
            </div>
            <div class="form-group">
                    {{Form::label('dob','Date of Birth')}}
                    {{Form::date('dob','',['class' =>'form-control','placeholder'=>'Date of Birth'])}}
            </div>
            <div class="form-group">
                    {{Form::label('gender','Gender: ')}}
                    {{Form::select('gender'.'', ['Male' => 'Male', 'Female' => 'Female', 'Others' => 'Others'])}}
            </div>
            <div class="form-group">
                    {{Form::label('number','Mobile number')}}
                    {{Form::text('number','',['class' =>'form-control','placeholder'=>'Number'])}}
            </div>
            <div class="form-group">
                    {{Form::label('address','Address')}}
                    {{Form::text('address','',['class' =>'form-control','placeholder'=>'Address'])}}
            </div>
            <div class="form-group">
                    {{Form::label('email','Email')}}
                    {{Form::email('email','',['class' =>'form-control','placeholder'=>'Email address'])}}
            </div>
            <div class="form-group">
                    {{Form::label('department','Department')}}
                    {{Form::text('department','',['class' =>'form-control','placeholder'=>'Department'])}}
            </div>
            <div class="form-group">
                    {{Form::label('join_date','Join Date')}}
                    {{Form::date('join_date','',['class' =>'form-control','placeholder'=>'Join Date'])}}
            </div>
            <div class="form-group">
                    {{Form::label('about','About')}}
                    {{Form::textarea('about','',['class' =>'form-control','placeholder'=>'About the Employee'])}}
            </div>
            
            <div class="form-group">
                {{Form::label('image','Photo')}}
                {{Form::file('image')}}
            </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection