<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Profile</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/UniversityPages/FM_Researcher/My_Profile.css') }}" />
    <script src="{{ asset('hakkem/javascript/University/FM_Researcher/My_Profile.js') }}" defer></script>
</head>
<body>
    <div class="container">
      @include('include.sidebar')
      <!-- المحتوى الرئيسي -->
      <main class="profile-content">
        <div class="profile-box">
          <button id="edit-btn" class="edit-button">
            <img src="{{ asset('hakkem/images/University/Edit icon.png') }}" alt="Edit" /> Edit
          </button>

          <form id="profile-form">
            
            <div class="form-group">
              <label for="first-name">First Name:</label>
              <input type="text" id="first-name" disabled value=""/>
            </div>

            <div class="form-group">
              <label for="last-name">Last Name:</label>
              <input type="text" id="last-name" disabled value=""/>
            </div>

            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" id="email" disabled value=""/>
            </div>

            <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="text" id="phone" disabled value=""/>
            </div>

            <div class="form-group">
              <label for="university">University:</label>
              <input type="text" id="university" disabled value=""/>
            </div>

            <div class="form-group">
              <label for="academic-rank">Academic Rank:</label>
              <input type="text" id="academic-rank" disabled value=""/>
            </div>

            <div class="form-group">
              <label for="qualification">Academic Qualification:</label>
              <input type="text" id="qualification" disabled value=""/>
            </div>

        

            <div class="form-group">
              <label for="bachelor-specialization">Bachelor's Specialization:</label>
              <input type="text" id="bachelor-specialization" disabled value=""/>
            </div>

            <div class="form-group">
              <label for="master-specialization">Master’s Specialization:</label>
              <input type="text" id="master-specialization" disabled value=""/>
            </div>

            <div class="form-group">
              <label for="doctorate-specialization">Doctorate’s Specialization:</label>
              <input type="text" id="doctorate-specialization" disabled value=""/>
            </div>

            <div class="form-group">
              <label for="specialization">Specialization:</label>
              <input type="text" id="specialization" disabled value=""/>
            </div>

            <div class="form-group">
              <label for="IBAN">IBAN:</label>
              <input type="text" id="IBAN" disabled value=""/>
            </div>

            <div class="form-actions">
              <button type="submit" id="save-btn" class="save-button" disabled>Save changes</button>
              <button type="button" id="cancel-btn" class="cancel-button" disabled>Cancel</button>
            </div>

          </form>
        </div>
      </main>
    </div>
  </body>
</html>
