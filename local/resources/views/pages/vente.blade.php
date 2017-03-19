@extends('layout.header')
@section('style')

  <link href="  {!! asset('css/styleRDV.css') !!}" rel="stylesheet">
  <link href="  {!! asset('css/styleFooter.css') !!}" rel="stylesheet">
  <style>
        
  </style>
@endsection
@section('content')
@include('layout.contact')
  <div class="bg">
       <div class="bg-color" style="
                    width: 100%;
                    height: 550px;
                    /* z-index: 55555; */
                    position: absolute;
                    background: rgba(28, 185, 200, 0.33);">
            </div>
      <img src="{!! asset('/img/Tvente8.jpg') !!}" alt="" style="height: 500px;width:100%;margin-top:50px;">
      <div class="caption">
         <h1 id="title" style="font-size:60px;font-weight:bold">VENTE A DISTANCE <br> <p style="font-size:20px;margin-top: 30px;font-weight:400"> <span id="cptn">IT SOLUTIONS - NOUVELLES TECHNOLOGIES </span>
                                  B2B - B2C </p></h1>
                    
      </div>
  </div>
  <div class="desc" style="margin:150px 0">
      <div class="container">
          <h3 style="text-align:center;">Télévente - Vente à Distance</h3>
          <hr style="margin-left:45%;width: 120px;">
          <div class="row">
              <p style="text-align:center;margin-left:30px;margin-bottom:200px;margin-top:20px;font-size:15px" >
                     Comme toute négociation, la vente est un acte de communication qui n'admet pas l'improvisation ou la spontanéité. La préparation de chaque entretien avec le client, la réflexion sur les personnes à rencontrer, l'examen du déroulement et des acquis des rencontres antérieures, la fixation d'un objectif, l'élaboration de la tactique en sont une première illustration. Au cours de chaque étape de la démarche de vente, la gestion du stress (surtout quand l'enjeu est important), les comportements attendus, les rituels à observer, le respect de l'ordre des étapes (découverte, proposition, argumentation, conclusion).
             </p>
          </div>
          <div class="row">
                <div class="nav-services col-md-4 col-sm-5">
                        <ul id="tab-services">
                            <li class="serv-active"> <img src="{!!asset('img/flaticon/target.png')!!}" alt=""> <span>Prospection intelligente</span></li>
                            <li><img src="{!!asset('img/flaticon/calculator.png')!!}" alt=""><span>Négociation personnalisée</span></li>
                            <li><img src="{!!asset('img/flaticon/dollar-symbol.png')!!}" alt=""><span>Vente verrouillé</span></li>
                        </ul>
                        <a class="btn btn-default btn-devis" href="{!! route('devis') !!}"><i class="fa fa-magic left" ></i> DEVIS GRATUIT</a>
                </div>
                <div class="services-info col-md-8 col-sm-7">
                    <div id="services1">
                            <img src="{!!asset('img/flaticon/target (1).png')!!}" width="120px" alt="">
                            <h2>Prospection intelligente</h2>
                            <p style="font-size: 15px;">A l’heure du big data et des médias sociaux, les commerciaux BtoB ne peuvent plus prospecter comme avant. 
                            Ils doivent être alimentés en informations pertinentes pour avoir <br> une compréhension fine de leur marché. 
                            C’est tout l’enjeu de la Sales Intelligence.</p>
                            <blockquote style=" border-left: 2px solid #1CB9C8;text-align:left;margin-left: 130px;margin-top: 50px;">
                                <p style="font-size: 15px;">
                                    <h5 style="color:rgb(29, 186, 192)">Nos méthodes de prospection ( en Télévente ) se base sur :</h5>
                                         <p style="font-size:15px">
                                            - Un ciblage pertinent ( TPE, PME, Mid Market, Grands comptes).
                                             <br>- Une segmentation précise ( Activité, Localisation géographique, Chiffre       d'affaire...)
                                             <br>- Une qualification optimale de portefeuille.
                                        </p>
                                </p>
                            </blockquote>
                          
                            <div class="clearfix"></div>
                    </div>
                      <div id="services2">
                            <img src="{!!asset('img/flaticon/save.png')!!}" width="120px"  alt="">
                            <h2>Négociation personnalisée</h2>
                             <p style="font-size: 15px;">La négociation commerciale est au cœur des techniques de vente.
                                C'est le temps fort de l'entretien de vente requérant plus que 
                                jamais finesse et professionnalisme pour atteindre votre objectif : vendre.</p>
                            <blockquote style=" border-left: 2px solid #1CB9C8;text-align:left;margin-left: 130px;margin-top: 30px;">
                            <h5 style="color:rgb(29, 186, 192)"> La méthode CAP/CAB :</h5>

                                    <p style="font-size: 15px;">
                                        Nous avons appris tout au long de notre expérience, que la négociation ne peut aboutir que si elle est personnalisée à notre prospect.
                                        <br> La méthode CAP/CAB est notre point FORT.
                                        Si nous réussissons dans un domaine comme les Solutions IT et Nouvelles Technologies c'est par ce que nous adaptons vos solutions à nos prospects.

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
                            <img src="{!!asset('img/flaticon/shopping-bag.png')!!}" width= "110px" alt="">
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
 

@include('layout.footer')
@endsection


@section('script')
<script src="{!!asset('js/typed.min.js')!!}"> </script>
<script>
    $(document).ready(function(){

         var width = $(window).width();
   

        //if Phone
        if(width > 800)
        {
                $("#cptn").typed({
                    strings: ["IT SOLUTIONS", "NOUVELLES TECHNOLOGIES"],
                        typeSpeed: 20,
                        backDelay: 1000,
                        loop: true
                });
        }


        // Select
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
@endsection