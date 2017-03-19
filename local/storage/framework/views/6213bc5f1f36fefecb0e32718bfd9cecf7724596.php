<?php $__env->startSection('style'); ?>
    <link href="css/Admin.css" rel="stylesheet">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

  
   <div id="MainMenu">
         <h1 style="">List Des Demande</h1>
     <?php $__currentLoopData = $client; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
            <div class="list-group panel">
            <a href="#user<?php echo e($loop->index); ?>" class="list-group-item list-group-item-success listMenu" data-toggle="collapse" >Nom : <?php echo e($client->Nom ." , Prenom : ". $client->Prenom); ?></a>
            <div class="collapse" id="user<?php echo e($loop->index); ?>">
                <a  class="list-group-item" >Nom : <?php echo e($client->Nom); ?> </a>
                <a  class="list-group-item">Prenom : <?php echo e($client->Prenom); ?></a>
                <a  class="list-group-item">Email : <?php echo e($client->Email); ?></a>
                <a  class="list-group-item">Tel : <?php echo e($client->Tel); ?></a>
                <a  class="list-group-item">Message : <?php echo e($client->Message); ?></a>
            </div>
        
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>