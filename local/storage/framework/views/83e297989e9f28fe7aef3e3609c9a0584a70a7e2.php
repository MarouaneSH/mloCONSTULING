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
             <p style="font-size:20px;font-weight: 300;"> <span id="cptn">Développer vos idées</span> Devient facile. 
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
                    Comprendre le comportement d’achat par lequel le consommateur effectue une recherche d’informations sur Internet avant d’aller effectuer son achat en point de vente. 
                    Cette  recherche peut porter sur le produit ou directement sur la localisation du point de vente le plus proche. L’objectif étant de mieux mesurer le  ROPO ou ROBO.

                   <br> Les grands domaines du référencement naturel ou SEO sont :
                    <br>  – Les éléments techniques ou d’infrastructures (nom de domaine, optimisation crawl, conformité code, etc.)
                    <br>  – Les éléments d’optimisations de contenus des pages (on-page SEO)
                    <br>  – Le développement et l’optimisation de liens externes (backlinks)
                    
                          </p>
          </div>
          <div class="row">
                <div class="nav-services col-md-4 col-sm-5">
                        <ul id="tab-services">
                            <li class="serv-active"> <img src="<?php echo asset('img/flaticon/line-chart (1).png'); ?>" alt=""> <span>SEO</span></li>
                            <li><img src="<?php echo asset('img/flaticon/world-wide-web.png'); ?>" alt=""><span>Développement web</span></li>
                            <li><img src="<?php echo asset('img/flaticon/mobile-app-developing (1).png'); ?>" alt=""><span>Application mobile</span></li>
                        </ul>
                        <a class="btn btn-default btn-devis" href="<?php echo route('devis'); ?>"><i class="fa fa-magic left" ></i> DEVIS GRATUIT</a>
                </div>
                <div class="services-info col-md-8 col-sm-7">
                    <div id="services1">
                            <img src="<?php echo asset('img/flaticon/analytics.png'); ?>" alt="" width="100px">
                            <h2>SEO</h2>
                            <p style="font-size: 15px;">La maîtrise du SEO nécessite des  compétences techniques et marketing et une activité de veille continue pour faire face aux évolutions incessantes des algorithmes. Elle comporte évidemment de très nombreux aspects techniques, mais le rôle de la stratégie et des « bonnes idées » SEO ne doit pas être sous-estimé. </p>
                            <blockquote style=" border-left: 2px solid #1CB9C8;text-align:left;margin-left: 130px;margin-top: 50px;">
                                <p style="font-size: 15px;">
                                    <h5 style="color:rgb(29, 186, 192)">Les avantages du SEO : </h5>
                                         <p style="font-size:15px">
                                            - Livre un flux continu de trafic ciblé
                                           <br> - SEO génère du trafic qui peut être converti
                                            <br>- SEO vous aide à croître votre business
                                        </p>
                                </p>
                            </blockquote>
                          
                            <div class="clearfix"></div>
                    </div>
                      <div id="services2">
                            <img src="<?php echo asset('img/flaticon/browser.png'); ?>" alt="" width="100px">
                            <h2> Développement  web</h2>
                            <p style="font-size: 15px;"> 
                               Dans le secteur de l’informatique, le développeur web est un métier incontournable. <br>
                                Faites-nous confiance pour la réalisation technique et du développement informatique de vos sites Internet.
                              </p>
                
                          <blockquote style=" border-left: 2px solid #1CB9C8;text-align:left;margin-left: 130px;margin-top: 80px;">
                                <p style="font-size: 15px;">
                                    <h5 style="color:rgb(29, 186, 192)"> Les compétences de nos programmeurs web :</h5>
                                    
                                   <p style="font-size:14px">
                                              - Bonne connaissance des languages : PHP, Java, SQL, ASP, etc. 
                                            <br> - La maîtrise des CMS (content management system) et du Framework sont aussi incontournables.
                                        </p>
                                </p>
                            </blockquote>
                          
                            <div class="clearfix"></div>
                      </div>
                      <div id="services3">
                            <img src="<?php echo asset('img/flaticon/smartphone.png'); ?>" width= "100px" alt="">
                            <h2>Applications Mobiles </h2>
                            <p  style="font-size: 15px;">  Le Web to store repose essentiellement et de plus en plus sur les applications mobiles qui se sont développées grâce au smartphone et tablettes.</p>
                            <blockquote style=" border-left: 2px solid #1CB9C8;text-align:left;margin-left: 130px;margin-top: 30px;">
                                <p style="font-size: 15px;">
                                    <h5 style="color:rgb(29, 186, 192)"> Parler nous de vos idées, nous les convertissons en applications.</h5>
                                   <p style="font-size:15px">
                                               - De 2009 à 2015, le nombre de téléchargements d'applications mobiles gratuites a atteint  167 milliards. 
                                               <br>- En 2017, ce chiffre pourra atteindre 253 milliards.

                                                <br>- De 2011 à 2015, les applications mobiles ont généré un revenu de 45,37 milliards de dollars. 
                                               <br> - En 2017, les revenus devraient atteindre les 76,5 milliards de dollars.
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

        var width = $(window).width();
   

        //if Phone
        if(width > 800)
        {
                $("#cptn").typed({
                    strings: [" Développer vos idées ", " Etre bien référencé "],
                        typeSpeed: 20,
                        backDelay: 1000,
                        loop: true
                });
        }


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