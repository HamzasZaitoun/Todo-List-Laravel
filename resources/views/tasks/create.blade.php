@extends('layouts.app')



@section('content')
<h1 class="mt-5 mb-3">Task List</h1>
<form method="POST" action="/tasks">
    <div class="form-group">
        @csrf
        <label for="description">
            Task description
        </label>
        <input type="text" class="form-control"
        name="description">
    </div>
    <div class="form-group">
        <button type="submit"class="btn btn-dark mt-3">create task</button>
    </div>
</form>
@endsection