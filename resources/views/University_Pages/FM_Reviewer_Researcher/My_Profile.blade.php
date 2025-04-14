<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile - Hakkem</title>

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
          <button id="edit-btn" class="edit-button">
            <img src="{{ asset(path: 'hakkem/images/University/Edit icon.png') }}" alt="Edit" /> Edit
          </button>

          <form id="profile-form" method="POST" action="{{ route('reviewer.profile.update') }}">
            @csrf

            <div class="form-group">
              <label for="first-name">First Name:</label>
              <input type="text" name="first_name" value="{{ old('first_name', $user->first_name) }}" id="first-name" disabled>
            </div>

            <div class="form-group">
              <label for="last-name">Last Name:</label>
              <input type="text" name="last_name" value="{{ old('last_name', $user->last_name) }}" id="last-name" disabled>
            </div>

            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" name="email" value="{{ old('email', $user->email) }}" id="email" disabled>
            </div>

            <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="text" name="phone" value="{{ old('phone', $user->phone) }}" id="phone" disabled>
            </div>

            <div class="form-group">
              <label for="university">University:</label>
              <input type="text" name="university" value="{{ old('university', $user->university) }}" id="university" disabled>
            </div>

            <div class="form-group">
              <label for="academic-rank">Academic Rank:</label>
              <input type="text" name="academic_rank" value="{{ old('academic_rank', $user->academic_rank) }}" id="academic-rank" disabled>
            </div>

            <div class="form-group">
              <label for="qualification">Academic Qualification:</label>
              <select name="qualification" id="qualification" disabled>
                <option value="">Select...</option>
                <option value="bachelor" {{ $user->qualification == 'bachelor' ? 'selected' : '' }}>Bachelor's</option>
                <option value="master" {{ $user->qualification == 'master' ? 'selected' : '' }}>Master's</option>
                <option value="phd" {{ $user->qualification == 'phd' ? 'selected' : '' }}>PhD</option>
              </select>
            </div>

            <div class="form-group">
              <label for="bachelor-specialization">Bachelors Specialization:</label>
              <input type="text" name="bachelor_specialization" value="{{ old('bachelor_specialization', $user->bachelor_specialization) }}" id="bachelor-specialization" disabled>
            </div>

            <div class="form-group">
              <label for="master-specialization">Master’s Specialization:</label>
              <input type="text" name="master_specialization" value="{{ old('master_specialization', $user->master_specialization) }}" id="master-specialization" disabled>
            </div>

            <div class="form-group">
              <label for="doctorate-specialization">Doctorate’s Specialization:</label>
              <input type="text" name="doctorate_specialization" value="{{ old('doctorate_specialization', $user->doctorate_specialization) }}" id="doctorate-specialization" disabled>
            </div>

            <div class="form-group">
              <label for="specialization">Specialization:</label>
              <input type="text" name="specialization" value="{{ old('specialization', $user->specialization) }}" id="specialization" disabled>
            </div>

            <div class="form-actions">
              <button type="submit" id="save-btn" class="save-button" disabled>
                Save changes
              </button>
              <button type="button" id="cancel-btn" class="cancel-button" disabled>
                Cancel
              </button>
            </div>
          </form>

              </button>
            </div>
          </form>
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
          </div>

            <div class="stars" data-rating="{{ $reviewer->rate_speed }}"></div>
          </div>

          </div>
        </div>
      </main>
    </div>

    @include('include.footer')

  </body>
</html>
