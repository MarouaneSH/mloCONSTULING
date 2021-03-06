﻿<!--
    *********************************************************
    *********************************************************
    *******                                           *******
    *******                                           *******   
    *******      Developed  By Marouane Souah         *******    
    *******      Website: www.marouanesouah.com       *******   
    *******      Facebook : fb.com/Marouane.esaaouira *******  
    *******                                           *******
    *********************************************************
    *********************************************************

-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="description" content="Mlo-Consutling  cabinet de conseil, opérant dans les opérations offshores : Télémarketing, Web to store, formation professionnelle.">
            <meta name="keywords" content="Prise de rendez-vous,Web to store,Visite virtuelle
            Google Street View,Télémarketing,Solutions Télécom,Formation Professionnel , Formation télémarketing,Mlo-Consulting , Marouane Souah
            Energies Renouvlables">
            <meta name="author" content="Marouane Souah">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{!!asset('favicon.ico')!!}">

    <title>MLO CONSULTING</title>
   
    <link href="  {!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">
    
     <link href="{!! asset('css/navbar.css') !!} " rel="stylesheet">
    <link rel="stylesheet" href="  {!! asset('font-awesome/css/font-awesome.min.css') !!}">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
     <script src="//code.tidio.co/ckyppcjchn6vrcdzzd6uqahift7cbgas.js"></script>
       <link href="  {!! asset('css/styleCONTACT.css') !!}" rel="stylesheet">
     <script>
             
    </script>
    @yield('style')
  </head>

  <body>
       @include('layout.navbar')     
   
         @yield('content')
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src=" {!! asset('js/bootstrap.min.js') !!}"></script>
    <script src="{!!asset('js/jsContact.js')!!}"> </script>
     @yield('script')
     <script>
        if($(window).scrollTop() > 70 )
        {
             $(".navbar-inverse ").css({"marginTop" :"0"});
        }
         $(window).scroll(function() {
           
                if($(window).scrollTop() < 150)
                {
                 
                    if(($(window).width()<750))
                    {
                        $(".navbar-inverse ").css({"marginTop" :"90px"})
                    }
                    else
                    {
                         $(".navbar-inverse ").css({"marginTop" :"50px"})
                    }
                   
                }
                if($(window).scrollTop())  {
                    $(".navbar-inverse ").css({"marginTop" :"0"})
                }
           });



           //ADD NAVBAR MENUS

           if($(window).width()<750)
           {
           
                
                $("#navbar ul").append('<li><a href="{!! url("/") !!}#mission">MISSION</a></li>');
                $("#navbar ul").append('  <li><a href="{!! url("/") !!}#partners">PORTFOLIO</a></li>');
                $("#navbar ul").append('<li><a href="{!! url("/") !!}#About">ABOUT</a></li>');


          
           }


           //NVABAR COLLAPSE AFTER CLICK
           $("#navbar ul li a").click(function(){
               if($(window).width()<750)
               {
                   $(".navbar-toggle").click();
               }
           })
     </script>
     <script src="{!!asset('js/jsFooter.js')!!}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->


    <script>
         //Copyright
     var createCopy = setInterval(function(){  $('body').append("<p class='copy'>Mlo-consulting.com</p>"); }, 1500);
     setTimeout(function( ) { clearInterval( createCopy ); }, 1500);
        setInterval(function(){ $("#tidio-chat iframe").css("bottom","3px")} ,2000);
    </script>
</body>
</html>

<!--
    *********************************************************
    *********************************************************
    *******                                           *******
    *******                                           *******   
    *******      Developed  By Marouane Souah         *******    
    *******      Website: www.marouanesouah.com       *******   
    *******      Facebok : fb.com/Marouane.esaaouira  *******  
    *******                                           *******
    *********************************************************
    *********************************************************

-->