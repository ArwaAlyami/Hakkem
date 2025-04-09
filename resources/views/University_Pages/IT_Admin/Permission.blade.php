<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Permission</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Universty/IT Admin/Permission.css')}}" />

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
                    <a href="{{-- route('') --}}" class="navigate">Home</a>
                    <a href="{{-- route('') --}}" class="navigate">Chat</a>
                    <a href="{{-- route('') --}}" class="navigate">Offers</a>
                    <a href="{{-- route('') --}}" class="navigate">Journals</a>
                </div>
            </div>
            <a href="{{-- route('') --}}" class="profile-link">
                <img src="{{ asset('hakkem/images/Header_Footer/profile_light.png') }}" class="profile" alt="Profile" />
            </a>
        </header>
    </div>

    <!-- السايد بار -->
    <aside class="sidebar">
        <ul>
            <li class="sidebar-item">
                <a href="{{ route('ITAdminAccount.My_Profile.Profile') }}">
                    <img src="{{ asset('hakkem/images/University/My-profile icon.png')}}" alt="Profile"> My Profile</a>
            </li>
            <li class="sidebar-item active">
                <a href="{{ route('ITAdminAccount.manage-users.index') }}">
                    <img src="{{ asset('hakkem/images/University/Manage-users icon.png') }}" alt="Manage"> Manage Users</a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('Get_Started') }}">
                    <img src="{{ asset('hakkem/images/University/Sign-out icon.png') }}" alt="Sign Out"> Sign Out</a>
            </li>
        </ul>
    </aside>

<div class="grant-container">
    <h2 class="grant-title">Grant Permission</h2>

    <div class="form-group-inline">
      <label for="userId">User ID:</label>
      <input type="text" id="userId" inputmode="numeric" pattern="[0-9]*" placeholder="Enter User ID" />
    </div>

    <label class="permission-label">Give permission in:</label>

    <div class="permissions">
      <label><input type="checkbox" id="promotionAdmin" value="Promotion Admin" /> Promotion Admin</label>
      <label><input type="checkbox" id="promotionAdmin" value="Promotion Admin" /> Promotion Admin</label>
      <label><input type="checkbox" id="promotionAdmin" value="Promotion Admin" /> Promotion Admin</label>
    </div>

    <div class="permissions">
        <label><input type="checkbox" id="promotionAdmin" value="Promotion Admin" /> Promotion Admin</label>
        <label><input type="checkbox" id="promotionAdmin" value="Promotion Admin" /> Promotion Admin</label>
        <label><input type="checkbox" id="promotionAdmin" value="Promotion Admin" /> Promotion Admin</label>
    </div>

    <div class="permissions">
        <label><input type="checkbox" id="promotionAdmin" value="Promotion Admin" /> Promotion Admin</label>
        <label><input type="checkbox" id="promotionAdmin" value="Promotion Admin" /> Promotion Admin</label>
        <label><input type="checkbox" id="promotionAdmin" value="Promotion Admin" /> Promotion Admin</label>
    </div>

    <div class="permissions">
        <label><input type="checkbox" id="promotionAdmin" value="Promotion Admin" /> Promotion Admin</label>
        <label><input type="checkbox" id="promotionAdmin" value="Promotion Admin" /> Promotion Admin</label>
        <label><input type="checkbox" id="promotionAdmin" value="Promotion Admin" /> Promotion Admin</label>
    </div>

    <div class="permissions">
        <label><input type="checkbox" id="promotionAdmin" value="Promotion Admin" /> Promotion Admin</label>
        <label><input type="checkbox" id="promotionAdmin" value="Promotion Admin" /> Promotion Admin</label>
        <label><input type="checkbox" id="promotionAdmin" value="Promotion Admin" /> Promotion Admin</label>
    </div>

    <div class="permissions">
        <label><input type="checkbox" id="promotionAdmin" value="Promotion Admin" /> Promotion Admin</label>
        <label><input type="checkbox" id="promotionAdmin" value="Promotion Admin" /> Promotion Admin</label>
        <label><input type="checkbox" id="promotionAdmin" value="Promotion Admin" /> Promotion Admin</label>
    </div>

    <div class="permissions">
        <label><input type="checkbox" id="promotionAdmin" value="Promotion Admin" /> Promotion Admin</label>
        <label><input type="checkbox" id="promotionAdmin" value="Promotion Admin" /> Promotion Admin</label>
        <label><input type="checkbox" id="promotionAdmin" value="Promotion Admin" /> Promotion Admin</label>
    </div>

    <div class="permissions">
        <label><input type="checkbox" id="promotionAdmin" value="Promotion Admin" /> Promotion Admin</label>
        <label><input type="checkbox" id="promotionAdmin" value="Promotion Admin" /> Promotion Admin</label>
        <label><input type="checkbox" id="promotionAdmin" value="Promotion Admin" /> Promotion Admin</label>
    </div>


    <div class="permission-buttons">
        <button class="modify-btn">Modify</button>
        <button class="cancel-btn">Cancel</button>
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

        <script src="{{ asset('hakkem/javascript/MyProfile.js') }}"></script>
    <script src="{{ asset('hakkem/javascript/sidebar.js') }}"></script>
        <script>
            const userIdInput = document.getElementById("userId");

            userIdInput.addEventListener("input", function () {
              this.value = this.value.replace(/[^0-9]/g, ""); // يمنع الحروف
            });
          </script>
</body>

</html>
