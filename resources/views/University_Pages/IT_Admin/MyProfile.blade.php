<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Universty/IT Admin/MyProfile.css') }}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/Sidebar.css') }}" />

</head>

<body>
    <!-- HEADER -->
    @include('include.header')

    <div class="container">
    <!--السايد بار-->
    @include('include.itsidebar')
    
    <!--السايد بار-->


   
   
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

        <!-- حقلين البريد والجامعة -->
        <div class="input-row">
            <div>
                <label>Email:</label>
                <input type="email" id="email" placeholder="example@email.com" disabled oninput="validateEmail(this)">
            </div>
            <div>
                <label>University:</label>
                <input type="text" id="university" placeholder="Enter your university name" disabled
                    oninput="validateText(this)">
            </div>
        </div>
        <!-- الأزرار -->
        <div class="buttons">
            <button id="saveBtn" disabled>Save changes</button>
            <button id="cancelBtn" disabled>Cancel</button>
        </div>
    </div>

</div>


    <!-- FOOTER -->
 
    @include('include.footer')
    
    <script src="{{ asset('hakkem/javascript/MyProfile.js') }}"></script>
</body>

</html>
