@extends('layouts.app')






@section('content')



    <div class="container">

        <h1>Edit Item</h1>

        <hr>

        {!! Form::model($item,['method' => 'PATCH', 'action'=>['ItemsController@update',$item->id]])!!}

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
            {!! Form::submit('Update Item',['class'=>'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}

    </div>











@stop