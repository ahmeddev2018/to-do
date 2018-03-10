@extends('layouts.app')






@section('content')







    <div class="container">

        <h1>Create New List</h1>

        <hr>

        {!! Form::open(['method' => 'Post', 'action'=>'TasksController@store'])!!}

        <div class="form-group">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title',null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('date', 'Date') !!}
            {!! Form::date('date',null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create List',['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>








@stop