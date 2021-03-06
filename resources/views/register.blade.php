<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Material design sign up form</title>
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>

  <div id="login-box">
  <div class="left">
    <h1>Sign up</h1>
    
    <input type="text" name="username" placeholder="Username" />
    <input type="text" name="email" placeholder="E-mail" />
    <input type="password" name="password" placeholder="Password" />
    <input type="password" name="password2" placeholder="Retype password" />
    
    <a href="{{ route('homepage')}}"><input type="submit" name="signup_submit" value="Sign me up" /></a>
  </div>
  
  <div class="right">
    <span class="loginwith">Sign in with<br />social network</span>
    
    <button class="social-signin facebook">Log in with facebook</button>
    <button class="social-signin twitter">Log in with Twitter</button>
    <button class="social-signin google">Log in with Google+</button>
  </div>
  <div class="or">OR</div>
</div>
</body>

</html>
