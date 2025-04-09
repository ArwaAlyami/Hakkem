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
    <header>
      <div class="container">
        <div class="logo-section">
          <img src="{{ asset('hakkem/images/Dark-logo.png')}}" alt="Hakkem Logo" class="logo"/>
          <p class="brand-name">HAKKEM</p>
        </div>
      </div>
    </header>

    <div class="form-container">
      <div class="form-background">
        <h2>Create Account</h2>
        <form>
          <input type="text" placeholder="First Name" id="" required />
          <input type="text" placeholder="Last Name" id="" required />
          <input type="text" placeholder="University Name" id="" required />
          <input type="email" id="email" placeholder="Main Email" id="" required oninput="validateEmail()"/>
          <p id="emailError" class="error-message"></p>

          <div class="password-container">
            <input type="password" id="password" placeholder="Password" id="" required/>
            <span class="toggle-password" onclick="togglePassword()"></span>
          </div>
          <input type="password" placeholder="Confirm Password" id="" required />

          <div class="file-upload-container">
            <input type="file" id="universityLogo" accept=".pdf, .png, .jpg, .jpeg" id="" hidden/>
            <input type="text" id="fileText" placeholder="Attach University Logo (PDF, PNG, JPG, JPEG)" readonly/>
            <label for="universityLogo" class="file-upload-icon">📤</label>
          </div>

          <a href="{{-- route('Main_Pages.Home')--}}">
            <button type="submit" class="signup-btn">
            SIGN UP
          </button>
        </a>
        </form>
      </div>
    </div>

    <script src="{{ asset('hakkem/javascript/SignIn.js')}}"></script>
  </body>
</html>
