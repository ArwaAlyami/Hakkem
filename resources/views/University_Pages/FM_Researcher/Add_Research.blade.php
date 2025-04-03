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
    
          <form id="profile-form" method="post" action="{{ route('Researches.store')}}">

            {{ csrf_field() }}
            {{ method_field('post') }}
            
            <div class="form-group">
              <label for="title">Title:</label>
              <input type="text" name="title"/>
            </div>

            <div class="form-group">
              <label for="keywords">Keywords:</label>
              <input type="text" name="keywords"/>
            </div>
            
            <div class="form-group">
              <label for="DOI">DOI:</label>
              <input type="text" name="DOI"/>
            </div>

            <div class="form-group">
              <label for="Field">Research Field:</label>
              <select name="field" class="form-group">
                <option value="">Select...</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Information System">Information System </option>
                <option value="Artificial Intelligence">Artificial Intelligence</option>
                <option value="Data Science">Data Science</option>
                <option value="Machine Learning">Machine Learning</option>
                <option value="Deep Learning">Deep Learning</option>
                <option value="Software Engineering">Software Engineering</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Information System">Information System </option>
                <option value="Artificial Intelligence">Artificial Intelligence</option>
                <option value="Data Science">Data Science</option>
                <option value="Machine Learning">Machine Learning</option>
                <option value="Deep Learning">Deep Learning</option>
                <option value="Software Engineering">Software Engineering</option>
              </select>
            </div>

            <div class="form-group">
              <label for="abstract">Abstract:</label>
              <textarea type="text" name="abstract" class="fixed-textarea"></textarea>
            </div>

            <br>
            <div class="form-group">
              <label for="research_file">Upload Research:</label>
              <input type="file" name=""/>
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
