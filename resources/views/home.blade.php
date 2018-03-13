@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="text-center">
                        <h1>To-Do App</h1>
                    </div>

                    <hr>

                    <div class="row">
                        <a href="/task/public/tasks" class="btn btn-lg btn-primary col-sm-6" role="button">All Lists</a>

                        <a href="/task/public/items" class="btn btn-lg btn-info col-sm-6" role="button">All Items</a>

                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
