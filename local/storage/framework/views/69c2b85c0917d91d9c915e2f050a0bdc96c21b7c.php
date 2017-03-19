<?php $__env->startSection('style'); ?>
<link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
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

      <img src="<?php echo asset('/img/20882.jpg'); ?>" alt="" style="height: 500px;width:100%;margin-top:50px;">
      <div class="caption">
         <h1 id="title" style="margin-top: 80px;font-size:60px;font-weight:bold"> FORMATION PROFESSIONNELLE 
              <p style="font-size:20px;font-weight:400"> <span id="cptn">Technique de vente</span> Devient facile.</p>
        </h1>
       </div>
  </div> 
  <div class="desc" style="margin:150px 0">
      <div class="container">
          <h3 style="text-align:center;">Catalogue des Formations</h3>
          <hr style="margin-left:45%;width: 120px;">
          <div class="row">
              <p style="text-align:center;margin-left:30px;margin-bottom:200px;margin-top:20px;fon-size:16px" >
                  <br>
                         On sait tous qu'aujourd'hui "La Formation Professionnelle", est devenu incontournable.
                        La sphère économique change et les priorités des dirigents changent aussi. <br>
                        La production de leurs équipes au front, est devenu l'élément à développer pour le rentabiliser de plus en plus.
                        Le recours à la formation professionnelle pour assurer la monté en compétence du service commercial s'est fait automatiquement.
                        Vous aussi, faites accompagner vos équipes de production.
                        Notre expertise dans les domaines de la prise de RDV et la vente à distance, vous sera très utile, elle permettra à vos équipes de production et de commercialisation de voir leurs objectifs atteint et leurs chiffres d'affaires évoluer progressivement.
             </p>
          </div>
          <div class="row">
                <div class="nav-services col-md-4 col-sm-5">
                        <ul id="tab-services">
                            <li class="serv-active"> <img src="<?php echo asset('img/flaticon/classroom.png'); ?>" alt=""> <span>Prise de RDV</span></li>
                            <li><img src="<?php echo asset('img/flaticon/classroom.png'); ?>" alt=""><span>Commerciaux Terrain/VAD</span></li>
                            <!--<li><img src="<?php echo asset('img/flaticon/icon.png'); ?>" alt=""><span>Vente verrouillé</span></li>-->
                        </ul>
                        <a class="btn btn-default btn-devis" href="<?php echo route('devis'); ?>"><i class="fa fa-magic left" ></i> DEVIS GRATUIT</a>
                </div>
                <div class="services-info col-md-8 col-sm-7">
                    <div id="services1">
                            <img src="<?php echo asset('img/flaticon/male-reporter.png'); ?>" width="160px" alt="">
                            <h2>Prise de RDV</h2>
                               <p style="font-size: 15px;">Une formation personnalisée et adapté aux besoins de vos équipes. Nous mettons en place un système de confiance et de collaboration, centré sur l'écoute de vos collaborateurs, les découvrir afin de vous proposer un accompagnement personnalisé.</p>
                            <blockquote style=" border-left: 2px solid #1CB9C8;text-align:left;margin-left: 130px;margin-top: 50px;">
                                <p style="font-size: 15px;">
                                    <h5 style="color:rgb(29, 186, 192)">Objectifs : </h5>
                                         <p style="font-size:15px">
                                            - Améliorer votre prospection.
                                             <br>- Ciblage
                                             <br>- Passage du barrage secrétaire
                                             <br>- Découverte
                                        </p>
                                </p>
                            </blockquote>
                          
                            <div class="clearfix"></div>
                    </div>
                      <div id="services2">
                            <img src="<?php echo asset('img/flaticon/talk-of-a-couple-of-businessmen-standing-with-suitcases.png'); ?>" width="160px"  alt="">
                            <h2>Commerciaux Terrain/VAD</h2>
                             <p style="font-size: 15px;">Démystifier l'acte commercial au téléphone. Passer du conseil à la commercialisation. Développer son écoute et être force de proposition. Cibler les attentes de son interlocuteur. Argumenter, répondre aux objections et conclure sereinement.</p>
                            <blockquote style=" border-left: 2px solid #1CB9C8;text-align:left;margin-left: 130px;margin-top: 30px;">
                            <h5 style="color:rgb(29, 186, 192)"> Objectifs :</h5>

                                    <p style="font-size:15px">
                                            - Conseiller pour vendre
                                             <br>-  Ecoute active
                                             <br>- Argumentaire stratégique
                                             <br>-  Techniques de négociation
                                        </p>
                            </blockquote>
                            <!--<blockquote style=" border-left: 2px solid #1CB9C8;text-align:left;margin-left: 130px;margin-top: 30px;">
                                <p style="font-size: 15px;">
                                    <h5 style="color:rgb(29, 186, 192)">  Nous prenons en charge la confirmation :</h5>
                                    
                                   <p style="font-size:14px">
                                           1-  Confirmation immédiate à la fin de l'appel par un mail accompagné de votre carte de visite.
                                        <br>2-  Confirmation ultérieure 24 heures avant tout RDV, à travers un appel et un mail de confirmation.
                                    </p>
                                </p>
                            </blockquote>-->
                          
                            <div class="clearfix"></div>
                      </div>
                      <div id="services3">
                            <img src="<?php echo asset('img/flaticon/shopping-bag.png'); ?>" width= "160px" alt="">
                            <h2>Vente verrouillé</h2>
                            <p  style="font-size: 15px;"> Notre prospect achète par ce que nos solutions sont claires, mais surtout justifiés.</p>
                            <blockquote style=" border-left: 2px solid #1CB9C8;text-align:left;margin-left: 130px;margin-top: 30px;">
                                <p style="font-size: 15px;">
                                    <h5 style="color:rgb(29, 186, 192)"> Créer chez le prospect :</h5>
                                   <p style="font-size:15px">
                                               - La volonté d'acheter
                                               <br> - La confiance en nous, et en notre solution
                                               <br>  - Suivi ressenti 
                                               <br>- Fidélisation 
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
                    strings: [" Argumentaire stratégique  ", " Technique de vente "],
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