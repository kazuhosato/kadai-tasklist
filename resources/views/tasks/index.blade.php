@extends('layouts.app')

@section('content')

    <h1>All Tasks</h1>

    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
              <li>{!! link_to_route('tasks.show', $task->updated_at, ['id' => $task->id]) !!} > {{ $task->status }} > {{ $task->content }}</li> 
                
            @endforeach
        </ul>
    @endif

    {!! link_to_route('tasks.create', 'New Task') !!}

@endsection