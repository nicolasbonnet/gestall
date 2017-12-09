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
    <h1>Hello World !!</h1>
@endsection
