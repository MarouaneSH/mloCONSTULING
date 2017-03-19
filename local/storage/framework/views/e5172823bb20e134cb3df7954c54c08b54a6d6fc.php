<?php $__env->startSection('style'); ?>

    <link href="css/Thanks.css" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="jumbotron text-xs-center">
    <h1 class="display-3">Merci !</h1>
    <p class="lead">Nous Vous Contacteron Par Email ou Telephone .</p>
    <hr>
    <p>
        Vous avez besoin d'aide? <a href="">Contact us</a>
    </p>
    <p class="lead">
        <a class="btn btn-primary btn-sm" href="<?php echo e(url('/')); ?>" role="button">Voir la page d'accueil</a>
    </p>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>