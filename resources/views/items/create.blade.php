@extends('layouts.app')






@section('content')







    <div class="container">

        <h1>Create New Item</h1>

        <hr>

        {!! Form::open(['method' => 'Post', 'action'=>'ItemsController@store'])!!}

        <div class="form-group">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title',null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Description') !!}
            {!! Form::text('body',null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('task_id', 'Task') !!}
            {!! Form::select('task_id',$items,null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create Item',['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>








@stop