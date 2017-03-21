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
        
        </div>
        <div class="col-md-4">
           <div class="card" style="text-align:left">
           <a href="<?php echo e(route('Add_cours')); ?>">
                 <h4><i class="fa fa-plus" aria-hidden="true" style="margin-right:10px"></i>Ajouter un Cours</h4>
           </a>
           </div>
        </div>
</div>

<div class="addNewCours">
<iframe src="http://localhost:8000/api/AddBooks?key=MarouaneSH-api" frameborder="0"></iframe>
</div>

<!--<div class="AddCours">
        <form action="<?php echo e(route('Add_cours')); ?>" id="form_ADDCOURS" method="POST" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <div class="row form-group">
                   <div class="col-md-4">
                        
                   </div>
                   <div class="col-md-6">
                        <h4 >Ajouter un nouveau Cours</h4>
                   </div>
                </div>
                <div class="row form-group">
                   <div class="col-md-4">
                        Nom de Cours
                   </div>
                   <div class="col-md-6">
                        <input type="text" name="name" class="form-control">
                   </div>
                </div>
                <div class="row form-group">
                   <div class="col-md-4">
                        Instructor
                   </div>
                   <div class="col-md-6">
                        <input type="text" class="form-control" value="Admin" name="instructor">
                   </div>
                </div>
                <div class="row form-group">
                   <div class="col-md-4">
                        Only Subscribed
                   </div>
                   <div class="col-md-6">
                        <select name="subscribed" id="" class="form-control" >
                            <option value="0">Oui</option>
                            <option value="1">NON</option>
                        </select>
                   </div>
                </div>
                <div class="row form-group">
                   <div class="col-md-4">
                        Fichier de Cours
                   </div>
                   <div class="col-md-6">
                        <input type="file" name="file">
                        <button style="margin-top:50px;padding:20px">Ajouter</button>
                   </div>
                </div>
        </form>

</div>-->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
        $(document).ready(function(){
                $("#form_ADDCOURS").submit(function(e){
                      
                       
                })
        })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>