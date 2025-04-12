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

            <form action="{{route('ITAdminAccount.manage-users.update' ,$faculty_member->id)}}" method="POST" enctype="multipart/form-data">

                {{ csrf_field() }}
                {{ method_field('put') }}

            <h2 class="grant-title">Change Member Info</h2>

            <div class="form-group">
                <label>First Name:</label>
                <input type="text" name="f_name" value="{{$faculty_member->f_name}}">

                <label>Last Name:</label>
                <input type="text" name="l_name" value="{{$faculty_member->l_name}}">
            </div>


            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" value="{{$faculty_member->email}}">

                <label>Password:</label>
                <input type="password" name="pass" value="{{$faculty_member->pass}}">
            </div>


            <div class="form-group">
                <label>Department:</label>
                <input type="text" name="department" value="{{$faculty_member->department}}">

                <label>Academic Rank:</label>
                <input type="text" name="rank" value="{{$faculty_member->rank}}">
            </div>


        {{--     
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
            </div> --}}
            <div class="permission-buttons">
                <button class="modify-btn" type="submit">Modify</button>
                <button class="cancel-btn" >Cancel</button>
            </div>

            </form>

        </div>
    </div>


    <!-- FOOTER -->
    @include('include.footer')

        <script src="{{ asset('hakkem/javascript/MyProfile.js') }}"></script>

</body>
</html>
