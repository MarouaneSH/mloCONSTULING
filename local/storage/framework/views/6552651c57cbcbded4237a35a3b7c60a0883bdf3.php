

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
     <link href="  <?php echo asset('css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="  <?php echo asset('font-awesome/css/font-awesome.min.css'); ?>">
        <link href="css/Admin.css" rel="stylesheet">

</head>
<body>
    <div class="nav-admin col-md-2">
        <ul>
            <li>Liste des demandes</li>
        </ul>
    </div>
    <div class="col-md-3"></div>
    <div class="container col-md-9">

        <?php $__currentLoopData = $demande; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $demand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="panel">
                    <div class="panel-header">
                            <h5>
                                Raison : <?php echo e($demand->raison); ?>

                                <button type="" class="pull-right btnshow"  value="<?php echo e($demand->id); ?>">Show more</button>
                            </h5>
                            <h5>Nom : <?php echo e($demand->nom); ?>   </h5>
                        
                            <div class="panel-date pull-right">
                              Date :   <?php echo e($demand->date); ?> 
                            </div>
                            <div class="clearfix"></div>
                    </div>
                    <div class="panel-msg">
                        Message : <?php echo e(str_limit($demand->message,40)); ?> 
                    </div>
                </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <?php echo $demande->links(); ?>

          <div class="test">
        <div class="row">
            <div class="col-md-3">
                    <h5>Name</h5>
            </div>
            <div class="col-md-9">
                    <h5><span>Marouane</span></h5>
            </div>
        </div>

    </div>
  
   
    </div>

    <div class="panel-information">
          <label for="">
              Raison : <span id="raison"></span>
           </label><br>

           <label for="">
               Nom :<span id="nom"></span>
           </label><br>

            <label for="">
                email : <span id="email">
             </span></label><br>

             <label for="">
                 Telephone  : <span id="tel"></span>
            </label><br>

            <label for="">
                 Ligne Mobile : <span id="tel2"></span>
            </label><br>
            <label for="">
                 Activite : <span id="activite"></span>
            </label><br>
            <label for="">
                 Message : <span id="mssage"></span>
            </label><br>
            <i class="fa fa-times" aria-hidden="true"></i>

    </div>



          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script>
          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
             $(".btnshow").click(function(e){
                
                var url = "getDemande/"+ $(this).val();
                $.get(url,function(data){
                    $("#raison").html(data.raison);
                    $("#nom").html(data.nom);
                    $("#email").html(data.email);
                    $("#poste").html(data.poste);
                    $("#tel").html(data.tel1);
                     $("#tel2").html(data.tel2);
                      $("#activite").html(data.activite);
                       $("#mssage").html(data.message);
                    $(".panel-information").show();
                    
                })
                //  $.ajax({
                //      type:"POST",
                //      url:"Admin",
                //     data:$(this).val(),
                //      sucess:function(data){
                //          alert("sdsdsdds");
                //      },
                //      error:function(){
                //          alert("ssss");
                //      }
                //  })
                 
             })
             $(".panel-information .fa").click(function(){
                  $(".panel-information").hide();
             })
          
          </script>

   
</body>
</html>
  

