@extends('layout.header')

@section('style')

    <link rel="stylesheet" href="{!!asset('css/styleHome.css')!!}">
    <style>
    </style>
    @include('layout.slider')
@endsection('style')
@section('content')


@include('layout.contact')
   <!--SLIDER-->

  
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
                <div class="carousel-caption trickcenter">
                    <h1 style="">MLO CONSULLTING</h1>
              <h3><span>Votre Chiffre d’affaire</span> Augmente. </h3>
            </div>
        <img src="{!!asset('img/1.jpg')!!}" alt="Chania" width="460" height="345">
      </div>

      
    
      <div class="item">
          <div class="carousel-caption trickcenter">
                    <h1>MLO CONSULLTING</h1>
              <h3><span id="caro2">Développer vos idées</span> Devient facile. </h3>
            </div>
        <img src="{!!asset('img/3-cn.jpg')!!}" alt="Flower" width="460" height="345">
        
      </div>

      <div class="item">
          <div class="carousel-caption trickcenter">
                    <h1>MLO CONSULLTING</h1>
              <h3><span id="caro3">Préserver l'écosystème est</span> Notre devoir. </h3>
            </div>
        <img src="{!!asset('img/energie2-cn.jpg')!!}" alt="Flower" width="460" height="345">
      </div>

       <div class="item">
          <div class="carousel-caption trickcenter">
                    <h1>MLO CONSULLTING</h1>
              <h3><span id="caro4">Technique de vente </span> Devient facile. </h3>
            </div>
        <img src="{!!asset('img/2088.jpg')!!}" alt="Flower" width="460" height="345">
      </div>
    </div>
     
    





    

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

 

  <div class="container services">
      <div class="row text">
            <h1>Nos <strong>Services</strong> </h1>
            <p class="icon-border">
                <img src="{!!asset('img/seperate.PNG')!!}" alt="" >
           </p>
           <p style="margin-top:30px">
            Notre principale tâche est de vous permettre d’externaliser vos services de prospection : Télévente, prise de RDV et formation de vos collaborateurs . <br>
            Nous intervenons dans tous les domaines de Télécommunication, nouvelles Technologies et applications for Business.<br>
            Nous comptons à ce jour plusieurs partenaires, dans plusieurs pays.
            Leurs expertises, ainsi que celles de nos collaborateurs, <br>nous permettent de vous fournir une prestation de qualité irréprochable.
                    </p>    
     </div>
     <div class="total-service">
         <div class="col-md-3 col-sm-3 col-xs-12">
             <div class="single-service">
                  <a href="{{route('rdv')}}"><img src="{!!asset('img/priserdv.jpg')!!}" alt="" class="img-responsive">
                     <div class="service-content">
                      <h3>Prise de RDV </h3>
                      <div class="services-desc">
                                <h5 style="line-height: 20px; font-family: Arial; text-align: center;    padding-right: 15px;">
                                    La prise de RDV est un outil incontournable, 
                                    pour les commerciaux, se déplacer voir un prospect qui a pris RDV, 
                                    est une chance à ne pas rater.
                                    Nous vous proposons cette chance.
                                    nous vous préparons le terrain. Allez y en toute confiance.
                                </h5>
                            </div>
                      <span>MLO</span>
                     </div>   
                  </a>
                  
             </div>
         </div>
         <div class="col-md-3 col-sm-3 col-xs-12">
             <div class="single-service">
                  <a href="{{route('vente')}}"><img src="{!!asset('img/111.jpg')!!}" alt="" class="img-responsive">
                        <div class="service-content">
                        <h3>Télévente</h3>
                        <div class="services-desc">
                                <h5 style="line-height: 20px; font-family: Arial; text-align: center;    padding-right: 15px;">
                                    La Télévente est une activité très importante, 
                                    aujourd'hui presque tous les acteurs économiques font appel à des professionnels de la télévente.
                                    Nous sommes des professionnels de la force de vente.
                                    Nous le faisons depuis plusieurs années.
                               </h5>
                            </div>
                        <span>MLO</span>
                        </div>
                  </a>
                  
             </div>
         </div>
         <div class="col-md-3 col-sm-3 col-xs-12">
             <div class="single-service">
                  <a href="{{route('formation')}}"><img src="{!!asset('img/televente.jpg')!!}" alt="" class="img-responsive">
                     <div class="service-content">
                        <h3>Réception d’appel</h3>
                        <div class="services-desc">
                                <h5 style="line-height: 20px; font-family: Arial; text-align: center;    padding-right: 15px;">
                                   La réception d’appel est le fait de répondre aux appels entrants. C’est un service d’écoute mit à disposition des clients pour leurs demandes et leurs besoins. La réception d’appel se divise en deux catégories : le service consommateur (service client) et le service technique (help desk).
                                </h5>
                            </div>
                        <span>MLO</span>
                      </div>
                  </a>
                 
             </div>
         </div>
         <div class="col-md-3 col-sm-3 col-xs-12">
             <div class="single-service">
                  <a href="{{route('webstore')}}"><img src="{!!asset('img/mobile-commerce10.jpg')!!}" alt="" class="img-responsive">
                        <div class="service-content">
                            <h3>Web to Store</h3>
                            <div class="services-desc">
                                <h5 style="line-height: 20px; font-family: Arial; text-align: center;    padding-right: 15px;">
                                     Avec l’expansion d'internet, 
                                     nous voyons tous les jours des activités se développer autour d'internet et d'applications internet.
                                     Nous nous sommes adaptés pour vous !
                                     Bonne connaissance des languages : PHP, Java, SQL, ASP. 
                                     Bonne maîtrise des CMS
                                </h5>
                            </div>
                             
                            <span>MLO</span>
                        </div>
                  </a>
             </div>
         </div>
         
     </div>

  </div>


