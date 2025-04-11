<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Permission</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Universty/IT Admin/Permission.css')}}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/Sidebar.css')}}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/Header-Footer.css')}}" />
</head>

<body>
    <!-- HEADER -->
    @include('include.header')


    <div class="container">

    <!-- السايد بار -->
    @include('include.itsidebar')

    <!--السايد بار-->



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
</div>


    <!-- FOOTER -->
 @include('include.footer')

        <script src="{{ asset('hakkem/javascript/MyProfile.js') }}"></script>
        <script>
            const userIdInput = document.getElementById("userId");

            userIdInput.addEventListener("input", function () {
              this.value = this.value.replace(/[^0-9]/g, ""); // يمنع الحروف
            });
          </script>
</body>

</html>
