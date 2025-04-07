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
      <main class="profile-content">
        <div class="file-box">
          <form id="profile-form" enctype="multipart/form-data">

            {{-- <div class="form-group3">
              <label for="title">Title: </label>
              <input type="text" value="{{$research->title}}"disabled/>
            </div>

            <div class="form-group3">
              <label for="keywords">Keywords: </label>
              <input type="text" value="{{$research->keywords}}" disabled/>
            </div>

            <div class="form-group3">
              <label for="field">Field: </label>
              <input type="text" value="{{$research->field}}" disabled/>
            </div>

            <div class="">
              <label for="abstract">Abstract: </label>
              <textarea class="sub-box fixed-textarea" disabled>{{$research->abstract}}</textarea>
            </div>

            <div class="">
              <label for="DOI">DOI: </label>
              <textarea class="sub-box DOI-textarea" disabled>{{$research->DOI}}</textarea>
            </div> --}}


{{-- 
            @foreach($research->media as $media)
              <div class="">
                <label for="file">Full Research: </label>
                  <iframe src={{$media->file}} width="100%" height="600px"></iframe>
                </div>
            @endforeach --}}
            
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
