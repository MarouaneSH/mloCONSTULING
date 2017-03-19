 <?php
             $english = false;
            if(Request::is("en*"))
            {
              $english = true;
            }
 ?>
 
 
 <div class="row top-bar">
   <div class="col-md-4  col-sm-4 social">
     <a target="_blank" href="https://www.facebook.com/MLOConsulting"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> 
     <a target="_blank" href="https://plus.google.com/u/0/110662606036206172180/about"><i class="fa fa-google-plus-square" aria-hidden="true"></i> </a>
     <a target="_blank" href="https://www.linkedin.com/company/mlo-consulting"> <i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
     
    <i class="fa fa-phone-square" aria-hidden="true"> </i>
    <h6 style="font-size: 12px;display:inline-block;vertical-align: top;color:white">+41 22 510 21 14</h6>
 
   </div>
   <div class="col-md-8 col-sm-8 info">
     <ul class="about">
        @if($english == true)
        <li> <a target="_blank" href="{{url('en/FreeQuote')}}">Get Free Quote</a></li>
        @else
         <li> <a target="_blank" href="{{url('/DemandeDevis')}}">Demande Devis</a></li>
        @endif
       
        <li id="btnContact">Contact</li>
     </ul>
     
     <!--<ul id="langue">
        <li style="padding-left: 0px;">FR</li>
       <li>EN</li>
     </ul>-->
     
        <button class="btn btn-primary dropdown-toggle btn-langue" type="button" data-toggle="dropdown">
          <i class="fa fa-globe" aria-hidden="true" ></i>
          @if($english == true)
              <span>EN</span>
          @else
               <span>FR</span>
          @endif
          
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="{{url('/')}}">FR</a></li>
          <li><a href="{{route('en-index')}}">EN</a></li>
          
        </ul>
     
   </div>
 
     



 </div>
 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
      <div class="col-md-5 col-sm-5">
          <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                @if($english ==true)
                  <li><a href="{!! url('/en') !!}">HOME</a></li>
                  <li><a href="{!! url('/en') !!}#services">SERVICES</a></li>
                  <li><a href="{!! url('/en') !!}#cases">CASES</a></li>
                @else
                  <li><a href="{!! url('/') !!}">HOME</a></li>
                  <li><a href="{!! url('/') !!}#services">SERVICES</a></li>
                  <li><a href="{!! url('/') !!}#cases">CASES</a></li>
                @endif
              </ul>
            </div><!--/.nav-collapse -->
      </div>
       <div class="col-md-2 col-sm-2">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!--<a class="navbar-brand" href="#"><img src="img/logo2.png" class="" style="display:inline" width="70px" alt=""></a>-->
             <img src="{!! asset('img/logo2.png')!!}" class="" style="display:inline" width="70px" alt="" style="margin-top: 10px;">
            </div>
        </div>
        <div class="col-md-5 col-sm-5">
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-left" style="margin-left: -28px;">
               
                @if($english ==true)

                    <li><a href="{!! url('/en') !!}#mission">MISSION</a></li>
                    <li><a href="{!! url('/en') !!}#partners">PORTFOLIO</a></li>
                    <li><a href="{!! url('/en') !!}#About">ABOUT</a></li>
                @else
                    <li><a href="{!! url('/') !!}#mission">MISSION</a></li>
                    <li><a href="{!! url('/') !!}#partners">PORTFOLIO</a></li>
                    <li><a href="{!! url('/') !!}#About">ABOUT</a></li>
                @endif
              </ul>
            </div><!--/.nav-collapse -->
        </div>
      </div>
    </nav>
  

