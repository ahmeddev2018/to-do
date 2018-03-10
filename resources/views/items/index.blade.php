@extends('layouts.app')






@section('content')

    <div class="container">



        <div class="row">

            <h1 class="text-center">All Items</h1>
        </div>




        <div class="row">

            {!! Form::open(['method' => 'GET', 'action'=>'ItemsController@create'])!!}


            <div class="form-group">
                {!! Form::submit('Create New Item',['class'=>'btn btn-primary pull-right']) !!}
            </div>

            {!! Form::close() !!}
        </div>





        <div class="row">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Task</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>




                    <tbody>

                    @foreach($items as $item)
                        <tr>
                            <td scope="row">{{$item->title}}</td>
                            <td scope="row">{{$item->body}}</td>
                            <td scope="row">{{$item->task->title}}</td>
                            <td><a href="{{route('items.edit',$item->id)}}">Edit</a></td>


                            <td>
                                {!! Form::open(['method' => 'DELETE', 'action'=>['ItemsController@destroy',$item->id]])!!}

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