<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="{{ asset('hakkem/css/usercontainer.css')}}" />
  </head>
  <body>
    <!----------------------------------------
                A Profile Card 
    ----------------------------------------->
    <article class="profile-content">
      <!-- Name of the Reviewer -->
      <header>
        <h1 class="profile-name">Dr. Abdullah Al-Ghamdi</h1>
      </header>

      <!-- Where the Reviewer is from -->
      <section class="profile-details">
        <p class="department-info">
          <span class="department"
            >Department of Computer Information Systems</span
          >
          <span class="university">Najran University</span>
        </p>
      </section>

      <!-- The Choose Button -->
      <footer>
        <button class="action-button">
          <span class="button-text">Choose</span>
        </button>
      </footer>
    </article>
  </body>
  <script src="{{ asset('hakkem/javascript/Review-Request.js')}}"></script>
</html>
