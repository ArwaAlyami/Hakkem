<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User Type</title>
  <link rel="stylesheet" href="{{ asset('hakkem/css/MainPages/SignIn-SignUp/MainSignUpForm.css')}}" />
  <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Gravitas+One&display=swap" rel="stylesheet">
</head>
<body>
  <!-- اللوقو -->
  <header>
    <div class="container">
        <div class="logo-section">
            <img src="{{ asset('hakkem/images/Dark-logo.png')}}" alt="Hakkem Logo" class="logo">
            <p class="brand-name">HAKKEM</p>
        </div>
  </header>
        <h1>Welcome To HAKKEM ...</h1>
        <p>Select the User type ...</p>
  <!-- نوع المستخدم -->
<div class="user-type-container">

    <a href="{{-- route('admin.SignIn-get')--}}" class="user-type-btn" >IT Admin</a>
    <a href="{{-- route('admin.SignIn-get')--}}" class="user-type-btn" >Editor in Chief</a>
    <a href="{{-- route('admin.SignIn-get')--}}" class="user-type-btn" >Associated Editor</a>

</div>
</body>
</html>
