@extends('layout.header')
@section('style')

  <link href="  {!! asset('css/styleRDV.css') !!}" rel="stylesheet">
  <link href="  {!! asset('css/styleFooter.css') !!}" rel="stylesheet">
  <style>
        
  </style>
@endsection
@section('content')
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
         <h1 id="title" style="font-size:60px;font-weight:bold">Telemarketing - Distance selling <br> <p style="font-size:20px;margin-top: 30px;font-weight:400"> <span id="cptn">IT SOLUTIONS - NOUVELLES TECHNOLOGIES </span>
                                  B2B - B2C </p></h1>
                    
      </div>
  </div>
  <div class="desc" style="margin:150px 0">
      <div class="container">
          <h3 style="text-align:center;">Telemarketing- Distance Selling</h3>
          <hr style="margin-left:45%;width: 120px;">
          <div class="row">
              <p style="text-align:center;margin-left:30px;margin-bottom:200px;margin-top:20px;font-size:15px" >
                       As all negotiations are, selling is a communication act which doesn't admit improvisation nor spontaneity.
                        The preparation for every interview with the client, the reflexion on the persons to meet,
                        the review of the progress and achievements of previous meetings, the setting of a targetand the development of the tactics are a first illustration.
                        During each stage of the sales process stress management (Especially when the stakes are high), and common expected behavioral rituals, are two critical points one must pay attention to.
                        Respect of the order of the steps. (Discovery, proposition, argumentation, conclusion).

             </p>
          </div>
          <div class="row">
                <div class="nav-services col-md-4 col-sm-5">
                        <ul id="tab-services">
                            <li class="serv-active"> <img src="{!!asset('img/flaticon/target.png')!!}" alt=""> <span>Smart Prospection</span></li>
                            <li><img src="{!!asset('img/flaticon/calculator.png')!!}" alt=""><span>Custom Negotiation</span></li>
                            <li><img src="{!!asset('img/flaticon/dollar-symbol.png')!!}" alt=""><span>Locked Sales</span></li>
                        </ul>
                        <a class="btn btn-default btn-devis" target="_blank" href="{!! url('en/FreeQuote') !!}"><i class="fa fa-magic left" ></i> Free Quote</a>
                </div>
                <div class="services-info col-md-8 col-sm-7">
                    <div id="services1">
                            <img src="{!!asset('img/flaticon/target (1).png')!!}" width="120px" alt="">
                            <h2>Smart Prospection</h2>
                           <p style="font-size: 15px;">now that its all about social medias and big data, commercials BTOB can no longer prospect the way they did 
                            They must have  relevant information in order to have an accurate understanding of their market.
                            it's the  challenge of Sales Intelligence.</p>
                            <blockquote style=" border-left: 2px solid #1CB9C8;text-align:left;margin-left: 130px;margin-top: 50px;">
                                <p style="font-size: 15px;">
                                    <h5 style="color:rgb(29, 186, 192)"> Our prospection methods (in telemarketing) are based on :</h5>
                                         <p style="font-size:15px">
                                            - Appropriate targeting (VSE, SME, Mid-Market, massive accounts)
                                             <br>- Accurate segmentation (Activity, Geographical location, Turnover)
                                             <br>- Optimal portfolio qualification.
                                        </p>
                                </p>
                            </blockquote>
                          
                            <div class="clearfix"></div>
                    </div>
                      <div id="services2">
                            <img src="{!!asset('img/flaticon/save.png')!!}" width="120px"  alt="">
                            <h2>Custom Negotiation</h2>
                            <p style="font-size: 15px;">Commercial negotiation is the center of sales techniques. <br>
                                when it comes to the commercial negotiation the professional sense 
                                is an obligation in order to reach your objective : to sale </p>
                            <blockquote style=" border-left: 2px solid #1CB9C8;text-align:left;margin-left: 130px;margin-top: 30px;">
                            <h5 style="color:rgb(29, 186, 192)"> CAB Method  :</h5>

                                    <p style="font-size: 15px;">
                                          We have learned throughout our experience that negotiation can only succeed 
                                         if we personalize it to our prospect. <br>                                  
                                          The CAB (Characteristics, advantages, and Benefits) method is our strong point.
                                           If we succeed in an area such as IT Solutions and New Technologies it's because we adapt your solutions to our prospects
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
                            <h2>Locked Sales</h2>
                            <p  style="font-size: 15px;"> Our prospect buys because our solutions are clear, but especially justified.</p>
                            <blockquote style=" border-left: 2px solid #1CB9C8;text-align:left;margin-left: 130px;margin-top: 60px;">
                                <p style="font-size: 15px;">
                                    <h5 style="color:rgb(29, 186, 192)"> Create in the prospect :</h5>
                                   <p style="font-size:15px">
                                               - The will to sell 
                                               <br> - The trust in us and in our solution
                                               <br>  - Followed
                                               <br>- Fidelity
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
             strings: ["IT SOLUTIONS", "NEW TECHNOLOGIES"],
                typeSpeed: 20,
                backDelay: 1000,
                loop: true
        });



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