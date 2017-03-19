
<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8" />
<head>
<title>Free HTML5 CSS3 Responsive Login Signup Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="  {!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('/css/AdmineLogin.css')}}">
</head>
<body>
    <div class="form">
                <div class="header">
                      <h2>Login</h2></div>
                        @if(Auth::check())
                           
                        @endif
                        <div class="login">
                        @if(session('error'))
                            <div class="alert alert-danger">
                                    {{session('error')}}
                            </div>
                            
                        @endif
                       
                        
                        <form action="{{route('AdminLogin')}}" method="POST">
                        {{csrf_field()}}
                        <ul>
                        <li>
                        <span class="un"><i class="fa fa-user"></i></span><input type="text" name="email" required class="text" placeholder="Email"/></li>
                        <li>
                        <span class="un"><i class="fa fa-lock"></i></span><input type="password"  name="password" required class="text" placeholder="Password"/></li>
                        <li>
                        <input type="submit" value="LOGIN" class="btn">
                        </li>
                        <li><div class="span"><span class="ch"><input type="checkbox" id="r"> <label for="r">Remember Me</label> </span> </li>
                        </ul>
                        </form>
                    
                        </div><br/>
                       
                </div>
                 <div class="copyright" style="position:absolute;color:white;width:50%;margin:0 auto;left:0;right:0;text-align:center;font-size:30px;bottom:10px">MLO-CONSULTING.COM</div>
    </div>
</body>
</html>