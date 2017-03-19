@extends('Admin.layout.main')


@section('style')
<link rel="stylesheet" href="{{asset('css/AdminVisite360.css')}}">
@endsection

@section('content')
<div class="sub-bar">
   <ul>
        
           <li>ADD NEW TOURDASH WEBSITE</li>
           <li>List of TOURDASH WEBSITES</li>
   </ul>
        
</div>
  <div class="container col-md-9">
         <div id="addTOUR">
                <form action="{{route('addVR')}}" method="POST" id="formlink">
                                {{csrf_field()}}
                                <div class="alert alert-danger" style="display:none"></div>
                                <div class="row">
                                <div class="col-md-2">
                                        <h5>Website Name :</h5>
                                </div>
                                <div class="col-md-8">
                                        <input type="text" class="form-control" name="name" id="name">
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-md-2">
                                        <h5>Link Example : </h5>
                                </div>
                                <div class="col-md-8">
                                        <h5><a href="" id="link">http://www.mlo-consulting.com/vr360/</a></h5>
                                </div>

                        </div>
                        <div class="row">
                                <div class="col-md-2">
                                        <h5>Link Website: </h5>
                                </div>
                                <div class="col-md-8">
                                        <input type="text" class="form-control" name="link">
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-md-2">
                                        <h5>Link TourDash : </h5>
                                </div>
                                <div class="col-md-8">
                                        <input type="text" class="form-control" name="tourdash">
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-md-2">
                                        <h5>Choose Color : </h5>
                                </div>
                                <div class="col-md-8">
                                        <input class="jscolor" value="ab2567" name="color">
                                </div>
                        </div>

                        
                        <div class="row">
                                <div class="col-md-7 col-md-offset-5">
                                        <button type="submit" id="btnsub">Generate TourDash Website</button>
                                </div>
                        </div>
                </form>
                <div class="loading">
                        
                                
                                <svg width='120px' height='120px' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="uil-squares"><rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect><rect x="15" y="15" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.0s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="40" y="15" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.125s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="65" y="15" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.25s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="15" y="40" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.875s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="65" y="40" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.375" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="15" y="65" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.75s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="40" y="65" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.625s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="65" y="65" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.5s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect></svg>

                                <h5>Please wait a moment , while generating link ... </h5>
                </div>
                <div class="success">
                        <h2>Success ! </h2>
                        <h4>Tourdash Website Link : </h4>
                        <a id="tourlink"></a>
                        <i class="fa fa-times" aria-hidden="true" id="exit"></i>

                </div>
         </div>

       <div id="listTour">

               <div class="input-group" id="search">
                <span class="input-group-addon" id="basic-addon1">Search </span>
                <input type="text" class="form-control" placeholder="Nam of TourDash" aria-describedby="basic-addon1">
                </div>
               <table class="table">
                        <thead class="thead-inverse">
                                <tr>
                                        <th>#</th>
                                        <th>Websites Name</th>
                                        <th>Link</th>
                                      
                                </tr>
                        </thead>
                        <tbody>
                        <!--COntenu-->
                        </tbody>
                        </table>
      </div>  

      <div class="load-data">
                  <svg width='120px' height='120px' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="uil-squares"><rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect><rect x="15" y="15" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.0s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="40" y="15" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.125s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="65" y="15" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.25s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="15" y="40" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.875s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="65" y="40" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.375" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="15" y="65" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.75s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="40" y="65" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.625s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="65" y="65" width="20" height="20" fill="#19b395" class="sq"><animate attributeName="fill" from="#19b395" to="#ffffff" repeatCount="indefinite" dur="1s" begin="0.5s" values="#ffffff;#ffffff;#19b395;#19b395" keyTimes="0;0.1;0.2;1"></animate></rect></svg>

      </div>
 </div>


@endsection


@section('script')
<!--Color Picker-->
<script src="{{asset('js/jscolor.min.js')}}"></script>
<script>
       
        $("#name" ).keyup(function()
        {
                $("#link").html("http://www.mlo-consulting.com/vr360/"+ $(this).val() +".php" );
               
        });
        $("#exit").click(function(){
                $(".success").hide();
        })
        $("#formlink").submit(function(e){
               e.preventDefault();
               $(".alert").html("");
              
               $.ajax({
                       type:"POST",
                       url:"{{route('addVR')}}",
                       data:$(this).serialize(),
                       beforeSend:function(){
                               $(".loading").show();
                       },
                       success:function(data){
                              $(".loading").hide();
                               if(data.success=="true")
                               {
                                      
                                     $(".alert").hide();
                                     $(".success").show();
                                      $("#tourlink").html(data.pathe);
                                      $("#tourlink").attr("href",data.pathe);
                                  
                               }
                               else
                               {
                                        $(".alert").show();
                                       $.each(data.errors,function(i,error){
                                            $(".alert").append('<li>'+error+'</li>');   
                                       })
                               }
                       },
                       error:function(){
                               alert("Something Wrong , Please Contact Developer");
                               $(".loading").hide();
                       }
               });
        })

        //click sub nav
         $(".sub-bar ul li").eq(0).click(function(){
                       $("#listTour").fadeOut();
                       $("#addTOUR").fadeIn();

               })
               $(".sub-bar li").eq(1).click(function(){
                       $("#addTOUR").fadeOut();
                         $("#listTour").fadeIn();
               })

         $(".sub-bar li").eq(1).click(function(){
                 $(".table tbody").html('');
                 $.get("{{route('getVR')}}",function(data){
                        
                        $.each(data,function(i,da){
                                $(".table tbody").append('<tr> <th scope="row">'+i+'</th> <td>'+da.name+'</td> <td> <a>'+da.link+'</a></td></tr> ');
                        })
                                                  
                                
                       
                 })     
         })



         $("#search input").keyup(function(){
                 var route = "{{route('shearchVR','')}}";
                 if($(this).val() == "")
                 {
                          $(".sub-bar li").eq(1).click();
                 }
                 else
                 {
                          $.ajax({
                         url:route + $(this).val(),
                         type:'GET',
                         beforeSend:function(){
                                  $(".table tbody").html('');
                                 $('.load-data').show();
                         },
                         success:function(data){      
                                  $('.load-data').hide(); 
                                  $(".table tbody").html('');
                                  $.each(data,function(i,index){
                                        $(".table tbody").append('<tr> <th scope="row">'+i+'</th> <td>'+data[i].name+'</td> <td> <a>'+data[i].name+'</a></td></tr> ');

                                  })
                         },
                         error:function(){
                                 alert("Something Wrong , Please Contact Developer");
                         }
                 })
                 }
                
              
         });
</script>
@endsection