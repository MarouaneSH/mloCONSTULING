<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/cssFormation.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container col-md-9">
 <table class="table">
    <thead>
      <tr>
        <th>Code</th>
        <th>Utilisé</th>
        <th>Par</th>
      </tr>
    </thead>
    <tbody>
   
  <?php $__currentLoopData = json_decode($codes,true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr <?php if($code['used']=='1'): ?> class="success" <?php else: ?> class="danger" <?php endif; ?>>
                    <td><?php echo e($code['code']); ?></td>
                     <?php if($code['used']=='1'): ?> 
                     <td> Oui</td>
                     <td><?php echo e($code['user']['name']); ?></td>
                   
                     <?php else: ?>
                     <td>Non</td>
                     <td>##</td>
                     <?php endif; ?>

            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
  </table>

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>