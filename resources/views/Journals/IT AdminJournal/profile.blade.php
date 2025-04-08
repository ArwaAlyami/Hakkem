<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><MyProfileJournal></title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Universty/IT Admin/MyProfile.css') }}" />

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
      <aside class="sidebar">
        <ul>
            <li class="sidebar-item active">
                <a href="#">
                    <img src="{{ asset('hakkem/images/University/My-profile icon.png')}}" alt="Profile">
                    My Profile
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#">
                    <img src="{{ asset('hakkem/images/University/Manage-users icon.png') }}" alt="Manage">
                    Manage Users
                </a>
            </li>

            <li class="sidebar-item">
                <a href="#">
                    <img src="{{ asset('hakkem/images/University/Sign-out icon.png') }}" alt="Sign Out">
                    Sign Out
                </a>
            </li>
        </ul>
    </aside>
    <!-- الكونتير للحقول-->
    <div id="dynamic-" class="fields-container">
        <button class="Edit-button" id="editBtn">
            Edit
        </button>

        <!-- حقلين الاسماء-->
        <div class="input-row">
            <div>
                <label>First Name:</label>
                <input type="text" id="firstName" placeholder="Enter your first name" disabled
                    oninput="validateText(this)">
            </div>
            <div>
                <label>Last Name:</label>
                <input type="text" id="lastName" placeholder="Enter your last name" disabled
                    oninput="validateText(this)">
            </div>
        </div>

        <!-- حقلين البريد والمجله -->
        <div class="input-row">
            <div>
                <label>Email:</label>
                <input type="email" id="email" placeholder="example@email.com" disabled oninput="validateEmail(this)">
            </div>
            <div>
                <label>Journal:</label>
                <input type="text" id="journal" placeholder="Enter your Journal name" disabled
                    oninput="validateText(this)">
            </div>
        </div>
        <!-- الأزرار -->
        <div class="buttons">
            <button id="saveBtn" disabled>Save changes</button>
            <button id="cancelBtn" disabled>Cancel</button>
        </div>
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
