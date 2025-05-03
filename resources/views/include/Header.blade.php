    <!-- HEADER -->
    <div class="center">
      <header>
        <div class="logo-placeholder">
          <img src="{{ asset('hakkem/images/White-logo.png') }}" alt="logo" />
          <h1 class="brandname">HAKKEM</h1>
        </div>
        <div class="nav">
          <div class="nav-cont">

            <a href="{{ route('Main_Pages.Home')}}">
            <p class="navigate">Home</p>
            </a>

            {{-- <a href="{{route('Main_Pages.chat')}}">
            <p class="navigate">Chat</p>
            </a> --}}
             
            {{-- <a href="#">
            <p class="navigate">Offers</p>
            </a> --}}

            <a href="{{route('Main_Pages.Journals')}}">
            <p class="navigate">Journals</p>
            </a>

          </div>
          <a href="{{route('Main_Pages.Profile')}}">
          <img src="{{ asset('/hakkem/images/Header_Footer/profile_light.png') }}" class="profile" />
          </a>
          
        </div>
      </header>
    </div>