<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/cssFormation.css')); ?>">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container col-md-9">
    <div class="row card card-msg">
        <h4>Listes Des Messages recu</h4>
    </div>
    <div class="row">
   
        <?php $__currentLoopData = json_decode($messages,true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card card-msg">
                    <input type="hidden" value="<?php echo e($message['id']); ?>" class="msg-id">
                    <input type="hidden" value="<?php echo e($message['title']); ?>" class="msg-title">
                    <input type="hidden" value="<?php echo e($message['comment']); ?>" class="msg-comment">
                    <input type="hidden" value="<?php echo e($message['date_message']); ?>" class="msg-date">
                    <h5>Sujet :  <?php echo e($message['title']); ?>  </h5>
                    <h5>Date : <?php echo e($message['date_message']); ?></h5>  
                    <h5>Message : <?php echo e(str_limit($message['comment'],10)); ?> </h5>
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
  
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        
    </div>  
</div>
<div class="show-msg-content">
     <i class="fa fa-times exit" aria-hidden="true" style="    color: white;
        font-size: 30px;
        position: absolute;
        right: 30px;
        cursor: pointer;
        top: 10px;"></i>
    <div class="row">
        <div class="col-md-3">
            Nom : 
        </div>
        <div class="col-md-6" id="name">
            Marousdddsane
        </div>
    </div>
     <div class="row">
        <div class="col-md-3">
            Telephone 
        </div>
        <div class="col-md-6" id="telephone">
                dfdfs
        </div>
    </div>
    <div class="row">
        <div class="col-md-3" >
            Email 
        </div>
        <div class="col-md-6" id="email">
                ddqsqsdqs@gmail.com
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            Date Message 
        </div>
        <div class="col-md-6" id="date">
                15/11/19
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            Sujet
        </div>
        <div class="col-md-6" id="sujet">
                xx
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            Message
        </div>
        <div class="col-md-6" id="message">
                dsds
        </div>
    </div>

</div>

<div class="loading" style="top:25%k;position:fixed">
                        
                                
                                <svg width='120px' height='120px' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="uil-squares"><rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect><rect x="15" y="15" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.0s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="40" y="15" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.125s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="65" y="15" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.25s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="15" y="40" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.875s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="65" y="40" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.375" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="15" y="65" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.75s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="40" y="65" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.625s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="65" y="65" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.5s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect></svg>

                                
                </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function(){
        $(".exit").click(function(e){
              $(this).parent().hide();   
            
                })

     $(".card-msg").click(function(){
      
        var title= $(this).children('.msg-title').val();
        var date= $(this).children('.msg-date').val();
        var Message= $(this).children('.msg-comment').val();
         console.log(title);
         $.ajax({
             url:"<?php echo e(route('formation_get_users','1')); ?>",
             beforeSend:function()
             {
                $(".loading").show();
             },
             success:function(data){
                 $("#name").html(data.user.name);
                 $("#telephone").html(data.user.telephone);
                 $("#email").html(data.user.email);
                 $("#date").html(date);
                  $("#sujet").html(title);
                  $("#message").html(Message);
             

                 $(".show-msg-content").show();
                  $(".loading").hide();
        
             },
             error:function(){
                 alert("dssdsdd");
             }
         })
     })
})


</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>