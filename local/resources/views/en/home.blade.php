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
              <h3><span>Your Turnover</span> Increases. </h3>
            </div>
        <img src="{!!asset('img/1.jpg')!!}" alt="Chania" width="460" height="345">
      </div>

      
    
      <div class="item">
          <div class="carousel-caption trickcenter">
                    <h1>MLO CONSULLTING</h1>
              <h3><span id="caro2">Developing Your Idea</span> Becomes easy. </h3>
            </div>
        <img src="{!!asset('img/3-cn.jpg')!!}" alt="Flower" width="460" height="345">
        
      </div>

      <div class="item">
          <div class="carousel-caption trickcenter">
                    <h1>MLO CONSULLTING</h1>
              <h3><span id="caro3">Preserving The ecosystem is our </span> Duty. </h3>
            </div>
        <img src="{!!asset('img/energie2-cn.jpg')!!}" alt="Flower" width="460" height="345">
      </div>

       <div class="item">
          <div class="carousel-caption trickcenter">
                    <h1>MLO CONSULLTING</h1>
              <h3><span id="caro4">Selling Technics </span> Becomes easy. </h3>
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
            <h1>Our <strong>Services</strong> </h1>
            <p class="icon-border">
                <img src="{!!asset('img/seperate.PNG')!!}" alt="" >
           </p>
           <p style="margin-top:30px">
           Our Main Task is to allow you to outsource your prospection services 
            telemarketing, appointment making and the professional training for your employees. <br>
            We operate in every telecommunication field, new technologies and business applications.  
            We are related to many partners in several countries, their expertise as well as those of our employees.
            We allow ourselves to provide you with benefits of impeccablequality. </p>    
     </div>
     <div class="total-service">
         <div class="col-md-3 col-sm-3 col-xs-12">
             <div class="single-service">
                  <a href="{{route('en-appmaking')}}"><img src="{!!asset('img/priserdv.jpg')!!}" alt="" class="img-responsive">
                     <div class="service-content">
                      <h3>Appointment making </h3>
                      <div class="services-desc">
                                <h5 style="line-height: 25px;text-align:center;font-family:Arial;margin-right: 12px;">
                                     Making appointments is an unavoidable tool for commercial figures .to move from one point to another in orderto reach the target that scheduled the appointment, we offer this chance 
                                    We prepare the stage.
                                </h5>
                            </div>
                      <span>MLO</span>
                     </div>   
                  </a>
                  
             </div>
         </div>
         <div class="col-md-3 col-sm-3 col-xs-12">
             <div class="single-service">
                  <a href="{{route('en-Telemarketing')}}"><img src="{!!asset('img/televente.jpg')!!}" alt="" class="img-responsive">
                        <div class="service-content">
                        <h3>Telemarketing</h3>
                        <div class="services-desc">
                                <h5 style="line-height: 25px;text-align:center;font-family:Arial;margin-right: 12px;">
                                       Telemarketing is an important activity almost every economical sector reachesout for professionals in the telemarketing field nowadays.
                                        We are elites in the telemarketing department.
                                        We practiced our field and still do for many years.

                               </h5>
                            </div>
                        <span>MLO</span>
                        </div>
                  </a>
                  
             </div>
         </div>
         <div class="col-md-3 col-sm-3 col-xs-12">
             <div class="single-service">
                  <a href="{{route('en-webstore')}}"><img src="{!!asset('img/mobile-commerce10.jpg')!!}" alt="" class="img-responsive">
                     <div class="service-content">
                        <h3>Web to Store</h3>
                        <div class="services-desc">
                                <h5 style="line-height: 25px;text-align:center;font-family:Arial;margin-right: 12px;">
                                   With the expension of the internet, we always observe activities developp arround the internet and it's applications we are meant for you full knowledge of the : PHP, JAVA, SQL, ASP.NET languages full mastery of the CMS.

                                            

                                </h5>
                            </div>
                        <span>MLO</span>
                      </div>
                  </a>
                 
             </div>
         </div>
         <div class="col-md-3 col-sm-3 col-xs-12">
             <div class="single-service">
                  <a href="{{route('en-formation')}}"><img src="{!!asset('img/2128.jpg')!!}" alt="" class="img-responsive">
                        <div class="service-content">
                            <h3>Professional Training</h3>
                            <div class="services-desc">
                                <h5 style="line-height: 25px;text-align:center;font-family:Arial;margin-right: 12px;">
                                    We are professionals in the telemarketing and commerce field
                                    We offered and still professional and unique training.
                                    Ourclients: call centers, sales representatives.

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
                <li class="active-cases" style="padding:10px 20px;">All</li>
                <li>Telecom Solutions</li>
                <li>Renewable Energy</li>
                <li>Web to Store</li>
                <li>Professional Training</li>
            </ul>
        </div>
        <div class="row cases-image">

                    <div id="telecom1">
                      <img src="{!!asset('img/iphone-8-edge-to-edge-display.jpeg')!!}" class="img-responsive" alt="" >
                      <div class="caption">
                          <h3>Telecom Solutions<br>
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
                               <a  id="plus-web-store">
                                   <i class="fa fa-plus-circle" aria-hidden="true" style="font-size:30px"></i>
                               </a>
                          </h3> 
                    </div>
                   </div>
                    <div id="telecom2">
                       <img src="{!!asset('img/telecom2.jpg')!!}" class="img-responsive" alt="" >
                       <div class="caption">
                          <h3 style="margin-top: 210px;">Telecom networks<br>
                               <a class="plus-Telecom">
                                   <i class="fa fa-plus-circle" aria-hidden="true" style="font-size:30px"></i>
                               </a>
                          </h3> 
                    </div>
                    </div>
                    <div id="energie1">
                       <img src="{!!asset('img/energie2.jpg')!!}" class="img-responsive" alt="" >
                       <div class="caption">
                          <h3>Renewable Energy<br>
                               <a id="plus-energie">
                                   <i class="fa fa-plus-circle" aria-hidden="true" style="font-size:30px"></i>
                               </a>
                          </h3> 
                    </div>
                    </div>
                    <div id="formation1">
                        <img src="{!!asset('img/formation-presentielle-groupe-2.jpg')!!}" class="img-responsive" alt="" >
                        <div class="caption">
                          <h3 >Professional Training<br>
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
                <h1>Our <strong>Mission</strong></h1>
                <p>
                    “ We are related to many partners in several countries, their expertise as well as those of our employees.
                        We allow ourselves to provide you with benefits of impeccable quality.
                        ”
                </p>
            </div>
            <div class="col-md-6 mission-graph">
                 <div class="number">
                     <h1><i class="fa fa-users" aria-hidden="true"></i>20 K</h1>
                     <p>Satisfied customers</p>
                 </div>
                 <div class="number">
                      <h1><i class="fa fa-check-square-o" aria-hidden="true"></i>5 K</h1>
                     <p>Complete projects</p>
                 </div>
                 <div class="number" style="margin-top:40px">
                      <h1><i class="fa fa-briefcase" aria-hidden="true"></i>10</h1>
                     <p>Professionals</p>
                 </div>
                 <div class="number" style="margin-top:40px">
                      <h1><i class="fa fa-users" aria-hidden="true"></i>30</h1>
                     <p>Best awards</p>
                 </div>
            </div>
        </div>
    </div>
</div>

<div class="partners">
    <h1>OUR <strong>PARTNERS</strong> </h1>
    <img src="{!!asset('img/seperate.PNG')!!}" alt="">
</div>
<div class="portfolio container">

        <div class="square" id="sq1">
            <img src="{!! asset('img/partners/1.png') !!}" alt="">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>GOOGLE PHOTOGRAPHER</p>
            </div>
        </div>

        <div class="square" id="sq2">
            <img src="{!! asset('img/partners/3.png') !!}" alt="">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>GOOGLE PHOTOGRAPHER</p>
            </div>
        </div>
        <div class="square" id="sq3">
            <img src="{!! asset('img/partners/2.png') !!}" alt="" style="">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>GOOGLE PHOTOGRAPHER</p>
            </div>
        </div>
        <div class="square" id="sq1" style="left:69%;">
            <img src="{!! asset('img/partners/4.jpg') !!}" alt="" style="">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>GOOGLE PHOTOGRAPHER</p>
            </div>
        </div>
        <div class="square" id="sq3" style="left:0;top:291px">
            <img src="{!! asset('img/partners/5.jpg') !!}" alt="" style="">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>GOOGLE PHOTOGRAPHER</p>
            </div>
        </div>
        <div class="square" id="sq1" style="left:46%;top:231px">
            <img src="{!! asset('img/partners/6.jpg') !!}" alt="" style="width:40%">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>GOOGLE PHOTOGRAPHER</p>
            </div>
        </div>
        <div class="square" id="sq2" style="left:69%;top:291px">
            <img src="{!! asset('img/partners/7.png') !!}" alt="" style="">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>GOOGLE PHOTOGRAPHER</p>
            </div>
        </div>
        <div class="square" id="sq2" style="left:23%;top:421px">
            <img src="{!! asset('img/partners/12.jpg') !!}" alt="" style="width:100%">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>GOOGLE PHOTOGRAPHER</p>
            </div>
        </div>
        <div class="square" id="sq4" style="left:0;top:521px">
            <img src="{!! asset('img/partners/3.jpg') !!}" alt="" style="width:90%">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>GOOGLE PHOTOGRAPHER</p>
            </div>
        </div>

         <div class="square" id="sq4" style="left:46%;top:521px">
            <img src="{!! asset('img/partners/13.png') !!}" alt="" style="">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>GOOGLE PHOTOGRAPHER</p>
            </div>
        </div>

        <div class="square" id="sq3" style="left:69%;top:721px">
            <img src="{!! asset('img/partners/10.jpg') !!}" alt="" style="">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>GOOGLE PHOTOGRAPHER</p>
            </div>
        </div>

        <div class="square" id="sq2" style="left:0;top:811px">
            <img src="{!! asset('img/partners/18.png') !!}" alt="" style="">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>GOOGLE PHOTOGRAPHER</p>
            </div>
        </div>

        <div class="square" id="sq4" style="left:23%;top:841px">
            <img src="{!! asset('img/partners/14.jpg') !!}" alt="" style="width:40%">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>GOOGLE PHOTOGRAPHER</p>
            </div>
        </div>

        <div class="square" id="sq2" style="left:46%;top:811px">
            <img src="{!! asset('img/partners/24.png') !!}" alt="" style="">
            <div class="sq-content">
                <h5>Télécom</h5>
                <p>Telecom operator</p>
            </div>
        </div>

        <div class="square" id="sq1" style="left:69%;top:941px">
            <img src="{!! asset('img/partners/17.png') !!}" alt="" style="width:95%">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>GOOGLE PHOTOGRAPHER</p>
            </div>
        </div>

        <div class="square" id="sq1" style="left:0%;top:1241px">
            <img src="{!! asset('img/partners/15.png') !!}" alt="" style="">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>GOOGLE PHOTOGRAPHER</p>
            </div>
        </div>
        <div class="square" id="sq2" style="left:23%;top:1131px">
            <img src="{!! asset('img/partners/20.jpg') !!}" alt="" style="">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>GOOGLE PHOTOGRAPHER</p>
            </div>
        </div>

        <div class="square" id="sq3" style="left:46%;top:1241px">
            <img src="{!! asset('img/partners/21.png') !!}" alt="" style="width:40%">
            <div class="sq-content">
                <h5>Télécom</h5>
                <p>Telecom distributor</p>
            </div>
        </div>

         <div class="square" id="sq4" style="left:69%;top:1241px">
            <img src="{!! asset('img/partners/22.jpg') !!}" alt="" style="">
            <div class="sq-content">
                <h5>Télécom</h5>
                <p>Telecom distributor</p>
            </div>
        </div>

         <div class="square" id="sq4" style="left:0%;top:1521px">
            <img src="{!! asset('img/partners/23.jpg') !!}" alt="" style="">
            <div class="sq-content">
                <h5>Télécom</h5>
                <p>Telecom distributor</p>
            </div>
        </div>

         <div class="square" id="sq4" style="left:23%;top:1551px; height: 230px;">
            <img src="{!! asset('img/partners/16.png') !!}" alt="" style="">
            <div class="sq-content">
                <h5>Web to Store</h5>
                <p>GOOGLE PHOTOGRAPHER</p>
            </div>
        </div>

        <div class="square" id="sq2" style="left:46%;top:1461px;height:320px">
            <img src="{!! asset('img/partners/25.jpg') !!}" alt="" style="">
            <div class="sq-content">
                <h5>Télécom</h5>
                <p>Telecom operator</p>
            </div>
        </div>

         <div class="square" id="sq1" style="left:69%;top:1521px;height:260px">
            <img src="{!! asset('img/partners/26.jpg') !!}" alt="" style="width:100%;">
            <div class="sq-content">
                <h5>Télécom</h5>
                <p>Telecom operator</p>
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

<script src="{!!asset('js/typed.min.js')!!}"> </script>

<script>
     $(function(){


 var width = $(window).width();
   

        //if Phone
        if(width > 800)
        {
                $(".carousel-caption span").typed({
                    strings: ["Your turnover ", "Your customer's satisfaction"],
                        typeSpeed: 20,
                        backDelay: 1000,
                        loop: true
                });

                $(".carousel-caption #caro2").typed({
                    strings: [" Developing  your idea", " Owning better ranking"],
                        typeSpeed: 20,
                        backDelay: 1000,
                        loop: true
                });

                $(".carousel-caption #caro3").typed({
                    strings: [" Preserving the ecosystem is our ", " Mastering new technologies  is our "],
                        typeSpeed: 20,
                        backDelay: 1000,
                        loop: true
                });

                $(".carousel-caption #caro4").typed({
                    strings: [" Strategic argumentation   ", " Selling technics "],
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

           


     //Copyright
     var createCopy = setInterval(function(){  $('body').append("<p class='copy'>Mlo-consulting.com</p>"); }, 1500);
     setTimeout(function( ) { clearInterval( createCopy ); }, 1500);
        setInterval(function(){ $("#tidio-chat iframe").css("bottom","10px")} ,2000);

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
        $("#right-top img").fadeOut(300,function(){
               $(this).attr("src","{!!asset('img/4g.PNG')!!}");
               $(this).fadeIn(500);
        });


        $("#right-top").fadeIn();
        $("#right-top .caption h3").html("Mobile Data");



        $("#right-bottom img").attr("src","{!!asset('img/07782717-photo-fibre-optique.jpg')!!}")
        $("#right-bottom").fadeIn();
        $("#right-bottom .caption h3").html("Fixed Data");



         $("#left-bottom img").attr("src","{!!asset('img/standard_tel.jpg')!!}")
        $("#left-bottom").fadeIn();
         $("#left-bottom .caption h3").html("Landline Phone");
       
    })


    //Display Energie Cases
    $(".tab-cases li").eq(2).click(function(){
        //Active
        $(".tab-cases li").each(function(){
            $(this).removeClass("active-cases");
        })
        $(this).addClass("active-cases");




         if(width<770)
        {
            
            $("#energie1").css('top',"0");
            $("#right-bottom").css('top' , "350px");
             $("#right-top").css('top' , "710px");
              $("#left-bottom").css('top' , "1057px");
              $("#center-top").css('top' , "1453x");
              $("#center-bottom").css('top' , "1793x");
        }
           


        //Display other cases
        $("#busnis1").fadeOut();
        $("#formation1").fadeOut();
        $("#telecom1").fadeOut();
        $("#telecom2").fadeOut();
         $("#energie1").fadeIn();
        $("#energie1").css({"left":"0"})


        //custom
         $("#right-top img").attr("src","{!!asset('img/parc-eolienne-lrg.jpg')!!}")
        $("#right-top").fadeIn();
         $("#right-top .caption h3").html("Wind turbine");

        $("#right-bottom img").attr("src","{!!asset('img/131.jpg')!!}")
        $("#right-bottom").fadeIn();
        $("#right-bottom .caption h3").html(" Wastewater treatment plant");
       

         $("#left-bottom img").attr("src","{!!asset('img/100.jpg')!!}")
        $("#left-bottom").fadeIn();
         $("#left-bottom .caption h3").html("Geothermal Energy");


         
        $("#center-top img").attr("src","{!!asset('img/116.jpg')!!}")
        $("#center-top").fadeIn();
         $("#center-top .caption h3").html("Solar panels");



         $("#center-bottom img").attr("src","{!!asset('img/128.jpg')!!}")
        $("#center-bottom").fadeIn();
         $("#center-bottom .caption h3").html("Rainwater harvesting");
         
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
        $("#right-top .caption h3").html("Web development");

        $("#right-bottom img").attr("src","{!!asset('img/antbk6vffgho3n7xehi6 (1).jpg')!!}")
        $("#right-bottom").fadeIn();
        $("#right-bottom .caption h3").html("Virtual Reality");


         $("#left-bottom img").attr("src","{!!asset('img/apps-mobile-smartphone-ss-1920-800x450.jpg')!!}")
        $("#left-bottom").fadeIn();
         $("#left-bottom .caption h3").html("Mobile Applications");



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
         $("#right-top .caption h3").html("Distance Selling");

        
        $("#right-bottom").hide();

        
        $("#left-bottom").hide();

        $("#center-top img").attr("src","{!!asset('img/Groupe-Le-Carre-commercial.jpg')!!}")
        $("#center-top").fadeIn();
        $("#center-top .caption h3").html("Commercial");

        
        $("#center-bottom").hide();
    })
}

</script>









@endsection('script')