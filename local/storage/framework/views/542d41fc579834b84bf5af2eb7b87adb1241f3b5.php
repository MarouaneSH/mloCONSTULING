<?php $__env->startSection('style'); ?>

 <link href="<?php echo asset('css/registerform.css'); ?>" rel="stylesheet">
 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layout.contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- Top content -->
			<div class="content ">
                <div class="container ">
                    <div class="row info">
                        <div class="col-sm-7 text" style="margin-top:100px;">
                            <h1>Request a Costumized  Quote</h1>
                            <div class="description">
                            	<p>
                                So as to provide you with a personilised quotation, please do fill this form.
								
	                           	</p>
                            </div>
                            <div class="top-big-link">
                            	
                            	
                            </div>
							<center>
							<div class="mlo-consult">
							
								<img src="<?php echo asset('img/logo2.png'); ?>" alt="">
									<h3 style="font-size:15px;color: #8064a2;">Your projects partner</h3>
									<p>+41 22 510 21 14</p>
									<p>contact@mlo-consulting.com</p>
							</div>
							</center>
                        </div>
						
							
					
                        <div class="col-sm-5 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h4>Request a Costumized  Quote </h4>
                            		<p>Please do fill this form.</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-pencil"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
					    
							  <div class="alert alert-danger" id="errors-msg">
							
							  </div>			
							
			                    <form role="form" action="<?php echo e(url('DemandeDevis')); ?>" method="POST" class="registration-form" id="form-devis" enctype="multipart/form-data">
										<?php echo e(csrf_field()); ?>

			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-first-name">Raison sociale</label>
			                        	<input type="text" name="raison" placeholder="Company name..." class="form-first-name form-control" id="form-first-name" value="<?php echo e(old('raison')); ?>">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-last-name">Manager's Name</label>
			                        	<input type="text" name="nom" placeholder="Manager's Name..." class="form-last-name form-control" id="form-last-name" value="<?php echo e(old('nom')); ?>">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-email">Position Held</label>
			                        	<input type="text" name="poste" placeholder="Position Held..." class="form-email form-control" id="form-email" value="<?php echo e(old('poste')); ?>">
			                        </div>
                                    <div class="form-group">
			                        	<label class="sr-only" for="form-email">Adresse Email</label>
			                        	<input type="text" name="email" placeholder="Email Adress..." class="form-email form-control" id="form-email" value="<?php echo e(old('email')); ?>">
			                        </div>

									 <div class="form-group">
			                        	<label class="sr-only" for="form-email">Ligne Mobile directe</label>
			                        	<input type="text" name="tel1" placeholder="Ligne Mobile directe..." class="form-email form-control" id="form-email" value="<?php echo e(old('tel1')); ?>">
			                        </div>

									 <div class="form-group">
			                        	<label class="sr-only" for="form-email">Landline phone number</label>
			                        	<input type="text" name="tel2" placeholder="Landline phone number..." class="form-email form-control" id="form-email" value="<?php echo e(old('tel2')); ?>">
			                        </div>

									 <div class="form-group activite">
			                        	<label class="sr-only" for="form-email">Votre activité</label>
											<select name="select">
												  <option disabled selected>Activity </option>
												<option value="Solution IT">Solution IT</option> 
												<option value="Google Stre View Trusted">Google Street View Trusted</option>
												<option value="Photovoltaique">Photovoltaic</option>
												<option value="Apps for Business">Applications for Business</option>
											</select>
			                        </div>

									<div class="form-group solutions">
										<label for="">Choix de solution</label> <br>
										<label><input type="radio" name="solution" value="RDV"> Appointment-making</label> <br>
										<label><input type="radio" name="solution" value="televente"> Telemarketing</label><br>
										<label ><input type="radio" name="solution" value="formation"> Professional Training</label>
									</div>

			                        <div class="form-group">
			                        	<label class="sr-only" for="form-about-yourself">Message</label>
			                        	<textarea name="message" placeholder="Message..." 
			                        				class="form-about-yourself form-control" id="form-about-yourself"></textarea>
			                        </div>

									<div class="form-group">
										<label for="document">Attach document</label>
										<!--<input type="file" name="document">-->
										<span class="btn btn-default btn-file" style="margin-left:8px">
												Attach document <input type="file" name="document">
											</span>
									</div>
			                        <button type="submit" style= "margin-top: 20px;" class="btn btn-submit ">Send</button>
									
							    </form>
		                    </div>

							
                        </div>
						
                    </div>
                </div>
			</div>
		
				<div class="send-email">
				
						<div class="loading-msg">

							<!--Loading SVG-->
							<svg width='120px' height='120px' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="uil-ring-alt"><rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect><circle cx="50" cy="50" r="40" stroke="#ececfc" fill="none" stroke-width="10" stroke-linecap="round"></circle><circle cx="50" cy="50" r="40" stroke="#1cb9c8" fill="none" stroke-width="6" stroke-linecap="round"><animate attributeName="stroke-dashoffset" dur="2s" repeatCount="indefinite" from="0" to="502"></animate><animate attributeName="stroke-dasharray" dur="2s" repeatCount="indefinite" values="150.6 100.4;1 250;150.6 100.4"></animate></circle></svg>

						</div>
						 <div class="send-msg">	 
						 		<i class="fa fa-times" aria-hidden="true" id="exit-send" onclick="ExitSend()" style="cursor:pointer"></i>
								<h2>Votre demande a été envoyer avec succès</h2>
								<p>Nous avons bien reçu votre demande , nous reviendrons vers vous dans les plus Brefs délais.</p>	
								<p> <a href="/">Cliquez ici</a> pour retourner à la page d'accueil.</p>
						</div>
				</div>
	
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<script>
		$(document).ready(function(){
			$.ajaxSetup({
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
				});
				//    var data = new FormData($("#form-devis"));
				// 	   console.log(data);


				$("#form-devis").submit(function(e){
					$("#errors-msg").html("");
					e.preventDefault();		
					$.ajax({
						type:"POST",
						url:"FreeQuote",
						beforeSend:function(){
							$(".send-email").show();
							$(".loading-msg").show();
						},
						data: $(this).serialize(),
						success:function(data){
							if(data.success==false)
							{ 
								//Scroll to div ERRORS
								$(window).scrollTop($('.form-top').offset().top);
								//SHOW ERRORS
									$("#errors-msg").show();
									$.each(data.errors,function(index , error){
										$("#errors-msg").append("<li>"+error+"</li>");
									});
									$(".send-email").hide();
							}
							else
							{
								$("#errors-msg").hide();
								$(".send-email").show();
								$(".loading-msg").hide();
								$(".send-msg").show();

							}
						},
						error:function(xhr, status, error){
							console.log(error.Message);
							
						 alert("Something Wrong , Please Contact Developer to resolve this Problem");
						}
					})
				});



				
			})

			function ExitSend()
			{
				$(".send-email").hide();
			}
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>