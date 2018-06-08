@if (Auth::check())
<ul class="media-list">
@foreach ($tasks as $task)
    <?php $user = $task->user; ?>
    <li class="media">
        <div class="media-left">
            <img class="media-object img-rounded" src="{{ Gravatar::src($user->email, 50) }}" alt="">
        </div>
        <div class="media-body">
            <div>
                {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $task->created_at }}</span>
            </div>
            <div>
                <p>Title:{!! nl2br(e($task->status)) !!}</p>
                 <p>Detail:{!! nl2br(e($task->content)) !!}</p>
            </div>
            <div class = "col-xm-8 btn-toolbar">
                @if (Auth::user()->id == $task->user_id)
                    {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Done', ['class' => 'btn btn-danger btn-xm']) !!}
                    {!! Form::close() !!}
                    {!! link_to_route('tasks.edit', '  ', ['id' => $task->id], ['class' => 'btn btn-primary btn-xm active glyphicon glyphicon-pencil']) !!}
                @endif
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $tasks->render() !!}
@else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Taskmanagement</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
       @endif 