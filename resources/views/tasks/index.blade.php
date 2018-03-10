@extends('layouts.app')






@section('content')

    <div class="container">



        <div class="row">

                <h1 class="text-center">All Lists</h1>
        </div>




        <div class="row">

        {!! Form::open(['method' => 'GET', 'action'=>'TasksController@create'])!!}


        <div class="form-group">
            {!! Form::submit('Create New List',['class'=>'btn btn-primary pull-right']) !!}
        </div>

        {!! Form::close() !!}
        </div>





        <div class="row">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Date</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>




                <tbody>

                @foreach($tasks as $task)
                <tr>
                    <td scope="row"><a href="{{route('items.show',$task->id)}}">{{$task->title}}</a></td>
                    <td scope="row">{{$task->date}}</td>
                    <td><a href="{{route('tasks.edit',$task->id)}}">Edit</a></td>


                    <td>
                        {!! Form::open(['method' => 'DELETE', 'action'=>['TasksController@destroy',$task->id]])!!}

                        <div class="form-group">
                            {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                        </div>

                        {!! Form::close() !!}
                    </td>

                </tr>
                    @endforeach
                </tbody>


            </table>
          </div>

    </div>

    </div>






@stop