<div class=" cases">
    <div class="container">
        <div class="row">
              <h1>Our <strong> Cases </strong></h1>
        </div>
        <div class="row">
            <ul class="tab-cases">
                <li class="active-cases" style="padding:10px 20px;">Tous</li>
                <li>Solutions Télécom</li>
                <li>Energies Renouvlables</li>
                <li>Web to Store</li>
                <li>Formations professionnelles</li>
            </ul>
        </div>
        <div class="row cases-image">

                    <div id="telecom1">
                      <img src="{!!asset('img/iphone-8-edge-to-edge-display.jpeg')!!}" class="img-responsive" alt="" >
                      <div class="caption">
                          <h3>Solutions Télécom<br>
                               <a class="plus-Telecom">
                                   <i class="fa fa-plus-circle" aria-hidden="true" style="font-size:30px"></i>
                               </a>
                          </h3> 
                    </div>
                   </div>

                   <div id="busnis1" >        
                      <img src="{!!asset('img/Tribune-commandements-campagne-web-store-reussie-F.jpg')!!}" class="img-responsive" alt="" >
                      <div class="caption">
                          <h3>Web to Store <br>
                               <a id="plus-web-store">
                                   <i class="fa fa-plus-circle" aria-hidden="true" style="font-size:30px"></i>
                               </a>
                          </h3> 
                    </div>
                   </div>
                    <div id="telecom2">
                       <img src="{!!asset('img/telecom2.jpg')!!}" class="img-responsive" alt="" >
                       <div class="caption">
                          <h3 style="margin-top: 210px;">Réseaux Télécom <br>
                               <a class="plus-Telecom">
                                   <i class="fa fa-plus-circle" aria-hidden="true" style="font-size:30px"></i>
                               </a>
                          </h3> 
                    </div>
                    </div>
                    <div id="energie1">
                       <img src="{!!asset('img/energie2.jpg')!!}" class="img-responsive" alt="" >
                       <div class="caption">
                          <h3>Energies Renouvlables<br>
                               <a id="plus-energie">
                                   <i class="fa fa-plus-circle" aria-hidden="true" style="font-size:30px"></i>
                               </a>
                          </h3> 
                    </div>
                    </div>
                    <div id="formation1">
                        <img src="{!!asset('img/formation-presentielle-groupe-2.jpg')!!}" class="img-responsive" alt="" >
                        <div class="caption">
                          <h3 >Formation Professionnelle<br>
                               <a id="plus-formation">
                                   <i class="fa fa-plus-circle" aria-hidden="true" style="font-size:30px"></i>
                               </a>
                          </h3> 
                    </div>
                    </div>


                    <!--Cases NEW -->
                    <div id="right-top">
                        <img src="" class="img-responsive" alt="" >
                        <div class="caption">
                          <h3 >Formation Professionnelle<br>
                               <a href="#">
                                   <i class="fa fa-plus-circle" aria-hidden="true" style="font-size:30px"></i>
                               </a>
                          </h3> 
                    </div>
                    </div>

                    <div id="right-bottom">
                        <img src="" class="img-responsive" alt="" >
                        <div class="caption">
                          <h3 >Formation Professionnelle<br>
                               <a href="#">
                                   <i class="fa fa-plus-circle" aria-hidden="true" style="font-size:30px"></i>
                               </a>
                          </h3> 
                    </div>
                    </div>

                       <div id="left-bottom">
                        <img src="" class="img-responsive" alt="" >
                        <div class="caption">
                          <h3 >Formation Professionnelle<br>
                               <a href="#">
                                   <i class="fa fa-plus-circle" aria-hidden="true" style="font-size:30px"></i>
                               </a>
                          </h3> 
                    </div>
                    </div>
                    <div id="center-top">
                        <img src="" class="img-responsive" alt="" >
                        <div class="caption">
                          <h3 >Formation Professionnelle<br>
                               <a href="#">
                                   <i class="fa fa-plus-circle" aria-hidden="true" style="font-size:30px"></i>
                               </a>
                          </h3> 
                    </div>
                    </div>

                     <div id="center-bottom">
                        <img src="" class="img-responsive" alt="" >
                        <div class="caption">
                          <h3 >Formation Professionnelle<br>
                               <a href="#">
                                   <i class="fa fa-plus-circle" aria-hidden="true" style="font-size:30px"></i>
                               </a>
                          </h3> 
                    </div>
                    </div>
        </div>
    </div>
  

