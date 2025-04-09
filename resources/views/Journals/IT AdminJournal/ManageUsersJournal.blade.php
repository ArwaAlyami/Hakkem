<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ManageUsers</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Universty/IT Admin/ManageUsers.css') }}" />
</head>

<body>
    <!-- HEADER -->
    <div class="center">
        <header>
            <div class="logo-placeholder">
                <img src="{{ asset('hakkem/images/White-logo.png') }}" alt="logo" />
                <h1 class="brandname">HAKKEM</h1>
            </div>
            <div class="nav">
                <div class="nav-cont">
                    <a href="{{ asset('') }}" class="navigate">Home</a>
                    <a href="chat.html" class="navigate">Chat</a>
                    <a href="offers.html" class="navigate">Offers</a>
                    <a href="journals.html" class="navigate">Journals</a>
                </div>
            </div>
            <a href="#" class="profile-link">
                <img src="{{ asset('hakkem/images/Header_Footer/profile_light.png') }}" class="profile" alt="Profile" />
            </a>
    </div>
    </header>
    </div>
    <!--السايد بار-->
   @include('include.ITAdminSidebar')
  <!-- Table الأعضاء -->
<div class="container">
    <table class="member-table">
      <thead>
        <tr>
          <th>Full Name</th>
          <th>Email</th>
          <th>Department</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="color: grey;">Ahmad Alshammari</td>
          <td style="color: grey;">ahmad@example.com</td>
          <td style="color: grey;">Editor In Chief</td>
          <td>
            <button class="action-btn">Delete</button>
            <a href="#" class="action-btn">Grant Permission</a>

          </td>
        </tr>
        <tr>
          <td style="color: grey;">Fatimah Alsaleh</td>
          <td style="color: grey;">fatimah@example.com</td>
          <td style="color: grey;">Associated Editor</td>
          <td>
            <button class="action-btn">Delete</button>
            <a href="#" class="action-btn">Grant Permission</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- زر الإضافة -->
  <div class="add-member-container">
    <a href="#">
      <button class="add-member-btn">+ Add Member</button>
    </a>
  </div>

<!-- FOOTER -->
<div class="center">
        <footer>
            <div class="left">
                <p class="Footer-link">Pivacy Policy</p>
                <p>|</p>
                <p class="Footer-link">About Hakkem</p>
            </div>
            <div class="Mid">
                <p>© 2025 Hakkem. All Rights Reserved.</p>
            </div>
            <div class="right">
                <img src="{{ asset('hakkem/images/Header_Footer/Contact-Phone_light.png') }} " />
                <img src="{{ asset('hakkem/images/Header_Footer/Contact-Email_light.png') }}" />
                <img src=".{{ asset('hakkem/images/Header_Footer/Contact-X_light.png') }}" />
            </div>
        </footer>
    </div>
    <script src="{{ asset('hakkem/javascript/MyProfile.js') }}"></script>
    <script src="{{ asset('hakkem/javascript/sidebar.js') }}"></script>

</body>

</html>
