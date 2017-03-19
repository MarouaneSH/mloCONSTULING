 <?php
             $english = false;
            if(Request::is("en*"))
            {
              $english = true;
            }
 ?>

<footer >
  <div id="msg-footer" style="display:none;position:fixed;top:20%;z-index:9999;background-color:#1CB9C8;padding:50px;margin:0 auto;width:50%;left:0;right:0;height:40vh;text-align:center">
      <h3>Vore Message a été envoyer avec sucess</h3>
  </div>
    <div class="container">
        <div class="row">
                <div class="col-md-4">
                    <h3>About us</h3>
                    <hr>
                    <div class="clearfix"></div>
                    <?php if($english==true): ?>
                           <p>MLO Consulting Firm, operating in the offshore departement
                           telemarketing, web to store, and professional training.</p>
                    <?php else: ?>
                           <p>MLO CONSULTING, cabinet de conseil, opérant dans les opérations offshores : Télémarketing, Web to store, formation professionnelle.</p>
                    <?php endif; ?>
                    <ul>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Suisse - Maroc</li> 
                        <li><i class="fa fa-envelope" aria-hidden="true"></i> contact@mlo-consulting.com</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> +41 22 510 21 14 <br> <span style="margin-left: 26px;">+212 5 28 22 19 55</span> </li>
                    </ul>
                </div>
                <div class="col-md-4 about" style="    padding-left: 80px;">
                    <h3>Links</h3>
                    <hr>
                    <div class="clearfix"></div>
                    <ul>
                        <?php if($english ==true): ?>
                                <li> <a href="<?php echo url('/en'); ?>">HOME</a></li>
                                <li> <a href="<?php echo url('/en'); ?>#services">SERVICES</a></li>
                                <li><a href="<?php echo url('/en'); ?>#cases">CASES</a></li>
                                <li><a href="<?php echo url('/en'); ?>#mission">MISSION</a></li>
                                <li><a href="<?php echo url('/en'); ?>#About">PORTFOLIO</a></li>
                          <?php else: ?>
                                  <li> <a href="<?php echo url('/'); ?>">HOME</a></li>
                                <li> <a href="<?php echo url('/'); ?>#services">SERVICES</a></li>
                                <li><a href="<?php echo url('/'); ?>#cases">CASES</a></li>
                                <li><a href="<?php echo url('/'); ?>#mission">MISSION</a></li>
                                <li><a href="<?php echo url('/'); ?>#About">PORTFOLIO</a></li>
                         <?php endif; ?>
                    </ul>
                </div>
                <div class="col-md-4">
                    <?php if($english == true): ?>
                        <h3>More</h3>
                    <?php else: ?>
                        <h3>Plus d'informations</h3>
                    <?php endif; ?>
                    
                    <hr>
                     <?php if($english ==true): ?>
                        <input type="text" class="form-control" id="usr" placeholder="Your name" style="margin-bottom:20px;">
                        <input type="text" class="form-control" id="usr" placeholder="Email address">
                        <button type="button" class="" style="margin-top:20px;" id="btn-footer">Send</button>

                     <?php else: ?>
                      <input type="text" class="form-control" id="usr" placeholder="Votre Nom" style="margin-bottom:20px;">
                      <input type="text" class="form-control" id="usr" placeholder="Email Adresse">
                      <button type="button" class="" style="margin-top:20px;" id="btn-footer">Envoyer</button>

                     <?php endif; ?>
                    
                    
                </div>
        </div>
        <div class="row copyright">
            <hr>
            <div class="col-md-5">
                     <h5>&copy <?php echo date("Y"); ?> mlo-Consulting.com</h5>
            </div>
            <div class="col-md-5">
                    <div class="social">
                        <a target="_blank" href="https://www.facebook.com/MLOConsulting"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> 
                        <a target="_blank" href="https://plus.google.com/u/0/110662606036206172180/about"><i class="fa fa-google-plus-square" aria-hidden="true"></i> </a>
                        <a target="_blank" href="https://www.linkedin.com/company/mlo-consulting"> <i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
            
                    </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</footer>
