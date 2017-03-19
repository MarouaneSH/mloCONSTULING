<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demandedevis;
use Auth;
use Validator;
use Illuminate\Support\Facades\Storage;
use App\visite360;
use Response;
use Illuminate\Database\Eloquent\Builder;


class AdminController extends Controller
{
    public function index()
    {
         $demande= Demandedevis::paginate(3);
       
        return view('Admin.index',["demande"=>$demande]);

    }
 
    public function indexNav($name)
    {
	//dd(public_path());
        if($name=="visite360")
        {
             return view('Admin.visite360');
        }
        return "ss";
    }

    public function getDemande($id){
        // if(Request::ajax())
        // {
            $demande = Demandedevis::all();
            
            return $demande->find($id);       
    }



    public function login(Request $request){
        
        if(Auth::attempt(['email' => $request->email ,'password'=> $request->password])) {
             Auth::loginUsingId(1);
              return redirect("Admin/dashboard");
        }

        return redirect()->back()->with("error","Password Or Email Incorrect");
       
    }

    public function getVR(){
        $vr = visite360::all();
        return Response::json($vr);
    }

    public function shearchVR($name)
    {   
           $vr=visite360::where('name','like',$name.'%')->get();


       return $vr;
    }

    public function addVR(Request $request)
    {
       
         $validation = Validator::make($request->all(),
          [
                "name"=> "required|max:40",
                "tourdash"=> "required|url",
                "link"=>"required|url",

          ]);
          
          if($validation->fails())
          {
              return [
                  "success"=>"false",
                  "errors"=> $validation->errors(),
                 
                  ];
          }

         Storage::disk('public')->put($request->name.'.php',$this->websitecontent($request->tourdash, $request->name , $request->link, $request->color));
         $visite = new visite360();
         $visite->name =  $request->name;
         $visite->link=url("/")."/vr360/".$request->name.".php";
         $visite->save();
         return ["success"=> "true", "pathe"=>$visite->link];
    }
 

