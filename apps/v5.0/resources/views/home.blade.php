<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 27/08/17
 * Time: 19:47
 */
?>
<h1>Home</h1>

<ul>
    {{--{{ HTML::link('/login', 'log in', array('id' => 'linkid'), true)}}--}}
    <li>{{ Html::link('/task/list', 'list of tasks', true) }}</li>
    <li>{{ Html::link('/task/add', 'add a tasks', true) }}</li>
</ul>