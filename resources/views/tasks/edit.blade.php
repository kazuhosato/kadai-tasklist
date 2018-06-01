@extends('layouts.app')

@section('content')

    <h1>{{ $task->id }}Edit Page </h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('status', 'Title:') !!}
        {!! Form::text('status') !!}

        {!! Form::label('content', 'Detail:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('Change') !!}

    {!! Form::close() !!}

@endsection