</div>

<div class="mission">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mission-desc">
                <h1>Notre <strong>Mission</strong></h1>
                <p>
                    “ Nous comptons à ce jour plusieurs partenaires, dans plusieurs pays.
                    Leurs expertises, ainsi que celles de nos collaborateurs, nous permettent de vous fournir une prestation de qualité irréprochable.
                    ”
                </p>
            </div>
            <div class="col-md-6 mission-graph">
                 <div class="number">
                     <h1><i class="fa fa-users" aria-hidden="true"></i>20 K</h1>
                     <p>Clients sont satisfait</p>
                 </div>
                 <div class="number">
                      <h1><i class="fa fa-check-square-o" aria-hidden="true"></i>5 K</h1>
                     <p>Projet complet</p>
                 </div>
                 <div class="number" style="margin-top:43px">
                      <h1><i class="fa fa-briefcase" aria-hidden="true"></i>10</h1>
                     <p>Professionnels</p>
                 </div>
                 <div class="number" style="margin-top:43px">
                      <h1><i class="fa fa-users" aria-hidden="true"></i>30</h1>
                     <p>Récompenses</p>
                 </div>
            </div>
        </div>
    </div>
</div>

<div class="partners">
    <h1>NOS <strong>PARTENAIRES</strong> </h1>
    <img src="{!!asset('img/seperate.PNG')!!}" alt="">
