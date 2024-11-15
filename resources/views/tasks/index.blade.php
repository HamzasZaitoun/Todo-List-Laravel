@extends('layouts.app')

@section('content')
    <h1 class="mt-5">Task List</h1>
 <a href="/tasks/create"class="btn btn-dark btn-lg mt-3 btn-block">New Task</a>
    @foreach($tasks as $task)
    <div class="card mt-2 w-100 d-inline-block" >
  <div class="card-body ">
  <p class=""> {{$task->description}}</p>
  <a href="#" class="btn btn-dark">{{$task->id}} complete!</a>
  <a href="#" class="btn btn-dark">Delete Task!</a>
  
  </div>
  
</div>
    @endforeach


@endsection
