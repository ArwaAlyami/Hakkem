<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>About Hakkem</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#000000" />
    <link
      rel="stylesheet"
      type="text/css"
      href={{ asset('hakkem/css/MainPages/Main/AboutUs.css') }}
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Gravitas+One&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- header section -->
    <div class="center">
      <header>
        <div class="logo-placeholder">
          <img src={{ asset('hakkem/images/Dark-logo.png') }} alt="logo" />
          <h1 class="brandname">HAKKEM</h1>
        </div>
        <div class="nav">
          <div class="nav-cont">
            {{-- <a href="{{route('Auth.Home')}}"><p class="navigate">Home</p></a>
            <a href="{{route('Main_Pages.')}}"><p class="navigate">Chat</p></a>
            <a href="{{route('Main_Pages.')}}"><p class="navigate">Offers</p></a> --}}

            {{-- <a href="route('Main_Pages.')"><p class="navigate">Journals</p></a> --}}
            
          {{-- </div>
          <a href="{{route('Main_Pages.')}}"><img src="{{ asset('hakkem/images/Header_Footer/profile_dark.png') }}" class="profile"/></a>
        </div> --}}

      </header>
    </div>

    <!-- hero section -->
    <section class="section-1">
      <div class="overlap">
        <div class="team-image"></div>
        <section class="box">
          <div class="overlap-group">
            <h1 class="text-wrapper">
              Revolutionizing the Peer-Review Process Where Innovation Meets
              Precision...
            </h1>
          </div>
        </section>
      </div>
    </section>

    <!-- Who Are We Section -->
    <div class="section-2">
      <div class="container">
        <div class="content">
          <h1 class="title">Who Are We?</h1>
          <div class="title-separator"></div>
          <p class="text">
            At Hakam, we strive to simplify the process of peer-reviewing
            scientific and academic research through a secure and comprehensive
            platform. Our goal is to foster collaboration between researchers
            and academic reviewers while offering innovative solutions to
            enhance the quality of research and accelerate its publication.
          </p>
        </div>
        <div class="section-img">
          <img src="{{ asset('hakkem/images/About-us/aboutus-section2.png') }}"/>
        </div>
      </div>
    </div>

    <!-- vision mission section -->
    <div class="section-2">
      <div class="container">
        <div class="section-img">
          <img src={{ asset('hakkem/images/About-us/aboutus-section3.png') }} />
        </div>
        <div class="content">
          <h1 class="title">Our Vision</h1>
          <div class="title-separator"></div>
          <p class="text">
            To become the leading global platform in academic research
            peer-reviewing, supporting innovation and transparency in scientific
            research.
          </p>
        </div>
      </div>
    </div>

    <!-- mission section -->
    <div class="section-2">
      <div class="container">
        <div class="content">
          <h1 class="title">Our Mission</h1>
          <div class="title-separator"></div>
          <p class="text">
            To empower researchers and reviewers with advanced technological
            tools that facilitate the review and peer-review process,
            contributing to the effective dissemination of knowledge.
          </p>
        </div>
        <div class="section-img">
          <img src={{ asset('hakkem/images/About-us/aboutus-section4.png') }} />
        </div>
      </div>
    </div>

    <!-- values section -->
    <div class="section-3">
      <div class="values">
        <h1 class="title">Our Values</h1>
        <div class="row">
          <!-- Professionalism Box -->
          <div class="values-box">
            <div class="icon-wrapper">
              <img
                src={{ asset('hakkem/images/About-us/aboutus-img-1.png') }}
                alt="Professionalism Icon"
                class="user-profile__image"
              />
            </div>
            <div class="box-cont">
              <h3>Professionalism</h3>
              <p>Delivering accurate and reliable services.</p>
            </div>
          </div>

          <!-- Transparency Box -->
          <div class="values-box">
            <div class="icon-wrapper">
              <img
                src={{ asset('hakkem/images/About-us/aboutus-img-2.png') }}
                alt="Professionalism Icon"
                class="user-profile__image"
              />
            </div>
            <div class="box-cont">
              <h3>Transparency</h3>
              <p>Building trust between researchers and reviewers.</p>
            </div>
          </div>

          <!-- Innovation Box -->
          <div class="values-box">
            <div class="icon-wrapper">
              <img
                src={{ asset('hakkem/images/About-us/aboutus-img-3.png') }}
                alt="Professionalism Icon"
                class="user-profile__image"
              />
            </div>
            <div class="box-cont">
              <h3>Innovation</h3>
              <p>
                Adopting technological solutions to enhance the peer-reviewing
                process.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- why choose us section -->
    <div class="section-4">
      <div class="choose-cont">
        <h1 class="title">Why Choose Us?</h1>
        <h2>
          We provide innovative tools and expert support <br />
          to enhance the research evaluation process
        </h2>

        <div class="choose-row">
          <div class="choose-box">
            <h3>Flexible Interface</h3>
          </div>
          <div class="choose-box">
            <h3>
              Comprehensive<br />
              Reports
            </h3>
          </div>
          <div class="choose-box">
            <h3>Specialized <br />Support</h3>
          </div>
          <div class="choose-box">
            <h3>Efficient Process</h3>
          </div>
        </div>
      </div>
    </div>

    <!-- FOOTER -->
    <div class="center">
      <footer>
        <div class="left">
          <a href="#{{--{{route('Main_Pages.')}}--}}"><p class="Footer-link">Pivacy Policy</p></a>
          <p>|</p>
          <a href="{{route('About_Hakkem')}}"><p class="Footer-link">About Hakkem</p></a>
        </div>
        <div class="Mid">
          <p>© 2025 Hakkem. All Rights Reserved.</p>
        </div>
        <div class="right">
          <a href="#"><img src="{{ asset('hakkem/images/Header_Footer/ContactPhoneDark.png') }}"/></a>
          <a href="#"><img src="{{ asset('hakkem/images/Header_Footer/Contact-Email_dark.png') }}"/></a>
          <a href="#"><img src="{{ asset('hakkem/images/Header_Footer/Contact-X_dark.png') }}"/></a>
        </div>
      </footer>
    </div>
  </body>
</html>
