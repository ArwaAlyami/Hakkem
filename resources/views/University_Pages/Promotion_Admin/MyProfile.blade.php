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
        {{-- <button class="Edit-button" id="editBtn">Edit</button> --}}

        <!-- حقلين الاسماء-->
        <div class="input-row">
            <div>
                <label>First Name:</label>
                <input type="text" name="f_ame"  value="{{$promotionAdmin->f_name}}" disabled />

            </div>
            <div>
                <label>Last Name:</label>
                <input type="text" name="l_ame" value="{{$promotionAdmin->l_name}}" disabled />

            </div>
        </div>

        <!-- حقلين البريد ورقم الجوال -->
        <div class="input-row">
            <div>
                <label>Email:</label>
                <input type="email" name="email" value="{{$promotionAdmin->email}}" disabled/>
            </div>
            <div>
                <label>Phone:</label>
                <input type="text" name="phone" disabled value="{{$promotionAdmin->phone}}"/>
            </div>
        </div>

        <!-- حقلين الاسماء-->
        <div class="input-row">
            <div>
                <label>Academic Rank:</label>
                <input type="text" name="rank" disabled value="{{$promotionAdmin->rank}}" />
            </div>

            <div>
                <label>Academic Qualification:</label>
                <input type="text" name="Academic_quali" disabled value="{{$promotionAdmin->Academic_quali}}"/>
            </div>
        </div>

        <!-- حقلين الاسماء-->
        <div class="input-row">
            <div>
                <label>Bachelor's Specialization:</label>
                <input type="text" name="bachelors" disabled value="{{$promotionAdmin->bachelors}}"/>
            </div>

            <div>
                <label>Master's Specialization:</label>
                <input type="text" name="masters" disabled value="{{$promotionAdmin->masters}}"/>
            </div>
        </div>

        <!-- حقلين الاسماء-->
        <div class="input-row">
            <div>
                <label>Doctorate's Specialization:</label>
                <input type="text" name="phd" disabled value="{{$promotionAdmin->phd}}"/>
            </div>

            <div>
                <label>University:</label>
                <input type="text" id="firstName" name="email" disabled value="Najran University"/>
            </div>
        </div>

        <!-- الأزرار -->
        <div class="buttons">
            {{-- <button id="saveBtn" disabled>Save changes</button>
            <button id="cancelBtn" disabled>Cancel</button> --}}
        </div>
    </div>
</div>
    @include('include.Footer')
</body>

</html>
