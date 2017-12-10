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

    @if (count($tasks) >= 1)
        @foreach ($tasks as $task)
            <p>{{ $task->id }} - {{ $task->name }}</p>
            <p>{{ $task->description }}</p>
            <p> {{ $task->begin_date }} to {{ $task->end_date }}</p>
        @endforeach
    @else
        No tasks !!!
    @endif
    
@endsection
