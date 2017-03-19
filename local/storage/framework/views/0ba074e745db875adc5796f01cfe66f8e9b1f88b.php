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
      <img src="<?php echo asset('/img/thomas-lefebvre-3950.jpg'); ?>" alt="" style="height: 500px;width:100%;margin-top:50px;">
      <div class="caption">
         <h1 id="title" style="margin-top: 80px;font-size:60px;font-weight:bold;">WEB TO STORE
             <p style="font-size:20px;font-weight: 300;"> <span id="cptn">MLO</span> Becomes easy. 
             </p>
          </h1>
       </div>
  </div>
  <div class="desc" style="margin:150px 0">
      <div class="container">
          <h3 style="text-align:center;">Web To Store</h3>
          <hr style="margin-left:48%;">
          <div class="row">
              <p style="text-align:center;margin-left:30px;margin-bottom:200px;margin-top:20px;fon-size:16px" >
                    To become familiar with the behavior of purchase by which the consumer performs a search for information on the Internet before performing his purchase in a point of sale.
                    This research can focus on the product or directly on the location of the closest point of sale. The idea is to better measure the ROPO or ROBO.
                    <br>The major areas of natural referencing or SEO are: <br>
                    - The technical elements or of infrastructure (Domain Name, optimization, crawl, compliance code, etc.)
                    <br>  - The elements of optimizations of the contents of the pages (one-page SEO) - the development and optimization of external links (backlinks)  
             </p>
                 </div>
          <div class="row">
                <div class="nav-services col-md-4 col-sm-5">
                        <ul id="tab-services">
                            <li class="serv-active"> <img src="<?php echo asset('img/flaticon/line-chart (1).png'); ?>" alt=""> <span>SEO</span></li>
                            <li><img src="<?php echo asset('img/flaticon/world-wide-web.png'); ?>" alt=""><span>Web Development</span></li>
                            <li><img src="<?php echo asset('img/flaticon/mobile-app-developing (1).png'); ?>" alt=""><span>Mobile Applications</span></li>
                        </ul>
                        <a class="btn btn-default btn-devis" target="_blank" href="<?php echo url('en/FreeQuote'); ?>"><i class="fa fa-magic left" ></i> Free Quote</a>
                </div>
                <div class="services-info col-md-8 col-sm-7">
                    <div id="services1">
                            <img src="<?php echo asset('img/flaticon/analytics.png'); ?>" alt="" width="100px">
                            <h2>SEO</h2>
                            <p style="font-size: 15px;">The mastery of the SEO requires technical and marketing skills as well as continued surveillances to face the incessant developments of algorithms. It has evidently very many technical aspects, but the role of the strategy and of the "good ideas" SEO must not be under-estimated. </p>
                            <blockquote style=" border-left: 2px solid #1CB9C8;text-align:left;margin-left: 130px;margin-top: 50px;">
                                <p style="font-size: 15px;">
                                    <h5 style="color:rgb(29, 186, 192)">SEO advantages : </h5>
                                         <p style="font-size:15px">
                                            - Delivers a continuous  flow of targeted traffic .
                                            <br>  - Seo generates traffic that can be converted 
                                            <br>  - Seo Helps you grow your business 
                                        </p>
                                </p>
                            </blockquote>
                          
                            <div class="clearfix"></div>
                    </div>
                      <div id="services2">
                            <img src="<?php echo asset('img/flaticon/browser.png'); ?>" alt="" width="100px">
                            <h2>Web Development</h2>
                            <p style="font-size: 15px;">
                                    In the area of computer engineering, the web developing is an essential profession . Trust us with the realization and the computing development of your websites. 
                                 </p>
                           <blockquote style=" border-left: 2px solid #1CB9C8;text-align:left;margin-left: 130px;margin-top: 30px;">
                                
                                <p style="font-size: 15px;">
                                    <h5 style="color:rgb(29, 186, 192)">  Our Web Programmers Skills : </h5>
                                    
                                   <p style="font-size:14px">
                                         - Knowledge of languages: PHP, Java, SQL, ASP, etc. 
                                        <br> - The control of CMS (Content Management System) and of the Framework .
                                    </p>
                                </p>
                            </blockquote>
                          
                            <div class="clearfix"></div>
                      </div>
                      <div id="services3">
                            <img src="<?php echo asset('img/flaticon/smartphone.png'); ?>" width= "100px" alt="">
                            <h2>Mobile Applications</h2>
                            <p  style="font-size: 15px;">  The Web to store is essentially based on mobile applications that are developed through Smartphone and Ipads.</p>
                            <blockquote style=" border-left: 2px solid #1CB9C8;text-align:left;margin-left: 130px;margin-top: 30px;">
                                <p style="font-size: 15px;">
                                    <h5 style="color:rgb(29, 186, 192)"> Share your ideas, and we will make them into applications.</h5>
                                   <p style="font-size:15px">
                                            - 2009-2015: the number of downloads of Free mobile applications has      reached $167 billion.
                                            <br>- In 2017, this figure may reach 253 billion.
                                             <br>- 2011-2015, the mobile applications have generated an income of 45.37 billion.
                                             <br>- In 2017, revenues should reach 76.5 billion.
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
             strings: [" Owning better ranking ", " Developing your idea "],
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