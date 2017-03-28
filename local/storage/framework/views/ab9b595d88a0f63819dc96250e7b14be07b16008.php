<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/cssFormation.css')); ?>">
<style>
.panel-heading
{
       background-color: #19B395 !important;
       color:white;
}
.panel-title a
{
    color:white;
}
.panel-body , .panel-footer
{
   
}
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container col-md-9">

    <?php $__currentLoopData = json_decode($problems,true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $problem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#s<?php echo e($problem['id']); ?>"><?php echo e($problem['NomUser']); ?> a signaler un problem</a>
                </h4>
                </div>
                <div id="s<?php echo e($problem['id']); ?>" class="panel-collapse collapse">
                <div class="panel-body">Téléphone : <?php echo e($problem['telephone']); ?></div>

                <div class="panel-body">Date : <?php echo e($problem['date']); ?></div>
                <div class="panel-body">Document : <?php if($problem['linkAttach']): ?> <a href="http://localhost:8000<?php echo e($problem['linkAttach']); ?>" download>Telecharger</a> <?php else: ?> Non <?php endif; ?></div>
                <div class="panel-footer">Message : <?php echo e($problem['comment']); ?></div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>