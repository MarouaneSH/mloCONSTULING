<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/cssFormation.css')); ?>">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container col-md-9">
    <div class="row card card-msg">
        <h4>Listes Des Messages recu</h4>
    </div>
    <div class="row">
        <?php $__currentLoopData = json_decode($messages,true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card card-msg">
                    <h5>Sujet :  <?php echo e($message['title']); ?>  </h5>
                    <h5>Nom : <?php echo e($message['title']); ?> </h5>
                    <h5>Date : <?php echo e($message['date_message']); ?></h5>  
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
  
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        
    </div>  
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function(){

    $("#table").DataTable(
        {
            "ajax":"http://localhost:90/api/getMessages?&key=MarouaneSH-api",
            "columns": [
               "id"
            ]
        }   
    )
})


</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>