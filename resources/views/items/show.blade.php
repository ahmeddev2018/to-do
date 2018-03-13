@extends('layouts.app')






@section('content')

    <div class="container">



        <div class="row">

            <h1 class="text-center">{{$tasks->title}}</h1>
        </div>

        <hr>
        <hr>




        <div class="row">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Items</th>
                        <th scope="col">Description</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>




                    <tbody>

                    @foreach($items as $item)
                        <tr>
                            <td scope="row">{{$item->title}}</td>
                            <td scope="row">{{$item->body}}</td>


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