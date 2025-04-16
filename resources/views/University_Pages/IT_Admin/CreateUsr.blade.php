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
            </div>


            <div class="form-group">
                <label>Last Name:</label>
                <input type="text" name="l_name">
            </div>


            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email">
            </div>

            <div class="form-group">
                <label>Phone:</label>
                <input type="text" name="phone">
            </div>


            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password">
            </div>


            <div class="form-group">
                <label>Department:</label>
                <input type="text" name="department">
            </div>


            <div class="form-group">
                <label>Academic Rank:</label>
                <input type="text" name="rank">
            </div>


            
            <div class="form-group">
                <label>Acamdemic Qualification:</label>
                <input type="text" name="Academic_quali">
            </div>


            <div class="form-group">
                <label>Bachelor's Specialization:</label>
                <input type="text" name="bachelors">
            </div>


            <div class="form-group">
                <label>Master’s Specialization:</label>
                <input type="text" name="masters">
            </div>


            <div class="form-group">
                <label>Doctorate’s Specialization:</label>
                <input type="text" name="phd">
            </div>


            <div class="form-group">
                <label>IBAN:</label>
                <input type="text" name="IBAN">
            </div>


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
