@extends('layouts.app')

@section('title','Add Task')

@section('content')
<form method="post" action ="{{route('tasks.store')}}">
@csrf
<div>
    <label for="title">Title</label>
    <input text="text" name ="title" id="title"/>
</div>
<div>
    <label for="description">Description</label>
    <textarea text="description" name ="description" id="description" rows ="5"></textarea>
</div>
<div>
    <label for="long_description">Long description</label>
    <textarea text="long_description" name ="long_description" id="long_description" rows ="10"></textarea>
</div>
<div>
   <button type="submit">Add Task</button>
</div>
</form>
@endsection