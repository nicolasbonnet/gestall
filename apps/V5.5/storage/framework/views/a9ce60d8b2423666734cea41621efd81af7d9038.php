<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 04/12/17
 * Time: 20:08
 */
?>


<?php $__env->startSection('title_page'); ?>
    <h1>
        Task
        <small>form task</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(url('/')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Task</li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Hello World !!</h1>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.principal_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>