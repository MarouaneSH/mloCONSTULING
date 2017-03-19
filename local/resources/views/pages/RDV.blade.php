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
      <img src="{!! asset('/img/slider18.jpg') !!}" alt="" style="height: 500px;width:100%;margin-top:50px;">
      <div class="caption">
         <h1 id="title" style="margin-top: 80px;font-size:60px;font-weight:bold;">PRISE DE RENDEZ-VOUS
             <p style="font-size:20px;font-weight: 300;"> <span id="cptn">IT SOLUTIONS - NOUVELLES TECHNOLOGIES</span> B2B - B2C 
             </p>
          </h1>
       </div>
  </div>
  <div class="desc" style="margin:150px 0">
      <div class="container">
          <h3 style="text-align:center;">PRISE DE RDV</h3>
          <hr style="margin-left:48%;">
          <div class="row">
              <p style="text-align:center;margin-left:30px;margin-bottom:200px;margin-top:20px;fon-size:16px" >
                     MLO Consulting, vous propose un service de prise de RDV polyvalent et flexible. 

                    Respect des conditions de partenariat, de conditions de travail de nos collaborateurs.<br>

                    Nos collaborateurs sont choisi, par ce qu'ils sont polyvalents ( ont déjà travaillé dans la plus part des secteurs dans la Prise de RDV ),

                la qualité est assuré. Nous opérons dans les domaines suivants : <br>

                   - Télécommunication - Solution IT : Téléphonie Fixe et Mobile, Data Fixe et Mobile.<br>

                   - Nouvelles Technologies : Apllications mobile, développment web, SEO.
             </p>
          </div>
          <div class="row">
                <div class="nav-services col-md-4 col-sm-5">
                        <ul id="tab-services">
                            <li class="serv-active"> <img src="{!!asset('img/flaticon/calendar.png')!!}" alt=""> <span>PROSPECTION</span></li>
                            <li><img src="{!!asset('img/flaticon/clipboard.png')!!}" alt=""><span>CONFIRMATION</span></li>
                            <li><img src="{!!asset('img/flaticon/icon.png')!!}" alt=""><span>CONCRÉTISATION</span></li>
                        </ul>
                        <a class="btn btn-default btn-devis" href="{!! route('devis') !!}"><i class="fa fa-magic left" ></i> DEVIS GRATUIT</a>
                </div>
                <div class="services-info col-md-8 col-sm-7">
                    <div id="services1">
                            <img src="{!!asset('img/flaticon/calendar2.png')!!}" alt="" width="100px">
                            <h2>PROSPECTION</h2>
                            <p style="font-size: 15px;">Action qui consiste à utiliser l'ensemble des techniques marketing pour identifier de nouveaux clients 
                                potentiels et les transformer en clients réels.
                                Elle est souvent opposée à la fidélisation client par erreur. 
                                L'une et l'autre sont complémentaires et ne pratiquer que l'une d'entre elles serait faire courir
                                consciemment un risque économique et stratégique à l'entreprise.</p>
                            <blockquote style=" border-left: 2px solid #1CB9C8;text-align:left;margin-left: 130px;margin-top: 50px;">
                                <p style="font-size: 15px;">
                                    <h5 style="color:rgb(29, 186, 192)">Nos moyens de prospection :</h5>
                                         <p style="font-size:15px">
                                            - Le Phoning
                                            <br>  - Compagnes Mailing
                                            <br>  - Les réseaux sociaux
                                        </p>
                                </p>
                            </blockquote>
                          
                            <div class="clearfix"></div>
                    </div>
                      <div id="services2">
                            <img src="{!!asset('img/flaticon/clipboard2.png')!!}" alt="">
                            <h2>CONFIRMATION</h2>
                            <p style="font-size: 15px;">Parce qu'un bon RDV est d'abord un RDV confirmé , notre équipe se charge de prospecter et
                                    de qualifier vos rendez-vous.</p>
                            <blockquote style=" border-left: 2px solid #1CB9C8;text-align:left;margin-left: 130px;margin-top: 30px;">
                                <p style="font-size: 15px;">
                                    <h5 style="color:rgb(29, 186, 192)">  Nous prenons en charge la confirmation :</h5>
                                    
                                   <p style="font-size:14px">
                                           1-  Confirmation immédiate à la fin de l'appel par un mail accompagné de votre carte de visite.
                                        <br>2-  Confirmation ultérieure 24 heures avant tout RDV, à travers un appel et un mail de confirmation.
                                    </p>
                                </p>
                            </blockquote>
                          
                            <div class="clearfix"></div>
                      </div>
                      <div id="services3">
                            <img src="{!!asset('img/flaticon/briefcase(1).png')!!}" width= "100px" alt="">
                            <h2>CONCRÉTISATION</h2>
                            <p  style="font-size: 15px;">  Nos équipes sont choisies au peigne fin, pour vous garantir une bonne qualité.</p>
                            <blockquote style=" border-left: 2px solid #1CB9C8;text-align:left;margin-left: 130px;margin-top: 30px;">
                                <p style="font-size: 15px;">
                                    <h5 style="color:rgb(29, 186, 192)"> Nous vous préparons le terrain, alors allez y en toute confiance</h5>
                                   <p style="font-size:15px">
                                                - Prospection qualifiée
                                        <br>  - Prise de rendez-vous concrète
                                        <br>  - Double confirmation
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