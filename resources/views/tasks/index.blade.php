@extends('layouts.app')

@section('content')
   
    <h1>All Tasks</h1>
    
    <div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">新着情報</h3>
  </div>
  <div class="panel-body">
    <ul class="list-unstyled">
      <li>New Taskが{!! count($tasks) !!}個あります</li>
    </ul>
  </div>
</div>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Title</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    @endif

    {!! link_to_route('tasks.create', '   New Task', null, ['class' => 'btn btn-primary glyphicon glyphicon-plus ']) !!}
    
    
    

@endsection