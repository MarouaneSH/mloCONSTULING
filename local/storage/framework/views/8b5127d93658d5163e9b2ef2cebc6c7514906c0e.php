<?php $__env->startSection('style'); ?>


  <link href="  <?php echo asset('css/styleRDV.css'); ?>" rel="stylesheet">
  <link href="  <?php echo asset('css/styleFooter.css'); ?>" rel="stylesheet">

  <style>
 
  </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layout.contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <div class="bg">
      <div class="bg-color" style="
                    width: 100%;
                    height: 550px;
                    /* z-index: 55555; */
                    position: absolute;
                    background: rgba(28, 185, 200, 0.33);">
            </div>
      <img src="<?php echo asset('/img/slider18.jpg'); ?>" alt="" style="height: 500px;width:100%;margin-top:50px;">
      <div class="caption">
         <h1 id="title" style="margin-top: 80px;font-size:60px;font-weight:bold;">APPOINTMENT MAKING 
             <p style="font-size:20px;font-weight: 300;"> <span id="cptn">MLO</span> B2B - B2C 
             </p>
          </h1>
       </div>
  </div>
  <div class="desc" style="margin:150px 0">
      <div class="container">
          <h3 style="text-align:center;">Appointment making </h3>
          <hr style="margin-left:48%;">
          <div class="row">
              <p style="text-align:center;margin-left:30px;margin-bottom:200px;margin-top:20px;fon-size:16px" >
                    MLO consulting offers a flexible and multi-purpose appointment-making service. <br>

                    The respect of partnership and the standard work conditions, as well as the selection creterias of our employees which assure you the quality of the service.<br>

                    We operate in the following fields: <br>

                   - Telecommunication and IT solution:  landline and mobile phones, landline and mobile data. <br>
                   - Newtechnologies: mobile apps, web to store. <br>
                   - Renwable enrgy.
                    </p>
          </div>
          <div class="row">
                <div class="nav-services col-md-4 col-sm-5">
                        <ul id="tab-services">
                            <li class="serv-active"> <img src="<?php echo asset('img/flaticon/calendar.png'); ?>" alt=""> <span>PROSPECTING</span></li>
                            <li><img src="<?php echo asset('img/flaticon/clipboard.png'); ?>" alt=""><span>CONFIRMATION</span></li>
                            <li><img src="<?php echo asset('img/flaticon/icon.png'); ?>" alt=""><span>CONCRETIZATION</span></li>
                        </ul>
                        <a class="btn btn-default btn-devis" target="_blank" href="<?php echo url('en/FreeQuote'); ?>"><i class="fa fa-magic left" ></i> Free Quote</a>
                </div>
                <div class="services-info col-md-8 col-sm-7">
                    <div id="services1">
                            <img src="<?php echo asset('img/flaticon/calendar2.png'); ?>" alt="" width="100px">
                            <h2>PROSPECTING</h2>
                            <p style="font-size: 15px;">Action consisting on using marketing tools in order to identify new potential clients and change them into real ones.
                            It is often oposed to costumer loyalty by mistake,
                            each one  completes the other, to practice one of them is to danger the enterprise on an economical and stratigic level.</p>
                            <blockquote style=" border-left: 2px solid #1CB9C8;text-align:left;margin-left: 130px;margin-top: 50px;">
                                <p style="font-size: 15px;">
                                    <h5 style="color:rgb(29, 186, 192)">Our means of prospection:</h5>
                                         <p style="font-size:15px">
                                            - Phoning
                                            <br>  - Emailing Campaigns 
                                            <br>  - Social media
                                        </p>
                                </p>
                            </blockquote>
                          
                            <div class="clearfix"></div>
                    </div>
                      <div id="services2">
                            <img src="<?php echo asset('img/flaticon/clipboard2.png'); ?>" alt="">
                            <h2>CONFIRMATION</h2>
                             <p  style="font-size: 15px;"> Our Team is in charge of prospecting and qualifying your appointments. We take care of your confirmations.</p>

                            <blockquote style=" border-left: 2px solid #1CB9C8;text-align:left;margin-left: 130px;margin-top: 30px;">
                                <p style="font-size: 15px;">
                            
                                    
                                    <h5 style="color:rgb(29, 186, 192)">  Step by step :</h5>
                                    
                                   <p style="font-size:14px">
                                           1- Immediate email confirmation joined by your visit card at the end of the call.
                                        <br>2- Later confirmation 24 hours before every appointmentthrough phone calling and email confirmation.
                                    </p>
                                </p>
                            </blockquote>
                          
                            <div class="clearfix"></div>
                      </div>
                      <div id="services3">
                            <img src="<?php echo asset('img/flaticon/briefcase(1).png'); ?>" width= "100px" alt="">
                            <h2>CONCRETIZATION</h2>
                            <p  style="font-size: 15px;">  Our teams are thoroughly selected to ensure an excellent quality.</p>
                            <blockquote style=" border-left: 2px solid #1CB9C8;text-align:left;margin-left: 130px;margin-top: 30px;">
                                <p style="font-size: 15px;">
                                    <h5 style="color:rgb(29, 186, 192)"> The Stage is set. Go with confidence.</h5>
                                   <p style="font-size:15px">
                                                - Targeted prospecting
                                        <br>  - Qualified appointments
                                        <br>  -  Double confirmation
                                  </p>
                                </p>
                            </blockquote>
                          
                            <div class="clearfix"></div>
                      </div>

               </div>
          </div>
      </div>
  </div>
 

<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<script src="<?php echo asset('js/typed.min.js'); ?>"> </script>

<script>
    $(document).ready(function(){
        $("#cptn").typed({
             strings: ["IT SOLUTIONS", "NEW TECHNOLOGIES"],
                typeSpeed: 20,
                backDelay: 1000,
                loop: true
        });



        $('#tab-services li').eq(0).click(function(){
              removeClassActive();
            $(this).addClass('serv-active');
            $('#services2').hide();
            $('#services3').hide();
            $('#services1').show();
        });

         $('#tab-services li').eq(1).click(function(){
            removeClassActive();
            $(this).addClass('serv-active');
            $('#services2').show();
            $('#services3').hide();
            $('#services1').hide();
        });

         $('#tab-services li').eq(2).click(function(){
             removeClassActive();
            $(this).addClass('serv-active');
            $('#services2').hide();
            $('#services3').show();
            $('#services1').hide();
        });

    })



    function removeClassActive()
    {
        $("#tab-services li").each(function(){
            $(this).removeClass("serv-active");
        })
      

    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>