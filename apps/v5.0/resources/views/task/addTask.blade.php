<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 27/08/17
 * Time: 19:46
 */
?>
<h2>Store Task</h2>
<form action="{{ route('validtask') }}">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="">
    <label for="description">Description</label>
    <input type="text" name="description" id="description">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit">
</form>
