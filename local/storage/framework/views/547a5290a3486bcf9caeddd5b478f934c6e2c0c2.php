<?php $__env->startSection('style'); ?>
<link href="css/stylemlo.css" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
 <div class="row menu">
      
            <div class="col-md-3 " style="text-align:center;border-right: solid">
                <h4>
             
                    <a href="<?php echo e(url('/DemandeDevis')); ?>">SOLUTIONS TÉLÉCOM</a>
               </h4>  
            </div>
             <div class="col-md-3 text-center" style="text-align:center;border-right: solid">
                <h4>
                  
                    <a href="<?php echo e(url('/DemandeDevis')); ?>">ÉNERGIE RENOUVLABLES</a>
               </h4>  
            </div>
            <div class="col-md-3" style="text-align:center;border-right: solid">
                <h4>
                  
                    <a href="<?php echo e(url('/DemandeDevis')); ?>">APPLICATION FOR BUSINESS</a>
               </h4>  
            </div>
            <div class="col-md-3">             
                <h4>
               
                    <a href="">FORMATIONS PROFESSIONAL</a> 
                </h4>  
            </div>
       </div>
  

      <div class="container ">
          <div class="row description">
              <H2>MLO Consulting</H2>
              <span>Partenaire de vos projets</span><br><br><br>
              <div class="map">

                    <img src="img/map.png" class="img-responsive" >
                    
                    <!--<button>Contactez Nous</button>-->

              </div>
          </div>
          <div class="row solutions">
              <h2><span> Non Solutions </h2>
              <p>Nous intervenons dans tous les domaines de Télécommunication, et nouvelles Technologies.
                Nous comptons à ce jours plusieurs partenaires.
                Leurs expertises, ainsi que celle de nos collaborateurs, nous permettent de vous fournir une prestation de qualité irréprochable.
             </p>
          </div>
      </div>
 <?php $__env->stopSection(); ?>         
<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>