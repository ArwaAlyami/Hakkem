<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Researcher Profile</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/UniversityPages/FM_Researcher/My_Profile.css') }}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/UniversityPages/FM_Researcher/My_Researches.css') }}">
     <script src="{{ asset('hakkem/javascript/University/FM_Researcher/My_Profile.js') }}" defer></script> 
</head>
<body>
    <div class="container">
      <!-- المحتوى الرئيسي -->
      <main class="profile-content">
        <div class="profile-box">
    
          <form id="profile-form" method="post" action="{{ route('Account.my-researches.store')}}" enctype="multipart/form-data">

            {{ csrf_field() }}
            {{ method_field('post') }}
            

          <div class="form-group3">
              <label for="title">Title: </label>
              <input type="text" name="title"/>
            </div>

            <div class="form-group3">
              <label for="keywords">Keywords: </label>
              <input type="text" name="keywords" />
            </div>

            <div class="form-group3">
              <label for="field">Field: </label>
              <input type="text" name="field" />
            </div>

            <div class="">
              <label for="abstract">Abstract: </label>
              <textarea class="sub-box fixed-textarea" name="abstract" ></textarea>
            </div>

            <div class="">
              <label for="DOI">DOI: </label>
              <textarea class="sub-box DOI-textarea" name="DOI"></textarea>
            </div>


            <div class="form-group">
              <label for="research_file">Upload Research:</label>
              <input type="file" name="file"/>
            </div>


            <a href="{{-- route('')--}}">
              <button class="add-research">
                  <img src="{{ asset('hakkem/images/University/Add icon.png') }}" alt="Add"> Add New Research
              </button>
              <a>

          </form>
        </div>
      </main>
    </div>
  </body>
</html>
