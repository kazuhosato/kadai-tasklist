@extends('layouts.app')

@section('content')

    <h1>{{ $task->id }}Edit</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th>Detail</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>

    {!! link_to_route('tasks.edit', 'Edit', ['id' => $task->id], ['class' => 'btn btn-default']) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('Destroy', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection