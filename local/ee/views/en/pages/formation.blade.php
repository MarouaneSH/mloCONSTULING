@extends('layout.header')
@section('style')
<link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
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
                    height: 590px;
                    /* z-index: 55555; */
                    position: absolute;
                    background: rgba(28, 185, 200, 0.33);">
            </div>

      <img src="{!! asset('/img/20882.jpg') !!}" alt="" style="height: 500px;width:100%;margin-top:90px;">
      <div class="caption">
         <h1 id="title" style="margin-top: 80px;font-size:60px;font-weight:bold"> Training Catalog 
              <p style="font-size:20px;font-weight:400"> <span id="cptn">MLO</span> Becomes easy.</p>
        </h1>
       </div>
  </div> 
  <div class="desc" style="margin:150px 0">
      <div class="container">
          <h3 style="text-align:center;">Training Catalog</h3>
          <hr style="margin-left:45%;width: 120px;">
          <div class="row">
              <p style="text-align:center;margin-left:30px;margin-bottom:200px;margin-top:20px;fon-size:16px" >
                  <br>
                        We all know that today "the professional training» has become a must.

                        The economic sphere changes and the leader’spriorities change as well.

                        The production of their teams at the front has become the element to develop in order to make it more and more profitable.

                        The use of professional training to ensure the development of the sales department skills is done automatically. You, too, aim to develop your production teams.

                        Our expertise in the fields of making appointments and distance selling, will be very useful to you 
                        It will allow your production and marketing teams to see their goals achieved and their sales figures gradually evolve.
             </p>
          </div>
          <div class="row">
                <div class="nav-services col-md-4 col-sm-5">
                        <ul id="tab-services">
                            <li class="serv-active"> <img src="{!!asset('img/flaticon/classroom.png')!!}" alt=""> <span>App Making </span></li>
                            <li><img src="{!!asset('img/flaticon/classroom.png')!!}" alt=""><span>Sales Representatives</span></li>
                            <!--<li><img src="{!!asset('img/flaticon/icon.png')!!}" alt=""><span>Vente verrouillé</span></li>-->
                        </ul>
                        <a class="btn btn-default btn-devis" href="{!! route('devis') !!}"><i class="fa fa-magic left" ></i> Free Quote</a>
                </div>
                <div class="services-info col-md-8 col-sm-7">
                    <div id="services1">
                            <img src="{!!asset('img/flaticon/male-reporter.png')!!}" width="160px" alt="">
                            <h2>App Making</h2>
                               <p style="font-size: 15px;">Personalized training adapted to the needs of your teams .
                                We put in place a system of trust and collaboration, based on listening to your collaborators.
                                Discover them in order to offer you more effective results.
                                </p>
                            <blockquote style=" border-left: 2px solid #1CB9C8;text-align:left;margin-left: 130px;margin-top: 50px;">
                                <p style="font-size: 15px;">
                                    <h5 style="color:rgb(29, 186, 192)">Objectives: </h5>
                                         <p style="font-size:15px">
                                            - Improve your prospecting.
                                             <br>- Targeting
                                             <br>- The secretary barrage
                                             <br>- Discovery
                                        </p>
                                </p>
                            </blockquote>
                          
                            <div class="clearfix"></div>
                    </div>
                      <div id="services2">
                            <img src="{!!asset('img/flaticon/talk-of-a-couple-of-businessmen-standing-with-suitcases.png')!!}" width="160px"  alt="">
                            <h2>Commerciaux Terrain/VAD</h2>
                             <p style="font-size: 15px;">Demystify the commercial act on the telephone. Moving from consulting to marketing

                                Develop one's listening and be a force of proposal. Target the interlocutor's expectations.

                                Arguing, responding to objections and concluding calmly.
                                </p>
                            <blockquote style=" border-left: 2px solid #1CB9C8;text-align:left;margin-left: 130px;margin-top: 30px;">
                            <h5 style="color:rgb(29, 186, 192)"> Objectives:</h5>

                                    <p style="font-size:15px">
                                            - Advise to sell
                                             <br>-  Active listening
                                             <br>- Strategic argument
                                             <br>-  Negotiation techniques
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
                            <img src="{!!asset('img/flaticon/shopping-bag.png')!!}" width= "160px" alt="">
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
        
          $("#cptn").typed({
             strings: [" Strategic argumentation  ", " Selling technics "],
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
@endsection