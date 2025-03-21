<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Get Started Page</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova:wght@700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova:wght@700&family=Inria+Sans:wght@700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Gravitas+One&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href= {{asset('hakkem/css/MainPages/Main/GetStarted.css')}} />
  </head>
  <body>
    <!-- Header -->
    <div class="center">
      <header class="header">
        <div class="logo-placeholder">
          <img src= {{ asset('hakkem/images/Dark-logo.png') }} alt="Logo" class="logo" />
          <p class="brand-name">HAKKEM</p>
        </div>
        <div class="nav-container" id="nav-container">
          <nav class="nav">
            {{-- <a href="#" class="nav-link">Home</a> --}}
            <a href="#{{--{{route('Main_Pages.')}}--}}" class="nav-link">Journals</a>
          </nav>

          <a href="{{route('Auth.MainSignInForm')}}" class="signIn-btn">Sign In</a>
          
        </div>
        <div class="menu-toggle" id="menu-toggle">☰</div>
        <div class="mobile-menu" id="mobile-menu">
          <a href="#" class="mobile-link">Home</a>
          <a href="#" class="mobile-link">Journals</a>
          <a href="#" class="mobile-signup-btn">
            Sign In
            </a>
        </div>
      </header>
    </div>

    <!-- الجزء الأول -->
    <section class="hero-section">
      <div class="text-overlay">
        <h1 class="title">
          Start <i>Your</i> Great <br />
          Journey!
        </h1>
        <p class="subtitle">TO REVIEW AND PUBLISH YOUR RESEARCHES...</p>
      </div>

      <a href="{{route('Auth.MainSignUpForm')}}" class="get-started-btn">
        <img src="{{ asset('hakkem/images/Get-Started/GetStarted_Arrow.svg') }}" alt="Arrow Icon" class="arrow-icon"/>
        GET STARTED NOW!
      </a>
    </section>

    <!-- الجزء الثاني -->
    <section class="get-started-section">
      <div class="get-started-container">
        <div class="get-started-text">
          <h1><span class="number">01</span></h1>
          <h2>GET STARTED</h2>
          <h3>Discover the Future of Peer Reviewing with Hakkem!</h3>
          <p>
            Take the first step towards streamlining your academic journey.
            Whether you're a researcher submitting your work or a reviewer
            providing invaluable feedback, Hakkem is here to simplify the
            process.
          </p>
        </div>
        <div class="get-started-image">
          <img
            src="{{ asset('hakkem/images/Get-Started/GetStarted-img3.png') }}" alt="Digital Review Illustration"/>
        </div>
      </div>
    </section>

    <!-- الجزء الثالث -->
    <section class="ai-review-section">
      <div class="ai-review-container">
        <div class="ai-review-image">
          <img
            src="{{ asset('hakkem/images/Get-Started/GetStarted-img4.png') }}" alt="AI Review Illustration"/>
        </div>
        <div class="ai-review-text">
          <h1><span class="number">02</span></h1>
          <h2>ARTIFICIAL INTELLIGENCE</h2>
          <h3>AI in Peer Review: Towards Smarter and More Accurate Judging!</h3>
          <p>
            In Hakkem, we use AI techniques to enhance the academic review
            experience by analyzing texts to detect errors, classifying
            research, matching them with suitable reviewers, and speeding up the
            review process to ensure efficiency and accuracy at every step.
          </p>
        </div>
      </div>
    </section>

    <!-- الجزء الرابع -->
    <section class="quality-assurance-section">
      <div class="quality-assurance-container">
        <div class="quality-assurance-text">
          <h1><span class="number">03</span></h1>
          <h2>QUALITY ASSURANCE</h2>
          <h3>Global Quality Standards at Your Fingertips!</h3>
          <p>
            At Hakkem, we are committed to the highest quality standards in
            academic research peer-reviewing. We provide tools that ensure
            precise evaluations, detailed reports to support reviewers'
            decisions, and a secure environment to protect the confidentiality
            and rights of researchers. Our goal is to foster trust and
            transparency in every review process.
          </p>
        </div>
        <div class="quality-assurance-image">
          <img
            src="{{ asset('hakkem/images/Get-Started/GetStarted-img5.png') }}" alt="Quality Assurance Illustration"/>
        </div>
      </div>
    </section>

    <!-- footer -->
    <div class="footer-separator"></div>
    <div class="center">
      <footer>

        <div class="left">
          <a href="#{{--{{route('Main_Pages.')}}--}}"><p class="Footer-link">Help</p></a>
          <p>|</p>
          <a href="#{{--{{route('Main_Pages.')}}--}}"><p class="Footer-link">FAQ</p></a>
          <p>|</p>
          <a href="#{{--{{route('Main_Pages.')}}--}}"><p class="Footer-link">Terms</p></a>
          <p>|</p>
          <a href="#{{--{{route('Main_Pages.')}}--}}"><p class="Footer-link">Pivacy Policy</p></a>
          <p>|</p>
          <a href="{{route('Main_Pages.About_Hakkem')}}"><p class="Footer-link">About Hakkem</p></a>
        </div>

        <div class="Mid">
          <p>© 2025 Hakkem. All Rights Reserved.</p>
        </div>

        <div class="right">
          <a href="#"><img src="{{ asset('hakkem/images/Header_Footer/ContactPhoneDark.png')}}" /></a>
          <a href="#"><img src="{{ asset('hakkem/images/Header_Footer/Contact-Email_dark.png')}}" /></a>
          <a href="#"><img src="{{ asset('hakkem/images/Header_Footer/Contact-X_dark.png')}}" /></a>
        </div>

        {{-- <div class="right">
          <img src="{{ asset('hakkem/images/Header_Footer/Payment-visaCard.png') }}" />
          <img src="{{ asset('hakkem/images/Header_Footer/Payment-applepay.svg') }}" />
          <img src="{{ asset('hakkem/images/Header_Footer/Payment-paypal.svg') }}"/>
        </div> --}}

      </footer>
    </div>
    <script src={{ asset('hakkem/javascript/Get.js') }}></script>
  </body>
</html>
