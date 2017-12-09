<h3>list of tasks</h3>
@if (count($tasks) > 1)
    @foreach($tasks as $task)
        <p>{{ $task->name }}</p>
        <p>{{ $task->description }}</p>
        <p>{{ $task->begin_date }}</p>
        <p>{{ $task->end_date }}</p>
    @endforeach
@else
    <p>no task to do</p>
@endif