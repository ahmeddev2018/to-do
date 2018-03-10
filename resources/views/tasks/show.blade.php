@extends('layouts.app')






@section('content')

    <div class="container">



        <div class="row">

            <h1 class="text-center">{{$tasks->title}}</h1>
        </div>





        <div class="row">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Item</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>




                    <tbody>

                    @foreach($tasks as $task)
                        <tr>
                            <td scope="row">{{$items->title}}</td>


                            {{--<td><a href="{{route('item.edit',$items->id)}}">Edit</a></td>--}}


                            {{--<td>--}}
                                {{--{!! Form::open(['method' => 'DELETE', 'action'=>['ItemsController@destroy',$items->id]])!!}--}}

                                {{--<div class="form-group">--}}
                                    {{--{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}--}}
                                {{--</div>--}}

                                {{--{!! Form::close() !!}--}}
                            {{--</td>--}}

                        </tr>

                        @endforeach
                    </tbody>


                </table>
            </div>

        </div>

    </div>






@stop