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
                <label>Full Name:</label>
                <input type="text" name="name" disabled>
            </div>
            <div>
                <label>Email:</label>
                <input type="text" name="email" disabled>
            </div>
        </div>

        <div class="input-row">
            <div>
                <label>University Email:</label>
                <input type="email" name="email" disabled>
            </div>
            <div>
                <label>University Name:</label>
                <input type="text" name="university" disabled>
            </div>
        </div>


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
