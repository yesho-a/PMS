@extends('layouts.pro')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-body">
                    <div class="container" style="padding: 1rem;">
                        <div class="row">
                          <div class="col mr-5 ml-5">
                            <h1> <strong><u>Add Task</u></strong></h1>
{!! Form::open(['action'=>'App\Http\Controllers\TaskController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
<div class="form-group">

    {{Form::label('task title','Task title')}}
    {{Form::text('title','',['class'=>'form-control','placeholder'=>'Task  Title'])}}
  
</div>

<div class="form-group pt-3">

    {{Form::label('task description','Task description')}}
    {{Form::text('description','',['class'=>'form-control','placeholder'=>'Task  Description'])}}
  
</div>

<div class="form-group  pt-3">
    {!! Form::label('start date', 'Start Date') !!}
   {!! Form::date('start', '', ['class' => 'form-control']) !!}
 
</div>
<div class="form-group  pt-3">
    {!! Form::label('start date', 'Start Date') !!}
   {!! Form::date('start', '', ['class' => 'form-control']) !!}
 
</div>

<div class="form-group pt-3">

{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    
    </div>


{!! Form::close() !!}
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