      public function websitecontent($linkTourdash , $websitename , $websiteLink , $color)
      {
          return '<!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <title>'.$websitename.'</title>
                            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                            <link href="https://fonts.googleapis.com/css?family=Cantarell" rel="stylesheet">
                            <style>
                            body
                            {
                                overflow: hidden;
                                height: 100%;
                            }
                            *{
                                margin: 0;
                                padding: 0;
                                font-family:"Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
                            }
                            #view360{
                                width: 100%;
                                height: 100vh;
                                position: absolute;
                            }
                            #btnView , #websiteview
                            {
                                position: absolute;
                                z-index: 100;
                            }
                            #websiteview
                            {
                                    width: 330px;
                                    height: 400px;
                                    right: 80px;
                                    top: 30px;

                                
                            }
                            #websiteview iframe
                            {
                                height: 400px;
                                
                                width: 100%;
                                
                            }
                            #websiteview button
                            {
                                margin: 0;
                                width: 100%;
                                height: 40px;
                                display: none;
                                margin-top: -5px;
                            }
                            button{
                                background: #'.$color.';
                                color: white;
                                border: none;
                                cursor: pointer;
                            }
                            #return360{
                                    cursor: pointer;
                                    position: absolute;
                                    bottom: 0;
                                    right: 0;
                                    background: #'.$color.';
                                    color: white;
                                    padding: 10px 20px;
                                    border-top-right-radius: 20px;
                                    border-top-left-radius: 20px;
                                    border-bottom: solid #ffffff 4px;
                                    z-index: 300;
                                    display: none;
                            }
                            #hideAds
                            {
                                z-index: 20;
                                
                                height: 90px;
                                text-align: center;
                                position: absolute;
                                bottom: 25px;
                                    width: 70%;
                                    margin: 0 auto;
                                    left: 0;
                                    right: 0;
                            }
                            #panelAd
                            {
                                background: #0A1429;
                                width: 780px;
                                height: 100%;
                                margin: 0 auto;
                                    border: solid white 1px;
                            
                            color: white;
                            }
                            #panelAd button
                            {
                                    border:solid;
                                    padding: 20px 15px;
                                    border-radius: 10px;
                                    display: inline-block;
                                
                                        margin-top: 10px;
                                        margin-left: 20px;
                            }
                            #panelAd h3
                            {
                                display: inline-block;
                            }
                            #exitbutton
                            {
                                    position: absolute;
                                        top: 0;
                                        font-size: 30px;
                                        color: white;
                                        margin-left: -40px;
                                        background: #'.$color.';
                                        padding: 10px;
                            }
                            #webtoggle
                            {
                                        z-index: 9999;
                                        
                                        top: 0;
                                        position: absolute;
                                        right: 7%;
                                        display:none;
                            }
                            #webtoggle button
                            {
                                    padding: 8px 80px;
                            }


                            *{
                                font-family: "Cantarell", sans-serif;

                            }
                            .loading{
                                background: #'.$color.';
                                height: 100vh;
                                width: 100%;
                                overflow: hidden;
                                z-index:999;
                                position:absolute;
                            }
                            .load
                            {
                                position: absolute;
                                top: 0;
                                width: 20%;
                                left: 0;
                                right: 0;
                                margin:  auto;
                                bottom: 0;
                                color: white;
                                height: 200px;
                                text-align: center;
                                z-index: 98999;
                               
                                height:200px;
                                text-align:center;
                                
                            }
                            
                            @-webkit-keyframes uil-ellipsis {
                        0% {
                            -ms-transform: scale(0);
                            -moz-transform: scale(0);
                            -webkit-transform: scale(0);
                            -o-transform: scale(0);
                            transform: scale(0);
                            left: 0px;
                            opacity: 1;
                        }
                        12.5% {
                            -ms-transform: scale(1);
                            -moz-transform: scale(1);
                            -webkit-transform: scale(1);
                            -o-transform: scale(1);
                            transform: scale(1);
                        }
                        25% {
                            left: 0px;
                        }
                        37.5% {
                            left: 70px;
                        }
                        50% {
                            left: 70px;
                        }
                        62.5% {
                            left: 140px;
                        }
                        75% {
                            left: 140px;
                            -ms-transform: scale(1);
                            -moz-transform: scale(1);
                            -webkit-transform: scale(1);
                            -o-transform: scale(1);
                            transform: scale(1);
                        }
                        87.5% {
                            left: 140px;
                            -ms-transform: scale(0);
                            -moz-transform: scale(0);
                            -webkit-transform: scale(0);
                            -o-transform: scale(0);
                            transform: scale(0);
                            opacity: 1;
                        }
                        100% {
                            left: 140px;
                            opacity: 0;
                        }
                        }
                        @-webkit-keyframes uil-ellipsis {
                        0% {
                            -ms-transform: scale(0);
                            -moz-transform: scale(0);
                            -webkit-transform: scale(0);
                            -o-transform: scale(0);
                            transform: scale(0);
                            left: 0px;
                            opacity: 1;
                        }
                        12.5% {
                            -ms-transform: scale(1);
                            -moz-transform: scale(1);
                            -webkit-transform: scale(1);
                            -o-transform: scale(1);
                            transform: scale(1);
                        }
                        25% {
                            left: 0px;
                        }
                        37.5% {
                            left: 70px;
                        }
                        50% {
                            left: 70px;
                        }
                        62.5% {
                            left: 140px;
                        }
                        75% {
                            left: 140px;
                            -ms-transform: scale(1);
                            -moz-transform: scale(1);
                            -webkit-transform: scale(1);
                            -o-transform: scale(1);
                            transform: scale(1);
                        }
                        87.5% {
                            left: 140px;
                            -ms-transform: scale(0);
                            -moz-transform: scale(0);
                            -webkit-transform: scale(0);
                            -o-transform: scale(0);
                            transform: scale(0);
                            opacity: 1;
                        }
                        100% {
                            left: 140px;
                            opacity: 0;
                        }
                        }
                        @-moz-keyframes uil-ellipsis {
                        0% {
                            -ms-transform: scale(0);
                            -moz-transform: scale(0);
                            -webkit-transform: scale(0);
                            -o-transform: scale(0);
                            transform: scale(0);
                            left: 0px;
                            opacity: 1;
                        }
                        12.5% {
                            -ms-transform: scale(1);
                            -moz-transform: scale(1);
                            -webkit-transform: scale(1);
                            -o-transform: scale(1);
                            transform: scale(1);
                        }
                        25% {
                            left: 0px;
                        }
                        37.5% {
                            left: 70px;
                        }
                        50% {
                            left: 70px;
                        }
                        62.5% {
                            left: 140px;
                        }
                        75% {
                            left: 140px;
                            -ms-transform: scale(1);
                            -moz-transform: scale(1);
                            -webkit-transform: scale(1);
                            -o-transform: scale(1);
                            transform: scale(1);
                        }
                        87.5% {
                            left: 140px;
                            -ms-transform: scale(0);
                            -moz-transform: scale(0);
                            -webkit-transform: scale(0);
                            -o-transform: scale(0);
                            transform: scale(0);
                            opacity: 1;
                        }
                        100% {
                            left: 140px;
                            opacity: 0;
                        }
                        }
                        @-ms-keyframes uil-ellipsis {
                        0% {
                            -ms-transform: scale(0);
                            -moz-transform: scale(0);
                            -webkit-transform: scale(0);
                            -o-transform: scale(0);
                            transform: scale(0);
                            left: 0px;
                            opacity: 1;
                        }
                        12.5% {
                            -ms-transform: scale(1);
                            -moz-transform: scale(1);
                            -webkit-transform: scale(1);
                            -o-transform: scale(1);
                            transform: scale(1);
                        }
                        25% {
                            left: 0px;
                        }
                        37.5% {
                            left: 70px;
                        }
                        50% {
                            left: 70px;
                        }
                        62.5% {
                            left: 140px;
                        }
                        75% {
                            left: 140px;
                            -ms-transform: scale(1);
                            -moz-transform: scale(1);
                            -webkit-transform: scale(1);
                            -o-transform: scale(1);
                            transform: scale(1);
                        }
                        87.5% {
                            left: 140px;
                            -ms-transform: scale(0);
                            -moz-transform: scale(0);
                            -webkit-transform: scale(0);
                            -o-transform: scale(0);
                            transform: scale(0);
                            opacity: 1;
                        }
                        100% {
                            left: 140px;
                            opacity: 0;
                        }
                        }
                        @-moz-keyframes uil-ellipsis {
                        0% {
                            -ms-transform: scale(0);
                            -moz-transform: scale(0);
                            -webkit-transform: scale(0);
                            -o-transform: scale(0);
                            transform: scale(0);
                            left: 0px;
                            opacity: 1;
                        }
                        12.5% {
                            -ms-transform: scale(1);
                            -moz-transform: scale(1);
                            -webkit-transform: scale(1);
                            -o-transform: scale(1);
                            transform: scale(1);
                        }
                        25% {
                            left: 0px;
                        }
                        37.5% {
                            left: 70px;
                        }
                        50% {
                            left: 70px;
                        }
                        62.5% {
                            left: 140px;
                        }
                        75% {
                            left: 140px;
                            -ms-transform: scale(1);
                            -moz-transform: scale(1);
                            -webkit-transform: scale(1);
                            -o-transform: scale(1);
                            transform: scale(1);
                        }
                        87.5% {
                            left: 140px;
                            -ms-transform: scale(0);
                            -moz-transform: scale(0);
                            -webkit-transform: scale(0);
                            -o-transform: scale(0);
                            transform: scale(0);
                            opacity: 1;
                        }
                        100% {
                            left: 140px;
                            opacity: 0;
                        }
                        }
                        @-webkit-keyframes uil-ellipsis {
                        0% {
                            -ms-transform: scale(0);
                            -moz-transform: scale(0);
                            -webkit-transform: scale(0);
                            -o-transform: scale(0);
                            transform: scale(0);
                            left: 0px;
                            opacity: 1;
                        }
                        12.5% {
                            -ms-transform: scale(1);
                            -moz-transform: scale(1);
                            -webkit-transform: scale(1);
                            -o-transform: scale(1);
                            transform: scale(1);
                        }
                        25% {
                            left: 0px;
                        }
                        37.5% {
                            left: 70px;
                        }
                        50% {
                            left: 70px;
                        }
                        62.5% {
                            left: 140px;
                        }
                        75% {
                            left: 140px;
                            -ms-transform: scale(1);
                            -moz-transform: scale(1);
                            -webkit-transform: scale(1);
                            -o-transform: scale(1);
                            transform: scale(1);
                        }
                        87.5% {
                            left: 140px;
                            -ms-transform: scale(0);
                            -moz-transform: scale(0);
                            -webkit-transform: scale(0);
                            -o-transform: scale(0);
                            transform: scale(0);
                            opacity: 1;
                        }
                        100% {
                            left: 140px;
                            opacity: 0;
                        }
                        }
                        @-o-keyframes uil-ellipsis {
                        0% {
                            -ms-transform: scale(0);
                            -moz-transform: scale(0);
                            -webkit-transform: scale(0);
                            -o-transform: scale(0);
                            transform: scale(0);
                            left: 0px;
                            opacity: 1;
                        }
                        12.5% {
                            -ms-transform: scale(1);
                            -moz-transform: scale(1);
                            -webkit-transform: scale(1);
                            -o-transform: scale(1);
                            transform: scale(1);
                        }
                        25% {
                            left: 0px;
                        }
                        37.5% {
                            left: 70px;
                        }
                        50% {
                            left: 70px;
                        }
                        62.5% {
                            left: 140px;
                        }
                        75% {
                            left: 140px;
                            -ms-transform: scale(1);
                            -moz-transform: scale(1);
                            -webkit-transform: scale(1);
                            -o-transform: scale(1);
                            transform: scale(1);
                        }
                        87.5% {
                            left: 140px;
                            -ms-transform: scale(0);
                            -moz-transform: scale(0);
                            -webkit-transform: scale(0);
                            -o-transform: scale(0);
                            transform: scale(0);
                            opacity: 1;
                        }
                        100% {
                            left: 140px;
                            opacity: 0;
                        }
                        }
                        @keyframes uil-ellipsis {
                        0% {
                            -ms-transform: scale(0);
                            -moz-transform: scale(0);
                            -webkit-transform: scale(0);
                            -o-transform: scale(0);
                            transform: scale(0);
                            left: 0px;
                            opacity: 1;
                        }
                        12.5% {
                            -ms-transform: scale(1);
                            -moz-transform: scale(1);
                            -webkit-transform: scale(1);
                            -o-transform: scale(1);
                            transform: scale(1);
                        }
                        25% {
                            left: 0px;
                        }
                        37.5% {
                            left: 70px;
                        }
                        50% {
                            left: 70px;
                        }
                        62.5% {
                            left: 140px;
                        }
                        75% {
                            left: 140px;
                            -ms-transform: scale(1);
                            -moz-transform: scale(1);
                            -webkit-transform: scale(1);
                            -o-transform: scale(1);
                            transform: scale(1);
                        }
                        87.5% {
                            left: 140px;
                            -ms-transform: scale(0);
                            -moz-transform: scale(0);
                            -webkit-transform: scale(0);
                            -o-transform: scale(0);
                            transform: scale(0);
                            opacity: 1;
                        }
                        100% {
                            left: 140px;
                            opacity: 0;
                        }
                        }
                        .uil-ellipsis-css {
                        background: none;
                        position: relative;
                        width: 200px;
                        height: 200px;
                        }
                        .uil-ellipsis-css .ib {
                        width: 100%;
                        height: 100%;
                        -ms-transform: rotate(0deg);
                        -moz-transform: rotate(0deg);
                        -webkit-transform: rotate(0deg);
                        -o-transform: rotate(0deg);
                        transform: rotate(0deg);
                        }
                        .uil-ellipsis-css .circle {
                        width: 60px;
                        height: 60px;
                        position: absolute;
                        top: 70px;
                        opacity: 0;
                        text-align: center;
                        -ms-animation: uil-ellipsis 1s linear infinite;
                        -moz-animation: uil-ellipsis 1s linear infinite;
                        -webkit-animation: uil-ellipsis 1s linear infinite;
                        -o-animation: uil-ellipsis 1s linear infinite;
                        animation: uil-ellipsis 1s linear infinite;
                        }
                        .uil-ellipsis-css .circle > div {
                        width: 60px;
                        height: 60px;
                        border-radius: 30px;
                        margin: 0px;
                        }
                        .uil-ellipsis-css .circle:nth-of-type(2n+1) > div {
                        background: #ffffff;
                        }
                        .uil-ellipsis-css .circle:nth-of-type(2n) > div {
                        background: #a8a8a8;
                        }
                        .circle:nth-of-type(1) {
                        -ms-animation-delay: 0s;
                        -moz-animation-delay: 0s;
                        -webkit-animation-delay: 0s;
                        -o-animation-delay: 0s;
                        animation-delay: 0s;
                        }
                        .circle:nth-of-type(2) {
                        -ms-animation-delay: 0.25s;
                        -moz-animation-delay: 0.25s;
                        -webkit-animation-delay: 0.25s;
                        -o-animation-delay: 0.25s;
                        animation-delay: 0.25s;
                        }
                        .circle:nth-of-type(3) {
                        -ms-animation-delay: 0.5s;
                        -moz-animation-delay: 0.5s;
                        -webkit-animation-delay: 0.5s;
                        -o-animation-delay: 0.5s;
                        animation-delay: 0.5s;
                        }
                        .circle:nth-of-type(4) {
                        -ms-animation-delay: 0.75s;
                        -moz-animation-delay: 0.75s;
                        -webkit-animation-delay: 0.75s;
                        -o-animation-delay: 0.75s;
                        animation-delay: 0.75s;
                        }
                        .uil-ellipsis-css
                        {

                        }
                            </style>
                            <div class="loading">
                                <div class="load">
                                    <div class="uil-ellipsis-css" style="transform:scale(0.6);z-index:9999;margin-left:30px"><div class="ib"><div class="circle"><div></div></div><div class="circle"><div></div></div><div class="circle"><div></div></div><div class="circle"><div></div></div></div></div>
                                    <h3>Get Your Website in 360</h3>
                                    </div>
                                
                            </div>
                        </head>
                        <body>
                            
                            <iframe id="view360"
                            src=" '.$linkTourdash .'"
                            width="100%"
                            height="600"
                            allowfullscreen="true"
                            webkitallowfullscreen="true"
                            mozallowfullscreen="true"
                            oallowfullscreen="true"
                            msallowfullscreen="true"
                            frameborder="0"
                            scrolling="no"
                            marginheight="0"
                            marginwidth="0" >
                        
                        </iframe>

                        
                            <div id="websiteview">
                                <iframe id="" src="'.$websiteLink.'" frameborder="0" marginheight="0"
                            marginwidth="0"  ></iframe>
                                <button>View Standard Website</button>
                                <h5><i class="fa fa-times" aria-hidden="true" id="exitbutton"></i></h5>
                            </div>

                          
                            <div id="return360">
                                <h4>View Website in 360</h4>
                                </div>
                                <div id="webtoggle">
                                <button>View Standard Website</button>
                                </div>
                            
                            <script
                        src="https://code.jquery.com/jquery-3.1.1.min.js"
                        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
                        crossorigin="anonymous"></script>
                            <script>
                            $(document).ready(function()
                        {


                        $("#websiteview button").show();
                        $("#websiteview button").click(function()
                        {
                            
                            $("#websiteview").css({
                                "width":"100%",
                                "height":"100%",
                                "top":"0",
                                "right":"0",
                            })
                            $("#websiteview iframe").animate({
                                "width":"100%",
                                "height":"100%",
                            },"slow")
                            $("#websiteview iframe").prop("frameborder", 0);
                            $("#websiteview button").hide();
                                $("#return360").show();

                        })

                        $("#return360").click(function()
                        {
                        $("#websiteview").css({
                                "width":"300px",
                                "height":"400px",
                                "top":"20px",
                                "right":"80px",
                        })
                            $("#websiteview iframe").prop("frameborder", 5);
                            $("#websiteview button").show();
                            $(this).hide();
                        })

                        $("#aviewportsizer").hide();

                        $("#exitbutton").click(function(){
                            $("#websiteview").slideToggle();
                            $("#webtoggle").fadeIn();
                        })

                        $("#webtoggle").click(function(){
                            $("#websiteview").slideToggle();
                            $("#webtoggle").fadeOut();
                        })

                        var interval = setInterval(function(){$(".loading").fadeOut();},4000);
                        window.setTimeout(function(){
                        clearInterval(interval);
                        }, 4500);

                        })
                                </script> 
                        
                        </body>

                        <div style="text-align: center;"><div style="position:relative; top:0; margin-right:auto;margin-left:auto; z-index:99999">

                        </div></div>
                        </html>';
      }

    


  
}
