<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <link href="  {!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">
    <link rel="stylesheet" href="  {!! asset('font-awesome/css/font-awesome.min.css') !!}">
     <link href="{{asset('css/Admin.css')}}" rel="stylesheet">
     @yield('style')
     
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
 
</head>
<body>
    <div class="nav-admin col-md-2">
        <h5>MLO-CONSULTING.COM</h5>
        <ul>
            
           
            
        </ul>
       <ul class="nav nav-pills nav-stacked">
            <?php $route = Route::currentRouteName() ?>
            <li><a href="{{route('dashboard')}}" @if($route == 'dashboard') class="active" @endif>DEMANDES DEVIS</a></li>
            <li><a href="{{route('dash','visite360')}}" @if($route == 'dash') class="active" @endif>TOURDASH</a></li>
            
        </ul>
    </div>
    <div class="col-md-3"></div>
    <div class="top-bar">
                
                <a href="{{route('AdminLogout')}}">Logout</a>
            </div>
          
@yield('content')



<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

@yield('script')

</body>
</html>