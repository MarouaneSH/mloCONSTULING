<?php $__env->startSection('content'); ?>
<div class="container col-md-9">
  
    
    <?php echo e($users); ?>

     <?php $__currentLoopData = json_decode($users,true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       Nom : <?php echo e($user['name']); ?> <br>
       Prenom : <?php echo e($user['email']); ?> <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = json_decode($users,true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr <?php if($user['subscribed']=='0'): ?> class="success" <?php else: ?> class="info" <?php endif; ?>>
                    <td><?php echo e($user['name']); ?></td>
                    <td><?php echo e($user['email']); ?> </td>
                    <td><?php echo e($user['subscribed']); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>