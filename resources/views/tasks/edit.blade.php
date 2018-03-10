@extends('layouts.app')






@section('content')







    <div class="container">

        <h1>Edit List</h1>

        <hr>

        {!! Form::model($task,['method' => 'PATCH', 'action'=>['TasksController@update',$task->id]])!!}

        <div class="form-group">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title',null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('date', 'Date') !!}
            {!! Form::date('date',null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Update List',['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>








@stop