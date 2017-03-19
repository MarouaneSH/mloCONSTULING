<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/cssFormation.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container col-md-9">

<div class="row">
        <div class="col-md-6">
            <div class="card">
                    <h5><i class="fa fa-users" aria-hidden="true"></i></h5>
                    <h4>Utilisateur Inscrit</h4>
            </div>
            <div class="card">
                    <h5><i class="fa fa-comment" aria-hidden="true"></i></h5>
                    <h4>Messages Recu</h4>
            </div>
        
        </div>

</div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>