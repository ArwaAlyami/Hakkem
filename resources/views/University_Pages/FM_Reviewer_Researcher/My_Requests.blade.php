<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Requests - Hakkem</title>
<!-- ✅ CSS -->
<link rel="stylesheet" href="{{ asset('hakkem/css/UniversityPages/FM_Reviewer/My_Requests.css') }}" />
<link rel="stylesheet" href="{{ asset('hakkem/css/Header-Footer.css') }}" />
<link rel="stylesheet" href="{{ asset('hakkem/css/Sidebar.css') }}" />



<!-- ✅ JavaScript -->
<script src="{{ asset('hakkem/javascript/University/FM_Researcher/My_Requests.js') }}"></script>


  </head>
  <body>
    @include('include.header')

    <div class="container">

      @include('include.rev-sidebar')




      <main class="content">
        <div class="filter">
            <div class="filter">
                <a href="{{ route('my-requests') }}">
                  <button class="{{ is_null($type) ? 'active' : '' }}">All</button>
                </a>
                <a href="{{ route('my-requests', 'promotion') }}">
                  <button class="{{ $type === 'promotion' ? 'active' : '' }}">Promotion Requests</button>
                </a>
                <a href="{{ route('my-requests', 'publication') }}">
                  <button class="{{ $type === 'publication' ? 'active' : '' }}">Publish Requests</button>
                </a>
                <a href="{{ route('my-requests', 'review') }}">
                  <button class="{{ $type === 'review' ? 'active' : '' }}">Review Requests</button>
                </a>
              </div>
      </main>
    </div>

    @include('include.footer')
    </body>
</html>
