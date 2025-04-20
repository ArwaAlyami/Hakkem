<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Associated Editor Profile</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Journals/MyProfile.css') }}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/Header-Footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/Sidebar.css') }}" />
    <link rel="stylesheet" href="{{ asset('/hakkem/javascript/sidebar.js') }}">
</head>

<body>
    @include('include.Header')

    <div class="main-container">
        @include('include.Associated-Ed-Sidebar')
        <!-- الكونتير للحقول-->
        <div id="dynamic-" class="fields-container">
            <button class="Edit-button" id="editBtn">Edit</button>

            <!-- حقلين الاسماء-->
            <div class="input-row">
                <div>
                    <label>First Name:</label>
                    <input type="text" id="firstName" placeholder="Enter your first name" disabled
                        oninput="validateText(this)" />
                </div>
                <div>
                    <label>Last Name:</label>
                    <input type="text" id="lastName" placeholder="Enter your last name" disabled
                        oninput="validateText(this)" />
                </div>
            </div>

            <!-- حقلين البريد ورقم الجوال -->
            <div class="input-row">
                <div>
                    <label>Email:</label>
                    <input type="email" id="email" placeholder="example@email.com" disabled
                        oninput="validateEmail(this)" />
                </div>
                <div>
                    <label>Specialization:</label>
                    <input type="text" id="Journal" placeholder="Enter your specialization" disabled
                        oninput="validateText(this)" />
                </div>
            </div>

            <!-- الأزرار -->
            <div class="buttons">
                <button id="saveBtn" disabled>Save changes</button>
                <button id="cancelBtn" disabled>Cancel</button>
            </div>
        </div>
    </div>
    @include('include.Footer')
</body>

</html>