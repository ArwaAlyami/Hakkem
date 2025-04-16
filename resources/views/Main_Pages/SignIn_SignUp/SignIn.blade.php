<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In to Hakkem</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/MainPages/SignIn-SignUp/MainSignInForm.css')}}"/>
    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Gravitas+One&display=swap" rel="stylesheet"/>
  </head>

  <body>
    <div class="container">
      <div class="logo-section">
        <img src="{{ asset('hakkem/images/Dark-logo.png')}}" alt="Hakkem Logo" class="logo"/>
        <p class="brand-name">HAKKEM</p>
      </div>
    </div>

    <div class="form-container">
      <div class="form-background">
        <h2 class="form-title">Sign In to your account</h2>
        <form action="{{ route('admin.SignIn') }}" method="post" enctype="multipart/form-data">

            {{ csrf_field() }}
            {{ method_field('post') }}
            <input type="hidden" name="type" value="{{ $type }}">
          <input class="inp" type="email" name="email" placeholder="Email" required />
          <input type="password" placeholder="Password" name="password" required />
          
             <h3 class="link" id="forgot-Pass">Forgot your Password?</h3>

          <button type="submit">SIGN IN</button>
          <p class="signup-text">Don't have an account?<a class="link" href="{{route('admin.SignUp')}}">Sign Up</a></p>
        </form>
      </div>
    </div>
  </body>
  <script src="{{ asset('hakkem/javascript/SignIn.js')}}"></script>
</html>
