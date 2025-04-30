<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Hakkem - Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="{{ asset('hakkem/css/MainPages/Main/Home.css')}}"/>
    <link href="https://fonts.googleapis.com/css2?family=Gravitas+One&display=swap" rel="stylesheet"/>
  </head>

  <body>
    <div class="center">
      <header>
        <div class="logo-placeholder">
          <img src="{{ asset('hakkem/images/Dark-logo.png')}}" alt="logo" />
          <h1 class="brandname">HAKKEM</h1>
        </div>
        <div class="nav">
          <div class="nav-cont">
            <a href="{{route('Main_Pages.Home')}}"><p class="navigate">Home</p></a>
            <a href="{{route('Main_Pages.chat')}}"><p class="navigate">Chat</p></a>
            <a href="{{route('Main_Pages.Journals')}}"><p class="navigate">Journals</p></a>
          </div>
          <a href="{{route('Main_Pages.Profile')}}"><img src="{{ asset('hakkem/images/Header_Footer/profile_dark.png')}}" class="profile"/></a>
        </div>
      </header>
    </div>

    <!-- هذا الجزء الأول الي خلفيته صورة الروبوت -->
    <section class="section-1">
      <div class="welcoming">
        <h1 class="h1-head">
          Elevate Your Academic Journey with Confident Steps
        </h1>
        <div class="welcoming-row">
          <div class="line">____________</div>
          <h2 class="h2-head">Comprehensive services for</h2>
          <div class="line">____________</div>
        </div>
        <div class="welcoming-list">
          <p>✔ Research Peer-Review</p>
          <p>✔ Journal Publication</p>
          <p>✔ Academic Promotions</p>
        </div>
        <h1 class="h1-head">Delivered with Precision</h1>
      </div>
    </section>

    <!-- جزء طلب التحكيم المستقل -->
    <section class="section-2">
      <div class="section-title">
        <h1 class="h1-body">Choose Type of Request</h1>
      </div>
      <div class="decoration">
        <img src="{{ asset('hakkem/images/Home/Home_sec2_part3.svg')}}" class="under" />
        <img src="{{ asset('hakkem/images/Home/Home_sec2_part2.svg')}}" class="middle" />
        <img src="{{ asset('hakkem/images/Home/Home_review_request.svg')}}" class="over" />
      </div>
      <div class="content">
        <h2 class="h2-body">Preliminary Review Request</h2>
        <h3 class="h3-body">By AI OR Indepandent Reviewer</h3>
        <p class="p-body">
          Prepare your research for publication by ensuring it adheres to the
          <br />
          necessary guidelines and standards. We help you finalise your <br />
          research, ensuring it's ready to be shared with the scientific
          community.
        </p>

        @can('send_request')
        <a href="{{route('Requests.ReviewRequest.ReviewOptions')}}"><button id="review-req" class="req-btn">Send Request</button></a>
        @endcan

      </div>
    </section>

    <!-- جزء طلب النشر -->
    <section class="section-3">
      <div class="content-r">
        <h2 class="h2-body">Publish Research Request</h2>
        <h3 class="h3-body">By choosing the appropriate scientific journal</h3>
        <p class="p-body">
          Facilitate the publication of your research by <br />
          submitting it directly to the journal of your choice. We <br />
          ensure your work is prepared according to the journal's <br />
          specific guidelines for a seamless submission process.
        </p>

        @can('send_request')
        <a href="{{ route('Requests.PublishRequest.index') }}"><button id="review-req" class="req-btn">Send Request</button></a>
        @endcan 

      </div>
      <div class="decoration-r">
        <img src="{{ asset('hakkem/images/Home/Home_sec2_part3.svg')}}" class="under-r" />
        <img src="{{ asset('hakkem/images/Home/Home_sec2_part1.svg')}}" class="middle-r" />
        <img src="{{ asset('hakkem/images/Home/Home_publish_request.svg')}}" class="over-r"/>
      </div>
    </section>

    <!-- جزء طلب الترقيات -->
    <section class="section-4">
      <div class="decoration">
        <img src="{{ asset('hakkem/images/Home/Home_sec2_part3.svg')}}" class="under" />
        <img src="{{ asset('hakkem/images/Home/Home_sec2_part2.svg')}}" class="middle" />
        <img src="{{ asset('hakkem/images/Home/Home_promotion_request.svg')}}" class="over"/>
      </div>
      <div class="content">
        <h2 class="h2-body">Promotion Request</h2>
        <h3 class="h3-body">Your Search academic promotion portal</h3>
        <p class="p-body">
          Advance your academic career with our promotion request service.
          <br />
          Submit your research to meet the requirements of the scientific
          council <br />
          and achieve your next academic rank with confidence.
        </p>

        @can('send_request')
        <a href="{{route('Requests.PromotionRequest.index')}}"><button id="review-req" class="req-btn">Send Request</button></a>
        @endcan 

      </div>
    </section>

    <!-- FOOTER -->
    <div class="center">
      <footer>

        <div class="left">
          <a href="{{--{{route('Main_Pages.')}}--}}"><p class="Footer-link">Pivacy Policy</p></a>
          <p>|</p>
          <a href="{{route('About_Hakkem')}}"><p class="Footer-link">About Hakkem</p></a>
        </div>

        <div class="Mid">
          <p>© 2025 Hakkem. All Rights Reserved.</p>
        </div>

        <div class="right">
          <a href="#"><img src="{{ asset('hakkem/images/Header_Footer/ContactPhoneDark.png')}}" /></a>
          <a href="#"><img src="{{ asset('hakkem/images/Header_Footer/Contact-Email_dark.png')}}" /></a>
          <a href="#"><img src="{{ asset('hakkem/images/Header_Footer/Contact-X_dark.png')}}" /></a>
        </div>

      </footer>
    </div>
  </body>

  <script src="{{ asset('hakkem/javascript/Overlay.js')}}"></script>
</html>
