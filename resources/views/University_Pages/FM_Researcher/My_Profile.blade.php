<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Researcher Profile</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Header-Footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/UniversityPages/FM_Researcher/My_Profile.css') }}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/Sidebar.css') }}" />

    <script src="{{ asset('hakkem/javascript/University/FM_Researcher/My_Profile.js') }}" defer></script>
</head>
<body>
  @include('include.header')
    <div class="container">

      @include('include.res-sidebar')

      <!-- المحتوى الرئيسي -->
      <main class="profile-content">
        <div class="profile-box">
          {{-- <button id="edit-btn" class="edit-button">
            <img src="{{ asset('hakkem/images/University/Edit icon.png') }}" alt="Edit" /> 
            Edit
          </button> --}}

          <form id="profile-form">

            <div class="form-group">
              <label for="first-name">First Name:</label>
              <input type="text" name="f_name" id="first-name" disabled value="{{ $user->f_name }}"/>
            </div>

            <div class="form-group">
              <label for="last-name">Last Name:</label>
              <input type="text" name="l_name" disabled value="{{ $user->l_name }}"/>
            </div>

            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" name="email" disabled value="{{ $user->email }}"/>
            </div>

            <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="text" name="phone" disabled value="{{ $user->phone }}"/>
            </div>

            <div class="form-group">
              <label for="university">University:</label>
              <input type="text" id="university" disabled value="Najran University"/>
            </div>

            <div class="form-group">
              <label for="academic-rank">Academic Rank:</label>
              <input type="text" name="rank" disabled value="{{ $user->rank }}"/>
            </div>

            <div class="form-group">
              <label for="qualification">Academic Qualification:</label>
              <input type="text" name="Academic_quali" disabled value="{{ $user->Academic_quali }}"/>
            </div>


            <div class="form-group">
              <label for="bachelor-specialization">Bachelor's Specialization:</label>
              <input type="text" name="bachelors" disabled value="{{ $user->bachelors }}"/>
            </div>

            <div class="form-group">
              <label for="master-specialization">Master’s Specialization:</label>
              <input type="text" name="masters" disabled value="{{ $user->masters }}"/>
            </div>

            <div class="form-group">
              <label for="doctorate-specialization">Doctorate’s Specialization:</label>
              <input type="text" name="phd" disabled value="{{ $user->phd }}"/>
            </div>

            <div class="form-group">
              <label for="specialization">Department:</label>
              <input type="text" name="department" disabled value="{{ $user->department }}"/>
            </div>

            <div class="form-group">
              <label for="IBAN">IBAN:</label>
              <input type="text" name="IBAN" disabled value="{{ $user->IBAN }}"/>
            </div>

            <div class="form-actions">
              {{-- <button type="submit" id="save-btn" class="save-button" disabled>Save changes</button>
              <button type="button" id="cancel-btn" class="cancel-button" disabled>Cancel</button> --}}
            </div>

          </form>
        </div>
      </main>
    </div>

    @include('include.footer')

  </body>
</html>
