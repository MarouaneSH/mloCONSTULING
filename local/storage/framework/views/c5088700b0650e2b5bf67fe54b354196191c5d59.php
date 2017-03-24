<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
     <link href="  <?php echo asset('css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="  <?php echo asset('font-awesome/css/font-awesome.min.css'); ?>">
     <link href="<?php echo e(asset('css/Admin.css')); ?>" rel="stylesheet">
     <?php echo $__env->yieldContent('style'); ?>
     
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
 
</head>
<body>
    <div class="nav-admin col-md-2">
        <h5>MLO-CONSULTING.COM</h5>
        <ul>
            
           
            
        </ul>
       <ul class="nav nav-pills nav-stacked">
            <?php $route = Route::currentRouteName() ?>
         
            <li><a href="<?php echo e(route('dashboard')); ?>" <?php if($route == 'dashboard'): ?> class="active" <?php endif; ?>>DEMANDES DEVIS</a></li>
            <li><a href="<?php echo e(route('tourdash','visite360')); ?>" <?php if($route == 'tourdash'): ?> class="active" <?php endif; ?>>TOURDASH</a></li>
             <li><a href="<?php echo e(route('FormationApi')); ?>" <?php if($route == 'FormationApi'): ?> class="active" <?php endif; ?>>Formation</a></li>
             <!--<li><a href="" class="sub-nav">Utilisateur Inscrit</a></li>
             <li><a href="" class="sub-nav">Message Recu</a></li>
             <li><a href="" class="sub-nav">Cours ajouté</a></li>
             <li><a href="" class="sub-nav">Ajouter un cours</a></li>-->
        </ul>
    </div>
    <div class="col-md-3"></div>
    <div class="top-bar">
                
                <a href="<?php echo e(route('AdminLogout')); ?>">Logout</a>
            </div>
          
<?php echo $__env->yieldContent('content'); ?>



<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

<?php echo $__env->yieldContent('script'); ?>

</body>
</html>