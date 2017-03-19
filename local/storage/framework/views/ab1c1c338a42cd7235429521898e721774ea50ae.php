<script>



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
    })

    //Dsiplay Solution Cases
    $(".tab-cases li").eq(1).click(function(){
         //Active
        $(".tab-cases li").each(function(){
            $(this).removeClass("active-cases");
        })
        $(this).addClass("active-cases");

        //Display other cases
        $("#busnis1").fadeOut();
        $("#formation1").fadeOut();
        $("#energie1").fadeOut();
        $("#telecom1").fadeIn();
        $("#telecom2").fadeIn();
        
        //custom
         $("#right-top img").attr("src","<?php echo e(url()); ?>")
        $("#right-top").fadeIn();

        $("#right-bottom img").attr("src","img/energie2.jpg")
        $("#right-bottom").fadeIn();

         $("#left-bottom img").attr("src","img/energie2.jpg")
        $("#left-bottom").fadeIn();
       
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
    })
}

</script>