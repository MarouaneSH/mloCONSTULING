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

      <img src="<?php echo asset('/img/slide1.jpg'); ?>" alt="" style="height: 500px;width:100%;margin-top:50px;">
      <div class="caption">
         <h1 id="title" style="margin-top: 80px;font-size:60px;font-weight:bold"> Réception d’appel 
              <p style="font-size:20px;font-weight:400"> <span id="cptn">Votre satisfaction client </span> Augmente.</p>
        </h1>
       </div>
  </div> 
  <div class="desc" style="margin:150px 0">
      <div class="container">
          <h3 style="text-align:center;">Réception d’appel </h3>
          <hr style="margin-left:45%;width: 120px;">
          <div class="row">
              <p style="text-align:center;margin-left:30px;margin-bottom:200px;margin-top:20px;fon-size:16px" >
                  <br>
                      La réception d’appel est le fait de répondre aux appels entrants. C’est un service d’écoute mit à disposition des

                        clients pour leurs demandes et leurs besoins.

                        La réception d’appel se divise en deux catégories : le service consommateur (service client) et le service

                        technique (help desk).

                        Le conseil donné peut être également une nouvelle orientation pour le client afin de lui proposer la meilleure

                        solution face à son problème. Gérer les réclamations du client, qui nécessite une vraie maîtrise de soi face aux

                        différentes plaintes dues à une mauvaise qualité du produit acheté par exemple. Il est donc nécessaire de se

                        munir d’une base de donnée fiable et à jour pour garantir la satisfaction clientèle.
              </p>
          </div>
          <div class="row">
                <div class="nav-services col-md-4 col-sm-5">
                        <ul id="tab-services">
                            <li class="serv-active"> <img src="<?php echo asset('img/flaticon/call-center-female-workers (2).png'); ?>" alt=""> <span>Service client</span></li>
                            <li><img src="<?php echo asset('img/flaticon/call-center-female-workers (2).png'); ?>" alt=""><span style="text-align:right">Le service technique</span></li>
                            <li><img src="<?php echo asset('img/online-customer-female-support.png'); ?>" alt=""><span>Externalisation administrative</span></li>
                        </ul>
                        <a class="btn btn-default btn-devis" href="<?php echo route('devis'); ?>"><i class="fa fa-magic left" ></i> DEVIS GRATUIT</a>
                </div>
                <div class="services-info col-md-8 col-sm-7">
                    <div id="services1">
                            <img src="<?php echo asset('img/flaticon/male-reporter.png'); ?>" width="100px" alt="">
                            <h2>Service client</h2>
                               <p style="font-size: 15px;">Le service client a pour rôle d’informer ou fournir au client les informations dont il a besoin sur un produit.

                                    Informer le client est un système de fidélisation et de conquête de nouveaux clients en ajoutant des valeurs

                                    ajoutées au service ou au produit. Conseiller le client qui permet d’augmenter la confiance du client à

                                    l’entreprise.</p>
                            <blockquote style=" border-left: 2px solid #1CB9C8;text-align:left;margin-left: 130px;margin-top: 50px;">
                                <p style="font-size: 15px;">
                                    <h5 style="color:rgb(29, 186, 192)">Avantage : </h5>
                                         <p style="font-size:15px">
                                                - Performances personnelles et techniques

                                              <br>  - Equipe polyvalente et expérimenté

                                               <br>   - Adaptation et personnalisation des appels

                                              <br>    - Suivi et monté en compétences de nos équipes

                                              <br>    - Mieux conseiller pour augmenter la confiance du client en vous
                                        </p>
                                </p>
                            </blockquote>
                          
                            <div class="clearfix"></div>
                    </div>
                      <div id="services2">
                            <img src="<?php echo asset('img/flaticon/male-reporter.png'); ?>" width="100px"  alt="">
                            <h2>Le service technique (help desk)</h2>
                             <p style="font-size: 15px;">Le rôle du téléopérateur est de fournir une aide technique et d’assister le consommateur pendant diverses

                                étapes d’installation ou d’utilisation d’un nouveau produit. Dans ce cas, il est nécessaire que le téléconseiller

                                possède une connaissance technique et se tenir informé sur l’environnement et l’évolution du produit pour

                                pouvoir aider son interlocuteur.
                            </p>
                            <blockquote style=" border-left: 2px solid #1CB9C8;text-align:left;margin-left: 130px;margin-top: 30px;">
                            <h5 style="color:rgb(29, 186, 192)"> Avantage :</h5>

                                    <p style="font-size:15px">
                                               - Performances personnelles et techniques

                                               <br> - Equipe polyvalente et expérimenté

                                                <br>- Adaptation et personnalisation des appels

                                               <br> - Suivi et monté en compétences de nos équipes

                                                <br> - Mieux conseiller pour augmenter la confiance du client en vous
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
                            <img src="<?php echo asset('img/flaticon/male-reporter.png'); ?>" width= "100px" alt="">
                            <h2>Externalisation administrative</h2>
                            <p  style="font-size: 15px;"> 
                            Pour votre Office management ou secrétariat courant, un assistant externalisé est la solution si :
                             <br>-Vous croulez sous les tâches administratives .
  
                               <br>- Vous passez vos week-ends à gérer vos factures clients.

                               <br>- Vous auriez besoin des services d’un assistant administratif mais votre activité n’est pas suffisante

                                pour embaucher quelqu’un ?
                             </p>
                            <blockquote style=" border-left: 2px solid #1CB9C8;text-align:left;margin-left: 130px;margin-top: 30px;">
                                <p style="font-size: 15px;">
                                    <h5 style="color:rgb(29, 186, 192)"> Avantages</h5>
                                   <p style="font-size:15px">
                                               - Secrétariat courant et notamment le classement et archivage

                                                <br>- Assistance de direction et Office management

                                               <br> - Travaux bureautiques

                                              

                                               <br> - Gestion et comptabilité

                                              <br>  - Administration des ventes

                                               <br> - Organisation et suivi de projets 
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
                    strings: [" Votre chiffre d’affaire  ", " Votre satisfaction client "],
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