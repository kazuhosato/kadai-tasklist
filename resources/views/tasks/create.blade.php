@extends('layouts.app')

@section('content')

    <h1>Task Register</h1>


    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('status', 'Title:') !!}
        {!! Form::text('status') !!}
        <br><br>
        {!! Form::label('content', 'Detail:') !!}
        {!! Form::text('content') !!}
         <br><br>
        {!! Form::submit('Register') !!}

    {!! Form::close() !!}

@endsection