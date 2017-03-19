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
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>MLO CONSULTING</title>
   
    <link href="  <?php echo asset('css/bootstrap.min.css'); ?>" rel="stylesheet">
    
     <link href="<?php echo asset('css/navbar.css'); ?> " rel="stylesheet">
    <link rel="stylesheet" href="  <?php echo asset('font-awesome/css/font-awesome.min.css'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
     <script src="//code.tidio.co/zxjgyp7surv89iiwajdkvca965ap71jf.js"></script>
       <link href="  <?php echo asset('css/styleCONTACT.css'); ?>" rel="stylesheet">
     <script>
             
    </script>
    <?php echo $__env->yieldContent('style'); ?>
  </head>

  <body>
       <?php echo $__env->make('layout.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>     
   
         <?php echo $__env->yieldContent('content'); ?>
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src=" <?php echo asset('js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo asset('js/jsContact.js'); ?>"> </script>
     <?php echo $__env->yieldContent('script'); ?>
     <script>
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
           
                
                $("#navbar ul").append('<li><a href="<?php echo url("/"); ?>#mission">MISSION</a></li>');
                $("#navbar ul").append('  <li><a href="<?php echo url("/"); ?>#partners">PORTFOLIO</a></li>');
                $("#navbar ul").append('<li><a href="<?php echo url("/"); ?>#About">ABOUT</a></li>');


          
           }


           //NVABAR COLLAPSE AFTER CLICK
           $("#navbar ul li a").click(function(){
               if($(window).width()<750)
               {
                   $(".navbar-toggle").click();
               }
           })
     </script>
     <script src="<?php echo asset('js/jsFooter.js'); ?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

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