$("#contactForm").submit(function(e){
               $(".contact-message").html("");
             e.preventDefault();	
              $.ajax({
                  type:"get",
                  url:"contact",
                  beforeSend:function(){
                    $(".loading-msg").show();
                    $(".popup-contact form").hide();
                  },
                  data:$("#contactForm").serialize(),
                  success:function(data){
                     if(data.success==false)
                     {
                          $(".loading-msg").hide();
                         $(".popup-contact form").show();
                          $(".contact-message").show();
                        console.log("Error");
                        $.each(data.errors,function(index , error){
                                $(".contact-message").append("<li>"+error+"</li>");
                        });
                        $(".popup-contact").css("top","0");
                     }
                     else
                     {
                            $(".popup-contact form").hide();
                            $(".popup-contact .msg-success").show();
                            $(".loading-msg").hide();
                     }
                   
                  },
                  error:function(){
                      alert("Something Wrong , Please Contact Developer");
                  }
              })
            })
            $(".popup-contact .fa").click(function(){
                $(".popup-contact").hide();
            })

            $("#btnContact").click(function(){
               $(".popup-contact").show();
            })