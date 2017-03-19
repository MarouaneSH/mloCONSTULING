<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/cssFormation.css')); ?>">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container col-md-9">
    <!--<div class="row">
        <div class="col-md-4">
            <div class="card card-msg">
                <h5>User Name :</h5>
                <h5>Sujet :</h5>
                <h5>Date :</h5>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-msg">
                <h5>User Name :</h5>
                <h5>Sujet :</h5>
                <h5>Date :</h5>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-msg">
                <h5>User Name :</h5>
                <h5>Sujet :</h5>
                <h5>Date :</h5>
            </div>
        </div>-->
         <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>comment</th>
            </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = json_decode($messages,true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>  <?php echo e($message['id']); ?> </td>
                        <td> <?php echo e($message['title']); ?></td>
                        <td> <?php echo e($message['comment']); ?></td>
                    </tr>
                    <!--here Iwant to use pagination-->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        <table> 
    








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