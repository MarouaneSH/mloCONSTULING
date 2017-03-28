<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/cssFormation.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container col-md-9">
    <iframe src="http://localhost:8000/api/PostBiblio?key=MarouaneSH-api" scrolling="no" frameborder="0" style="width:100%;height:900px">
    </iframe>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>