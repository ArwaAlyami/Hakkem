<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Research Details</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/UniversityPages/FM_Researcher/My_Profile.css') }}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/UniversityPages/FM_Researcher/My_Researches.css') }}">
     <script src="{{ asset('hakkem/javascript/University/FM_Researcher/My_Profile.js') }}" defer></script> 
</head>
<body>
    <div class="container">
      <main class="profile-content">
        <div class="file-box">
          <form id="profile-form" enctype="multipart/form-data">
            
            <section style="padding: 20px;">
              <label for="file">Full Research: </label>
                <iframe src="{{ asset('storage/4/Lecture-4_Complete.pdf') }}" width="1300px" height="1000px" style="display: block; margin: auto; border: none;"></iframe>
              </section>

          </form>
        </div>
      </main>
    </div>
  </body>
</html>
