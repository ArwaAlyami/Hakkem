<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Member</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Universty/IT Admin/CreateUsr.css') }}">
    <link rel="stylesheet" href="{{ asset('hakkem/css/Sidebar.css')}}" />
</head>

<body>
    <!-- HEADER -->
    
    @include('include.header')

    
    <div class="container">
    <!--السايد بار-->
    @include('include.itsidebar')
    <!--السايد بار-->

    <!-- المحتوى -->
    <div class="page-content">
            <form method="POST" action="{{route('ITAdminAccount.manage-users.store')}}" enctype="multipart/form-data" class="form-container">

                {{ csrf_field() }}
                {{ method_field('post') }}

            <div class="form-group">
                <label>First Name:</label>
                <input type="text" name="f_name">
                <p id="name-error" class="error-message">Only letters are allowed</p>
            </div>


            <div class="form-group">
                <label>Last Name:</label>
                <input type="text" name="l_name">
                <p id="name-error" class="error-message">Only letters are allowed</p>
            </div>


            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email">
                <p id="email-error" class="error-message">Invalid email format</p>
            </div>


            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="pass">
            </div>


            <div class="form-group">
                <label>Department:</label>
                <input type="text" name="department">
            </div>


            <div class="form-group">
                <label>Academic Rank:</label>
                <input type="text" name="rank">
            </div>


            <!-- التصاريح -->
            {{-- <label style="font-weight:bold; margin-top:15px;">Give permission as:</label>
            <div class="permissions">
                <label><input type="checkbox" id="promotionAdmin" value="Promotion Admin"> Promotion Admin</label>
                <label><input type="checkbox" id="researcher" value="Researcher"> Researcher</label>
                <label><input type="checkbox" id="reviewers" value="Reviewers"> Reviewers</label>
            </div> --}}


            <!-- زر الحفظ -->
            <div style="display:flex; justify-content:center; margin-top: 20px;">
                <button class="profile-button" onclick="saveUser()">Save</button>
            </div>
            <p id="success-message" class="success-message">User account created successfully!</p>
        </form>
    </div>
</div>

        <!-- FOOTER -->
        @include('include.footer')
        

    <script src="{{ asset('hakkem/javascript/MyProfile.js') }}"></script>
  

</body>

</html>
