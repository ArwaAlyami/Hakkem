<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Researcher & Reviewer Sign Up</title>
  <link rel="stylesheet" href="{{ asset('hakkem/css/MainPages/SignIn-SignUp/IndividualSignUpForm.css')}}">
  <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Gravitas+One&display=swap" rel="stylesheet">
</head>

<body>


  <header>
    <div class="container">
      <div class="logo-section">
        <img src="{{ asset('hakkem/images/Dark-logo.png')}}" alt="Hakkem Logo" class="logo">
        <p class="brand-name">HAKKEM</p>
      </div>
    </div>
  </header>


  <div class="form-container">
    <div class="form-background">
      <h2>Create Account</h2>
      <form>

        <input type="email" id="email" placeholder="Email" required oninput="validateEmail()">
        <p id="emailError" class="error-message"></p>


        <select id="qualification" required>
          <option value="" disabled selected>Select your academic qualification</option>
          <option value="Bachelor">Bachelor</option>
          <option value="Master">Master</option>
          <option value="PhD">PhD</option>
        </select>
        <input type="text" id="bachelor" placeholder="Specialization at Bachelor" disabled>
        <input type="text" id="master" placeholder="Specialization at Masters"detailed >
        <input type="text" id="phd" placeholder="Specialization at PhD" disabled>
        <button type="submit" class="signup-btn" onclick="redirectToNextPage()">SIGN UP</button>
      </form>
    </div>

    
    </form>
  </div>
  </div>

  <script src="{{ asset('hakkem/javascript/SignIn.js')}}"></script>

</body>

</html>