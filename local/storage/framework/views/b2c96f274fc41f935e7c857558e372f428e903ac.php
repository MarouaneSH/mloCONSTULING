<?php echo $__env->make('layout.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
 <div class="row menu">
       <div class="container">
            <div class="col-md-6" style="text-align:right;border-right: solid">
                <h3>
                    <i class="fa fa-camera" aria-hidden="true"></i>
                    <a href="<?php echo e(url('/DemandeDevis')); ?>">Get Your Own 360 Vision</a>
               </h3>  
            </div>
            <div class="col-md-6">             
                <h3>
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                    <a href="">Photograph RDV</a> 
                </h3>  
            </div>
       </div>
   </div>

      <div class="bg-video">
          <video  autoplay loop>
             <source src="img/Homepage.mp4" type="video/mp4">
          </video>
          <div class="overlay"></div>
           <div class="desc">
               <h1 style=" font-size: 80px;">MLO-VR</h1>
               <p>Visites Virtuelles Google inside View</p>
             <a href="<?php echo e(url('/DemandeDevis')); ?>"><button class="btn btn-primary">Demander Un Devis</button></a>   
          </div>
          <img src="img/logo-trusted.png" alt="">
      </div>
      
         <div class="container">
             <div class="row">
                <div class="col-md-4">

                </div>
             </div>
          </div>
 <?php $__env->stopSection(); ?>         
<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>