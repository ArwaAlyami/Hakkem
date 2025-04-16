{{-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add New Research</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Header-Footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/UniversityPages/FM_Reviewer/My_Profile.css') }}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/UniversityPages/FM_Reviewer/My_Researches.css') }}">
    <link rel="stylesheet" href="{{ asset('hakkem/css/Sidebar.css') }}" />

     <script src="{{ asset('hakkem/javascript/University/FM_Researcher/My_Profile.js') }}" defer></script>
</head>
<body>
  @include('include.header')
    <div class="container">
      @include('include.rev-sidebar')
      <!-- المحتوى الرئيسي -->
      <main class="profile-content">
        <div class="profile-box">

          <form id="profile-form" method="post" action="{{ route('researcher-account.my-researches.store')}}" enctype="multipart/form-data">--}}

            {{-- {{ csrf_field() }}
            {{ method_field('post') }}  --}}


            {{-- <form action="{{ route('RevResAccount.SaveResearch') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <label>Title:</label>
                <input type="text" name="title" required>

                <label>DOI:</label>
                <input type="text" name="DOI">

                <label>Field:</label>
                <input type="text" name="field" required>

                <label>Keywords:</label>
                <input type="text" name="keywords">

                <label>Abstract:</label>
                <textarea name="abstract"></textarea>

                <label>Upload PDF:</label>
                <input type="file" name="pdf_file" accept="application/pdf">

                <button type="submit">Add Research</button>
            </form>



        </div>
      </main>
    </div>
    @include('include.footer')
  </body>
</html> --}}
