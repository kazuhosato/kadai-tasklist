@extends('layouts.app')

@section('content')

    <h1>{{ $task->id }}Edit</h1>

    <p>Title: {{ $task->status}}</p><p> </p>
    <p>Detail: {{ $task->content }}</p>

    {!! link_to_route('tasks.edit', 'Edit', ['id' => $task->id]) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('Destroy') !!}
    {!! Form::close() !!}

@endsection