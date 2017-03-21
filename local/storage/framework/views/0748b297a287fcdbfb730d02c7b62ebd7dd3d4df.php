<?php $__env->startSection('content'); ?>
<div class="container col-md-9">
  
    
    <h3>Listes des utilisateurs inscrit </h3>
    <table class="table">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Date Création</th>
        <th>Abonnement</th>
        <th>Date d'abonnement</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = json_decode($users,true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr <?php if($user['subscribed']=='1'): ?> class="success" <?php else: ?> class="info" <?php endif; ?>>
                    <td><?php echo e($user['name']); ?></td>
                    <td><?php echo e($user['email']); ?> </td>
                    <td><?php echo e($user['telephone']); ?></td>
                    <td><?php echo e($user['created_at']); ?></td>
                    <td>
                     <?php if($user['subscribed']=='1'): ?>
                        OUI
                     <?php else: ?>
                      NON   
                     <?php endif; ?>
                    </td>
                    <td>
                     <?php if($user['date_subscription']==null): ?>
                        ##
                     <?php else: ?>
                      <?php echo e($user['date_subscription']); ?>

                     <?php endif; ?>
                     </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>