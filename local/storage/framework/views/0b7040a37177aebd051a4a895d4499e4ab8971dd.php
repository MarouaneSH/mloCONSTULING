<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/cssFormation.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container col-md-9">
 <table class="table">
    <thead>
      <tr>
        <th>Nom utilisateur</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Nom de payeur</th>
        <th>Date Demande</th>
        <th>Date Paiement</th>
        <th>Banque</th>
      </tr>
    </thead>
    <tbody>
   
  <?php $__currentLoopData = json_decode($demandes,true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $demande): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <?php if($demande['verification_paiement']!=null): ?>
              <?php $__currentLoopData = $demande['verification_paiement']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $demande_verfication): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($demande['name']); ?></td>
                    <td><?php echo e($demande['email']); ?></td>
                    <td><?php echo e($demande['telephone']); ?></td>
                    <td><?php echo e($demande_verfication['name_payeur']); ?> </td>
                    <td><?php echo e($demande_verfication['date_demande']); ?> </td>
                    <td><?php echo e($demande_verfication['date_paiement']); ?> </td>
                    <td><?php echo e($demande_verfication['banque']); ?> </td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <?php endif; ?>
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
  </table>

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>