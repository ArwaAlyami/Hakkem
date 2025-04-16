<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reviewer Profile</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('hakkem/css/UniversityPages/FM_Reviewer/My_Profile.css') }}">
    <link rel="stylesheet" href="{{ asset('hakkem/css/Header-Footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/Sidebar.css') }}" />



    <!-- JS -->
    <script src="{{ asset('hakkem/javascript/University/FM_Researcher_Reviewer/My_Profile.js') }}" defer></script>
  </head>
  <body>

    @include('include.header')


    <div class="container">

      @include('include.rev-sidebar')

      <!-- المحتوى الرئيسي -->
      <main class="profile-content">
        <div class="profile-box">

          {{-- <button id="edit-btn" class="edit-button">
            <img src="{{ asset(path: 'hakkem/images/University/Edit icon.png') }}" alt="Edit" /> Edit
          </button> --}}



          <form id="profile-form" method="POST" action="{{-- route('reviewer.profile.update') --}}">

            <div class="form-group">
              <label for="first-name">First Name:</label>
              <input type="text" name="f_name" value="{{$reviewer->f_name}}" disabled>
            </div>


            <div class="form-group">
              <label for="last-name">Last Name:</label>
              <input type="text" name="l_name" value="{{$reviewer->l_name}}" disabled>
            </div>


            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" name="email" value="{{$reviewer->email}}" disabled>
            </div>


            <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="text" name="phone" value="{{$reviewer->phone}}" disabled>
            </div>


            <div class="form-group">
              <label for="university">University:</label>
              <input type="text" name="university" value="Najran University" disabled>
            </div>

            <div class="form-group">
              <label for="academic-rank">Academic Rank:</label>
              <input type="text" name="rank" value="{{$reviewer->rank}}" disabled>
            </div>


            <div class="form-group">
              <label for="qualification">Academic Qualification:</label>
              <input type="text" name="Academic_quali" value="{{$reviewer->Academic_quali}}" disabled>
            </div>


            <div class="form-group">
              <label for="bachelor-specialization">Bachelors Specialization:</label>
              <input type="text" name="bachelors" value="{{$reviewer->bachelors}}" disabled>
            </div>


            <div class="form-group">
              <label for="master-specialization">Master’s Specialization:</label>
              <input type="text" name="masters" value="{{$reviewer->masters}}" disabled>
            </div>


            <div class="form-group">
              <label for="doctorate-specialization">Doctorate’s Specialization:</label>
              <input type="text" name="phd" value="{{$reviewer->phd}}" disabled>
            </div>


            <div class="form-group">
              <label for="specialization">Department:</label>
              <input type="text" name="department" value="{{$reviewer->department}}" disabled>
            </div>

            <div class="form-group">
              <label for="IBAN">IBAN:</label>
              <input type="text" name="IBAN" disabled value="{{ $reviewer->IBAN }}"/>
            </div>

            {{-- <div class="form-actions">
              <button type="submit" id="save-btn" class="save-button" disabled>
                Save changes
              </button>

              <button type="button" id="cancel-btn" class="cancel-button" disabled>
                Cancel
              </button>
            </div> --}}

          </form>

        </div>
  
    </main>
  </div>
        
  
        
        <!-- بطاقة تقييم المراجع -->

        <div class="reviewer-rate">
            <h3>Reviewer Rate</h3>
            
            <div class="rate-item">
              <span>Speed:</span>
              <div class="stars" data-rating="{{ $reviewer->rate_speed }}"></div>
            </div>

            <div class="rate-item">
              <span>Quality:</span>
              <div class="stars" data-rating="{{ $reviewer->rate_quality }}"></div>
            </div>

            <div class="rate-item">
              <span>Accuracy:</span>
              <div class="stars" data-rating="{{ $reviewer->rate_accuracy }}"></div>
            </div>

            <div class="stars" data-rating="{{ $reviewer->rate_speed }}"></div>

        </div>


    @include('include.footer')

  </body>
</html>
