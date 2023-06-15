@extends('layouts.app')

@section('title','List of Tasks')
<!-- <h1>List of Tasks</h1> -->
@section('content')
    <!-- @if (count($tasks)) -->
    @forelse($tasks as $task)
        <div><a href ="{{route('task.show',['id' => $task->id])}}">{{$task -> title}}</a></div>
    @empty
     <div>There are no tasks</div>
    @endforelse
    
    <!-- @endif -->

@endsection