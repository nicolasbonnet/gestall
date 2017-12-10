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
    
    @include('layout.errors')

    <form method="post" action="{{ isset($task->id) ? route('task_update', ['id' => $task->id]) : route('task_valid')  }}">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Set a name" class="form-control" value="{{ isset($task) ? $task->name : '' }}">
        </div>
        <div class="form-group">
            <label for="link">Description</label>
            <input type="text" name="description" id="description" placeholder="Set a description" class="form-control" value="{{ $task->description or '' }}">
        </div>
        <div class="form-group">
            <label for="link">Begin_date</label>
            <input type="text" name="begin_date" id="begin_date" placeholder="Set a date" class="form-control" value="{{ $task->begin_date or '' }}">
        </div>
        <div class="form-group">
            <label for="link">End_date</label>
            <input type="text" name="end_date" id="end_date" placeholder="Set a date" class="form-control" value="{{ $task->end_date or '' }}">
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <button type="submit" class="btn btn-info">Add a Task</button>
        </div>
    </form>
@endsection