</div>
<div class="portfolio container">

        <div class="square" id="sq1">
            <img src="{!! asset('img/partners/1.png') !!}" alt="">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>PHOTOGRAPHE GOOGLE</p>
            </div>
        </div>

        <div class="square" id="sq2">
            <img src="{!! asset('img/partners/3.png') !!}" alt="">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>PHOTOGRAPHE GOOGLE</p>
            </div>
        </div>
        <div class="square" id="sq3">
            <img src="{!! asset('img/partners/2.png') !!}" alt="" style="">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>PHOTOGRAPHE GOOGLE</p>
            </div>
        </div>
        <div class="square" id="sq1" style="left:69%;">
            <img src="{!! asset('img/partners/4.jpg') !!}" alt="" style="">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>PHOTOGRAPHE GOOGLE</p>
            </div>
        </div>
        <div class="square" id="sq3" style="left:0;top:291px">
            <img src="{!! asset('img/partners/5.jpg') !!}" alt="" style="">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>PHOTOGRAPHE GOOGLE</p>
            </div>
        </div>
        <div class="square" id="sq1" style="left:46%;top:231px">
            <img src="{!! asset('img/partners/6.jpg') !!}" alt="" style="width:40%">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>PHOTOGRAPHE GOOGLE</p>
            </div>
        </div>
        <div class="square" id="sq2" style="left:69%;top:291px">
            <img src="{!! asset('img/partners/7.png') !!}" alt="" style="">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>PHOTOGRAPHE GOOGLE</p>
            </div>
        </div>
        <div class="square" id="sq2" style="left:23%;top:421px">
            <img src="{!! asset('img/partners/12.jpg') !!}" alt="" style="width:100%">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>PHOTOGRAPHE GOOGLE</p>
            </div>
        </div>
        <div class="square" id="sq4" style="left:0;top:521px">
            <img src="{!! asset('img/partners/3.jpg') !!}" alt="" style="width:90%">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>PHOTOGRAPHE GOOGLE</p>
            </div>
        </div>

         <div class="square" id="sq4" style="left:46%;top:521px">
            <img src="{!! asset('img/partners/13.png') !!}" alt="" style="">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>PHOTOGRAPHE GOOGLE</p>
            </div>
        </div>

        <div class="square" id="sq3" style="left:69%;top:721px">
            <img src="{!! asset('img/partners/10.jpg') !!}" alt="" style="">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>PHOTOGRAPHE GOOGLE</p>
            </div>
        </div>

        <div class="square" id="sq2" style="left:0;top:811px">
            <img src="{!! asset('img/partners/18.png') !!}" alt="" style="">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>PHOTOGRAPHE GOOGLE</p>
            </div>
        </div>

        <div class="square" id="sq4" style="left:23%;top:841px">
            <img src="{!! asset('img/partners/14.jpg') !!}" alt="" style="width:40%">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>PHOTOGRAPHE GOOGLE</p>
            </div>
        </div>

        <div class="square" id="sq2" style="left:46%;top:811px">
            <img src="{!! asset('img/partners/24.png') !!}" alt="" style="">
            <div class="sq-content">
                <h5>Télécom</h5>
                <p>Opérateur Télécom</p>
            </div>
        </div>

        <div class="square" id="sq1" style="left:69%;top:941px">
            <img src="{!! asset('img/partners/17.png') !!}" alt="" style="width:95%">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>PHOTOGRAPHE GOOGLE</p>
            </div>
        </div>

        <div class="square" id="sq1" style="left:0%;top:1241px">
            <img src="{!! asset('img/partners/15.png') !!}" alt="" style="">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>PHOTOGRAPHE GOOGLE</p>
            </div>
        </div>
        <div class="square" id="sq2" style="left:23%;top:1131px">
            <img src="{!! asset('img/partners/20.jpg') !!}" alt="" style="">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>PHOTOGRAPHE GOOGLE</p>
            </div>
        </div>

        <div class="square" id="sq3" style="left:46%;top:1241px">
            <img src="{!! asset('img/partners/21.png') !!}" alt="" style="width:40%">
            <div class="sq-content">
                <h5>Télécom</h5>
                <p>Distributeur Télécom</p>
            </div>
        </div>

         <div class="square" id="sq4" style="left:69%;top:1241px">
            <img src="{!! asset('img/partners/22.jpg') !!}" alt="" style="">
            <div class="sq-content">
                <h5>Télécom</h5>
                <p>Distributeur Télécom</p>
            </div>
        </div>

         <div class="square" id="sq4" style="left:0%;top:1521px">
            <img src="{!! asset('img/partners/23.jpg') !!}" alt="" style="">
            <div class="sq-content">
                <h5>Télécom</h5>
                <p>Distributeur Télécom</p>
            </div>
        </div>

         <div class="square" id="sq4" style="left:23%;top:1551px; height: 230px;">
            <img src="{!! asset('img/partners/16.png') !!}" alt="" style="">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>PHOTOGRAPHE GOOGLE</p>
            </div>
        </div>

        <div class="square" id="sq2" style="left:46%;top:1461px;height:320px">
            <img src="{!! asset('img/partners/25.jpg') !!}" alt="" style="">
            <div class="sq-content">
                <h5>Télécom</h5>
                <p>Opérateur Télécom</p>
            </div>
        </div>

         <div class="square" id="sq1" style="left:69%;top:1521px;height:260px">
            <img src="{!! asset('img/partners/26.jpg') !!}" alt="" style="width:100%;">
            <div class="sq-content">
                <h5>Télécom</h5>
                <p>Opérateur Télécom</p>
            </div>
        </div>
</div>
<div class="About"></div>
@include('layout.footer')


@endsection('content')

@section('script')
<script>
    $(document).ready(function() {      
   $('.myCarousel').carousel('pause');
});
</script>

