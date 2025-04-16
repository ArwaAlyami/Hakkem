<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/MainPages/SignIn-SignUp/UniversitySignUpForm.css')}}"/>
    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Gravitas+One&display=swap" rel="stylesheet"/>
  </head>

  <body>
    <div class="container">
      <header>
        <div class="logo-section">
          <img src="{{ asset('hakkem/images/Dark-logo.png')}}" alt="Hakkem Logo" class="logo"/>
          <p class="brand-name">HAKKEM</p>
        </div>
      </header>
    </div>

    <div class="form-container">
      <div class="form-background">

        <h2>Create Your Account ..</h2>
        <form action="{{ route('admin.register')}}" method="post" enctype="multipart/form-data">

            {{ csrf_field() }}
            {{ method_field('post') }}

          <input type="text" name="f_name" placeholder="Frist Name" required />
          <input type="text" name="l_name" placeholder="Last Name" required />
          <input type="text" name="phone" placeholder="Phone" required />


          <input type="email" placeholder="Email" name="email" required oninput="validateEmail()"/>
          <p id="emailError" class="error-message"></p>

          <input type="password" name="password" placeholder="Passowrd" required />



          <button type="submit" class="signup-btn" onclick="redirectToNextPage()">
            SIGN UP
          </button>

          <p class="signup-text">Already have an account?<a class="link" href="{{route('admin.SignIn-get')}}"> <strong>Sign In</strong> </a></p>

        </form>
      </div>
    </div>

    <script src="{{ asset('hakkem/javascript/SignIn.js')}}"></script>
  </body>
</html>
