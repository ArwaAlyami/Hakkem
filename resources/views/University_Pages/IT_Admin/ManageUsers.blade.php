<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Universty/IT Admin/ManageUsers.css')}}" />
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
                  <a href="{{ route('Auth.Home') }}" class="navigate">Home</a>
                  <a href="{{-- route('') --}}" class="navigate">Chat</a>
                  <a href="{{-- route('') --}}" class="navigate">Offers</a>
                  <a href="{{-- route('') --}}" class="navigate">Journals</a>
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
    </aside>
  <!-- Table الأعضاء -->
<div class="container">
    <table class="member-table">
      <thead>
        <tr>
          <th>No.</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Department</th>
          <th>Academic Rank</th>
          <th>Action</th>



        </tr>
      </thead>
      <tbody>

        <tr>
          <td style="color: grey;">A</td>
          <td style="color: grey;">A</td>
          <td style="color: grey;">A</td>
          <td style="color: grey;">A</td>
          <td style="color: grey;">A</td>
          <td style="color: grey;">A</td>



          <td>
          <form action="{{-- route('ITAdminAccount.manage-users.delete')--}}" method="post" >
              {{ csrf_field() }}
              {{ method_field('delete') }}
              <button class="action-btn">Delete</button>
          </form>

          <button class="action-btn">
          <a href="{{ route('ITAdminAccount.manage-users.edit')}}">Edit</a>
          </button>
          </td>
        </tr>

      </tbody>
    </table>
  </div>

  <!-- زر الإضافة -->
  <div class="add-member-container">
    <a href="{{ route('ITAdminAccount.manage-users.create') }}">
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
                <img src="{{ asset('hakkem/images/Header_Footer/Contact-X_light.png') }}" />
            </div>
        </footer>
    </div>
    <script src="{{ asset('hakkem/javascript/MyProfile.js') }}"></script>
    <script src="{{ asset('hakkem/javascript/sidebar.js') }}"></script>

</body>

</html>
