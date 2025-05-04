<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="{{ asset('/hakkem/css/Header-Footer.css') }}" />
</head>

<body>
  <!-- FOOTER -->
  <div class="center">
    <footer>
      <div class="left">
        
        <p class="Footer-link">Pivacy Policy</p>
        <p>|</p>

        <a href="{{route('About_Hakkem')}}">
        <p class="Footer-link">About Hakkem</p>
        </a>

      </div>
      <div class="Mid">
        <p>© 2025 Hakkem. All Rights Reserved.</p>
      </div>
      <div class="right">

        {{-- <img src="{{ asset('/hakkem/images/Header_Footer/Contact-Phone_light.png')}}" /> --}}

        <a href="mailto:hakkemplatform@gmail.com" target="_blank"><img src="{{ asset('/hakkem/images/Header_Footer/Contact-Email_light.png')}}" /></a>

        <a href="https://x.com/HakkemPlatform" target="_blank"><img src="{{ asset('/hakkem/images/Header_Footer/Contact-X_light.png')}}" /></a>

      </div>
    </footer>
  </div>
</body>

</html>