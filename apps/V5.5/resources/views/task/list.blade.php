<?php
/**
 * Created by PhpStorm.
 * User: nicol
 * Date: 09/12/2017
 * Time: 17:58
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 04/12/17
 * Time: 20:08
 */
?>
@extends('layout.principal_layout')

@section('title_page')
    <h1>
        Task
        <small>form task</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Task</li>
    </ol>
@endsection

@section('content')
    @if(isset($error))
        {{ $error }}
    @endif
    
    @if(isset($success))
    <div class="alert alert-success" role="alert">
        {{ $success }}
    </div>
    @endif
    
    <button name="add" class="btn btn-primary" value="add" onclick='document.location.href="{{ url('/task_form') }}"'>add task</button>

    <table class="table table-bordered table-condensed">
        <thead>
            <tr>
                <th>name</th>
                <th>description</th>
                <th>limits</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @if (count($tasks) >= 1)
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->id }} - {{ $task->name }}</td>
                        <td>{{ $task->description }}</td>
                        <td> {{ $task->begin_date }} to {{ $task->end_date }}</td>
                        <td>
                            <i class="fa fa-window-close" onclick="document.location.href='{{ url('task_delete/'.$task->id) }}'"></i>
                            <i class="fa fa-pencil" onclick="document.location.href='{{ url('task_update/'.$task->id) }}'"></i>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr><td>No Task !!!</td></tr>
            @endif
        </tbody>
    </table>
    <div class="col-lg-12 text-center">
        {{ $tasks->links() }}
    </div>
@endsection