<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/cssFormation.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container col-md-9">

<div class="row">
        <div class="col-md-6">
        
            <a href="<?php echo e(route('formation_users')); ?>">
                <div class="card">
                        <h5><i class="fa fa-users" aria-hidden="true"></i></h5>
                        <h4>Utilisateur Inscrit</h4>
                </div>
            </a>
            <div class="card">
                 <a href="<?php echo e(route('formation_messages')); ?>">
                    <h5><i class="fa fa-comment" aria-hidden="true"></i></h5>
                    <h4>Messages Recu</h4>
                 </a>
            </div>
            <div class="card">
                 <a href="<?php echo e(route('formation_cours')); ?>">
                    <h5><i class="fa fa-comment" aria-hidden="true"></i></h5>
                    <h4>Cours Ajouté</h4>
                 </a>
            </div>
        
        </div>
        <div class="col-md-4">
           <div class="card" style="text-align:left;cursor:pointer" id="addBook">
         
                 <h4><i class="fa fa-plus" aria-hidden="true" style="margin-right:10px"></i>Ajouter un Cours</h4>
          
           </div>
        </div>
</div>

<div class="addNewCours" style="display:none;">
<i class="fa fa-times exit" aria-hidden="true"></i>
<iframe src="http://localhost:8000/api/AddBooks?key=MarouaneSH-api" frameborder="0"></iframe>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
        $(document).ready(function(){
                $(".exit").click(function(e){
                      $(this).parent().hide();
                       
                })
                $("#addBook").click(function(){
                    $(".addNewCours").show();
                })
        })
        
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>