<script  src="{!!asset('js/typed.min.js')!!}"> </script>

<script>
     $(function(){

        var width = $(window).width();
   

        //if Phone
        if(width > 800)
        {
            
                    $(".carousel-caption span").typed({
                        strings: ["Votre chiffre d’affaire", "Votre satisfaction client"],
                            typeSpeed: 20,
                            backDelay: 1000,
                            loop: true
                    });

                    $(".carousel-caption #caro2").typed({
                        strings: [" Développer vos idées", " Etre bien référencé"],
                            typeSpeed: 20,
                            backDelay: 1000,
                            loop: true
                    });

                    $(".carousel-caption #caro3").typed({
                        strings: [" Préserver l'écosystème est ", " Maitriser les nouvelles technologies est "],
                            typeSpeed: 20,
                            backDelay: 1000,
                            loop: true
                    });

                    $(".carousel-caption #caro4").typed({
                        strings: [" Argumentaire stratégique  ", " Technique de vente "],
                            typeSpeed: 20,
                            backDelay: 1000,
                            loop: true
                    });
        }


       

        //Scroll Nav
        //SERVICES
        $(".nav li a").eq(1).on('click',function() {
                $('html, body').animate({
                    'scrollTop' : $(".services").position().top-90
                });
            });
            $("footer .about ul a").eq(1).on('click',function() {
                $('html, body').animate({
                    'scrollTop' : $(".services").position().top-90
                });
            });
         
         
         //CASES
         $(".nav li a").eq(2).on('click',function() {
                $('html, body').animate({
                    'scrollTop' : $(".cases").position().top-50
                });
            });
             $("footer .about ul a").eq(2).on('click',function() {
                $('html, body').animate({
                    'scrollTop' : $(".cases").position().top-90
                });
            });

        //mission
         $(".nav li a").eq(3).on('click',function() {
                $('html, body').animate({
                    'scrollTop' : $(".mission").position().top-70
                });
            });
             $("footer .about ul a").eq(3).on('click',function() {
                $('html, body').animate({
                    'scrollTop' : $(".mission").position().top-90
                });
            });



            //Partners
            $(".nav li a").eq(4).on('click',function() {
                $('html, body').animate({
                    'scrollTop' : $(".partners").position().top-70
                });
            });
            $("footer .about ul a").eq(4).on('click',function() {
                $('html, body').animate({
                    'scrollTop' : $(".partners").position().top-90
                });
            });


            //ABOUT
            $(".nav li a").eq(5).on('click',function() {
                $('html, body').animate({
                    'scrollTop' : $("footer").position().top
                });
            });
            $("footer .about ul a").eq(5).on('click',function() {
                $('html, body').animate({
                    'scrollTop' : $("footer").position().top-90
                });
            });

    });
    $(document).ready(function () {
            //scroll URL
           


         // Animation services

         $(".single-service").hover(function(){
           
              $(".services-desc",this).slideToggle();
             
         })

        




    $('#myCarousel').carousel({
        interval: 8000
    })
    $('.fdi-Carousel .item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length > 0) {
            next.next().children(':first-child').clone().appendTo($(this));
        }
        else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
    });
});
</script>

 


 <script>
  var elem =window.location.hash.replace('#', ''); 

     var elemCalss = "." + elem;
     $('html, body').animate({'scrollTop' : $(elemCalss).position().top-90 });


   //Preload imagesavealpha

            function preload(arrayOfImages) {
                $(arrayOfImages).each(function(){
                    $('<img/>')[0].src = this;
                    
                });
            }
      
                preload("http://localhost:8000/img/parc-eolienne-lrg.jpg",
                                "http://localhost:8000/img/116.jpg" , 
                                "http://localhost:8000/img/100.jpg",
                                "http://localhost:8000/img/128.jpg",
                                "http://localhost:8000/img/131.jpg",
                                "{{asset('img/Groupe-Le-Carre-commercial.jpg')}}",
                                "{{asset('img/Formation-VAD.jpg')}}");
        
              
 </script>

