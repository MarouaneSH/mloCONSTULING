<?php $__env->startSection('style'); ?>

 <link href="css/registerform.css" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

        <!-- Top content -->
			<div class="content ">
                <div class="container ">
                    <div class="row">
                        <div class="col-sm-7 text" style="margin-top:100px;">
                            <h1>Créer Votre Visites Virtuelles 360</h1>
                            <div class="description">
                            	<p>
                                    Les Visites virtuelles permettent à votre business d'être plus accessible, à n'importe quel moment et n'importe où dans le monde.

	                           	</p>
                            </div>
                            <div class="top-big-link">
                            	<a class="btn btn-link-1" href="#">Voir Des Exemples</a>
                            	<a class="btn btn-link-2" href="#">Pricing</a>
                            </div>
                        </div>
						
							
					
                        <div class="col-sm-5 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Demander un Devis </h3>
                            		<p>Remplissez le formulaire ci-dessous pour obtenir un accès instantané</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-pencil"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
					    	<?php if(count($errors)>0): ?>
							  <div class="alert alert-danger">
								  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li><?php echo e($error); ?></li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							  </div>			
							<?php endif; ?>
			                    <form role="form" action="<?php echo e(url('registerClient')); ?>" method="POST" class="registration-form">
										<?php echo e(csrf_field()); ?>

			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-first-name">Votre Nom</label>
			                        	<input type="text" name="name" placeholder="Votre Nom..." class="form-first-name form-control" id="form-first-name" value="<?php echo e(old('name')); ?>">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-last-name">Votre Prenom</label>
			                        	<input type="text" name="prenom" placeholder="Votre Prenom..." class="form-last-name form-control" id="form-last-name" value="<?php echo e(old('prenom')); ?>">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-email">Email</label>
			                        	<input type="text" name="email" placeholder="Email..." class="form-email form-control" id="form-email" value="<?php echo e(old('email')); ?>">
			                        </div>
                                    <div class="form-group">
			                        	<label class="sr-only" for="form-email">Télephone</label>
			                        	<input type="text" name="tel" placeholder="Télephone..." class="form-email form-control" id="form-email" value="<?php echo e(old('tel')); ?>">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-about-yourself">A Propos De Vous</label>
			                        	<textarea name="Message" placeholder="A Propos De Vous..." 
			                        				class="form-about-yourself form-control" id="form-about-yourself"></textarea>
			                        </div>
			                        <button type="submit" class="btn btn-submit">Demander Un Devis</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
			</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>