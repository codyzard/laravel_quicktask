@extends('layouts.app')

@section('content')
    <h1 style="margin-left: 50px">Edit Task</h1>
    <form action="{{url('tasks/'.$task->id)}}" method="POST" style="margin-left: 50px">
        <input type="hidden" name="_method" value="PUT">
         {{ csrf_field() }}
         {{method_field('PATCH')}}
        <div class="form-group" style="margin-right: 500px " >
            <label>Name</label>
            <input type="text" value="{{$task->name}}" name="name" id="task-name" class="form-control" autofocus>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ url('previous()')}}"><button class="btn btn-success">Cancel</button><a>
    </form> 
@endsection