<script>  //Cases script
$(document).ready(function(){
    showCaptionCase();
    displayCase();


    //Click plus
    $(".plus-Telecom").click(function(){
            $(".tab-cases li").eq(1).click();
    })

     $(".plus-Telecom").click(function(){
            $(".tab-cases li").eq(1).click();
    })

    $("#plus-web-store").click(function(){
            $(".tab-cases li").eq(3).click();
    })
     $("#plus-energie").click(function(){
            $(".tab-cases li").eq(2).click();
    })

     $("#plus-formation").click(function(){
            $(".tab-cases li").eq(4).click();
    })
 
   
    $(".tab-cases li").eq(1).click();
    $(".tab-cases li").eq(2).click();
    $(".tab-cases li").eq(3).click();
     $(".tab-cases li").eq(0).click();

})



function showCaptionCase()
{
    $(".cases-image .caption").hover(function(){
      $(this).children().css({"display":"block"});
    } , function(){
        $(this).children().css({"display":"none"})
    })
}

function displayCase()
{

     var width = $(window).width();

    //Display all Cases
    $(".tab-cases li").eq(0).click(function(){
       //Active
        $(".tab-cases li").each(function(){
            $(this).removeClass("active-cases");
        })
        $(this).addClass("active-cases");

        //Resore default CSS value
        $("#energie1").css({"left":""})
        $("#energie1").css({"right":"0"})
        $("#busnis1").css({"top":""})
        $("#busnis1").css({"top":"280"})
         $("#formation1").css({"top":""});
         $("#formation1").css({"left":""})
          $("#formation1").css({"top":"280"});
         $("#formation1").css({"right":"0"})


        //Display al cases
        $("#busnis1").fadeIn();      
        $("#formation1").fadeIn();
        $("#energie1").fadeIn();
        $("#telecom1").fadeIn();
        $("#telecom2").fadeIn();


        //HIDE ALL custom
    
        $("#right-top").fadeOut();

    
        $("#right-bottom").fadeOut();

        
        $("#left-bottom").fadeOut();

        $("#center-top").fadeOut();


        $("#center-bottom").fadeOut();


        //reset to default
         if(width<770)
         {
           
            $('#energie1').css('top',"679px");
         }
        
    })

    //Dsiplay Solution Cases
    $(".tab-cases li").eq(1).click(function(){
         //Active
        $(".tab-cases li").each(function(){
            $(this).removeClass("active-cases");
        })
        $(this).addClass("active-cases");


        //if phone
        if(width<770)
        {   $('#center-top').hide();
            $("#formation1").css('top',"0");
            $("#right-bottom").css('top' , "350px");
             $("#right-top").css('top' , "710px");
              $("#left-bottom").css('top' , "1057px");
            //    $("#right-top").css('top' , "1453x");
        }
            


        //Display other cases
        $("#busnis1").fadeOut();
        $("#formation1").fadeOut();
        $("#energie1").fadeOut();
        $("#telecom1").fadeIn();
        $("#telecom2").fadeIn();
       

        
        //custom
         $("#right-top img").attr("src","{!!asset('img/4g.PNG')!!}")
        $("#right-top").fadeIn();
        $("#right-top .caption h3").html("Internet Mobile");



        $("#right-bottom img").attr("src","{!!asset('img/07782717-photo-fibre-optique.jpg')!!}")
        $("#right-bottom").fadeIn();
        $("#right-bottom .caption h3").html("Internet Fixe");



         $("#left-bottom img").attr("src","{!!asset('img/standard_tel.jpg')!!}")
        $("#left-bottom").fadeIn();
         $("#left-bottom .caption h3").html("Téléphonie Fixe");
       
    })


    //Display Energie Cases
    $(".tab-cases li").eq(2).click(function(){
        //Active
        $(".tab-cases li").each(function(){
            $(this).removeClass("active-cases");
        })
        $(this).addClass("active-cases");

        //Display other cases
        $("#busnis1").fadeOut();
        $("#formation1").fadeOut();
        $("#telecom1").fadeOut();
        $("#telecom2").fadeOut();
         $("#energie1").fadeIn();
        $("#energie1").css({"left":"0"})

          //if phone
        if(width<770)
        {
            
            $("#energie1").css('top',"0");
            $("#right-bottom").css('top' , "350px");
             $("#right-top").css('top' , "710px");
              $("#left-bottom").css('top' , "1057px");
              $("#center-top").css('top' , "1453x");
              $("#center-bottom").css('top' , "1793x");
        }
            

        //custom
        $("#right-top img").attr("src","{!!asset('img/parc-eolienne-lrg.jpg')!!}")
        $("#right-top").fadeIn();
         $("#right-top .caption h3").html("Eolienne");

        $("#right-bottom img").attr("src","{!!asset('img/131.jpg')!!}")
        $("#right-bottom").fadeIn();
        $("#right-bottom .caption h3").html(" Mini station d'épuration");
       

         $("#left-bottom img").attr("src","{!!asset('img/100.jpg')!!}")
        $("#left-bottom").fadeIn();
         $("#left-bottom .caption h3").html("Energie Géothermique");


         
        $("#center-top img").attr("src","{!!asset('img/116.jpg')!!}")
        $("#center-top").fadeIn();
         $("#center-top .caption h3").html("Panneaux Solaires");



         $("#center-bottom img").attr("src","{!!asset('img/128.jpg')!!}")
        $("#center-bottom").fadeIn();
         $("#center-bottom .caption h3").html("Récupération eau de pluie");
         
    })

    //Display Busness Cases
    $(".tab-cases li").eq(3).click(function(){
        //Active
        $(".tab-cases li").each(function(){
            $(this).removeClass("active-cases");
        })
        $(this).addClass("active-cases");

        //Display other cases
        $("#formation1").fadeOut();
        $("#telecom1").fadeOut();
        $("#telecom2").fadeOut();
        $("#energie1").fadeOut();
        $("#busnis1").fadeIn();
        $("#busnis1").css({"top":"0"})


         //custom
        $("#right-top img").attr("src","{!!asset('img/lee-campbell-86958.jpg')!!}")
        $("#right-top").fadeIn();
        $("#right-top .caption h3").html("Développment Web");

        $("#right-bottom img").attr("src","{!!asset('img/antbk6vffgho3n7xehi6 (1).jpg')!!}")
        $("#right-bottom").fadeIn();
        $("#right-bottom .caption h3").html("Réalité Virtuelle");


         $("#left-bottom img").attr("src","{!!asset('img/apps-mobile-smartphone-ss-1920-800x450.jpg')!!}")
        $("#left-bottom").fadeIn();
         $("#left-bottom .caption h3").html("Applications Mobile");



        $("#center-top img").attr("src","{!!asset('img/how-to-write-seo-titles-2.jpg')!!}")
        $("#center-top").fadeIn();
         $("#center-top .caption h3").html("SEO");



         $("#center-bottom img").attr("src","{!!asset('img/Web-Hosting-Header-Image.png')!!}")
         $("#center-bottom").fadeIn();
         $("#center-bottom .caption h3").html("Web Hosting");
    })

    //Display Formations Cases
     $(".tab-cases li").eq(4).click(function(){
         //Active
        $(".tab-cases li").each(function(){
            $(this).removeClass("active-cases");
        })
        $(this).addClass("active-cases");

        //Display other cases
        $("#telecom1").fadeOut();
        $("#telecom2").fadeOut();
        $("#energie1").fadeOut();
        $("#busnis1").fadeOut();
        $("#formation1").fadeIn();
        $("#formation1").css({"top":"0"});
         $("#formation1").css({"left":"0"})

          if(width<770)
        {
           
             $("#right-top").css('top' , "340px");
             
        }

           //custom
        $("#right-top img").attr("src","{!!asset('img/Formation-VAD.jpg')!!}")
        $("#right-top").fadeIn();
         $("#right-top .caption h3").html("Vente à Distance");

        
        $("#right-bottom").hide();

        
        $("#left-bottom").hide();

        $("#center-top img").attr("src","{!!asset('img/Groupe-Le-Carre-commercial.jpg')!!}")
        $("#center-top").fadeIn();
        $("#center-top .caption h3").html("Commercial Terrain");

        
        $("#center-bottom").hide();
    })
}

</script>



<!--Preload Images-->
<script>
    $(document).ready(function(){
         var img1 = new Image();
         img1.src="{!!asset('4G.PNG')!!}";
         img1.src="{!!asset('standard_tel.jpg')!!}";
         img1.src="{!!asset('07782717-photo-fibre-optique.jpg')!!}";
         img1.src="{!!asset('116.jpg')!!}";
         img1.src="{!!asset('parc-eolienne-lrg.jpg')!!}";
         img1.src="{!!asset('100.jpg')!!}";
         img1.src="{!!asset('how-to-write-seo-titles-2.jpg')!!}";
         img1.src="{!!asset('Formation-VAD.jpg')!!}";
        
    })
</script>





@endsection('script')