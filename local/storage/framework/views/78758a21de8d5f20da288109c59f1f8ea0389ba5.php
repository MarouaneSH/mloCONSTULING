<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/cssFormation.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container col-md-9">

<table class="table table-condensed table-cours">
            <thead>
                <tr>
                    <th>Nom de cours</th>
                    <th>Enseigant</th>
                    <th>Only Subscribers</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = json_decode($cours); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="name"><?php echo e($cour->cours_name); ?></td>
                        <td class="instructor"><?php echo e($cour->Instructor); ?></td>
                        <input type="hidden"  value="<?php echo e($cour->only_subscriber); ?>" class="subscribed">
                        <td >
                        
                         <?php if($cour->only_subscriber == "1"): ?>
                            Oui
                         <?php else: ?>
                          NON   
                         <?php endif; ?>  
                        </td>
                        <td>
                            <input type="hidden" value="<?php echo e($cour->id); ?>">
                            <i class="fa fa-pencil-square-o edit" aria-hidden="true"></i>
                            <i class="fa fa-times-circle-o remove" aria-hidden="true"></i>                  
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </tbody>
        </table>

        <div class="loading">
                        
                                
                                <svg width='120px' height='120px' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="uil-squares"><rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect><rect x="15" y="15" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.0s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="40" y="15" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.125s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="65" y="15" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.25s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="15" y="40" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.875s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="65" y="40" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.375" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="15" y="65" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.75s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="40" y="65" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.625s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="65" y="65" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.5s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect></svg>

                                
        </div>

        <div class="edit-book">
           <i class="fa fa-times exit" aria-hidden="true"></i>
            <iframe src="http://localhost:8000/api/ModifyBooks?id=12" frameborder="0">
            
            </iframe>
        </div>
                
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script>
$(document).ready(function(){

    $(".exit").click(function(e){
              $(this).parent().hide();   
              $(".edit-book").hide();  
                })

    $(".remove").click(function(){
        if(confirm("Vous Voulez Vraiment Supprimer ce cours ?"))
        {
            $(this).parent().parent().hide();
            $.ajax({
                url:"<?php echo e(route('formation_cours_delete')); ?>",
                data:{ id : $(this).parent().children('input').val() },
                beforeSend:function()
                {
                    $(".loading").show();
                },
                success:function(data){
                    
                     alert("Cours a été supprimer avec success");
                     $(".loading").hide();
                    
                },
                error:function()
                {
                    alert("un erreur s'est produit ");
                }
            })
        }

        
    })

    $(".edit").click(function(){
        
          name=  $(this).parent().parent().children('td.name').html(); 
          instructor = $(this).parent().parent().children('td.instructor').html(); 
          subscription =  $(this).parent().parent().children('.subscribed').val(); 
          id =$(this).parent().children('input').val() ;

        //Most change after uplouad to ftp
        url = "http://localhost:8000/api/ModifyBooks?id="+id+"&name="+name+"&instructor="+instructor+"&subscription="+subscription;
      
        $(".edit-book").show();
        $(".edit-book iframe").attr('src',url);
        
    })


})

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>