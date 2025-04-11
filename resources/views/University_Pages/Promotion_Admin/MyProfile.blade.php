<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Promotion Admin Profile</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Universty/PromotionAdmin/MyProfile.css') }}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/Header-Footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/Sidebar.css') }}" />
    <script src="{{ asset('hakkem/javascript/University/FM_Researcher/My_Profile.js') }}" defer></script>
</head>

<body>
    @include('include.Header')

    <div class="container">
        
    @include('include.Promotion-Sidebar')
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
                <input type="email" id="email" placeholder="example@email.com" disabled oninput="validateEmail(this)" />
            </div>
            <div>
                <label>Phone:</label>
                <input type="text" id="university" placeholder="Enter your phone number" disabled
                    oninput="validateText(this)" />
            </div>
        </div>

        <!-- حقلين الاسماء-->
        <div class="input-row">
            <div>
                <label>University:</label>
                <input type="text" id="firstName" placeholder="Enter your university name" disabled
                    oninput="validateText(this)" />
            </div>
            <div>
                <label>Academic Rank:</label>
                <input type="text" id="lastName" placeholder="Enter your academic rank" disabled
                    oninput="validateText(this)" />
            </div>
        </div>

        <!-- حقلين الاسماء-->
        <div class="input-row">
            <div>
                <label>Academic Qualification:</label>
                <input type="text" id="firstName" placeholder="Enter your academic qualification" disabled
                    oninput="validateText(this)" />
            </div>
            <div>
                <label>Bachelor's Specialization:</label>
                <input type="text" id="lastName" placeholder="Enter your bachelor's specialization" disabled
                    oninput="validateText(this)" />
            </div>
        </div>

        <!-- حقلين الاسماء-->
        <div class="input-row">
            <div>
                <label>Master's Specialization:</label>
                <input type="text" id="firstName" placeholder="Enter your master's specialization" disabled
                    oninput="validateText(this)" />
            </div>
            <div>
                <label>Doctorate's Specialization:</label>
                <input type="text" id="lastName" placeholder="Enter your doctorate's specialization" disabled
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