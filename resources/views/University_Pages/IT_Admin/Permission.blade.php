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

            <form action="{{route('ITAdminAccount.manage-users.update', $faculty_member->id)}}" method="POST" enctype="multipart/form-data">

                {{ csrf_field() }}
                {{ method_field('put') }}

            <h2 class="grant-title">Change Member Info</h2>

            <div class="form-group">

                <div class="form-item">
                <label>First Name:</label>
                <input type="text" name="f_name" value="{{$faculty_member->f_name}}">
                </div>

                <div class="form-item">
                <label>Last Name:</label>
                <input type="text" name="l_name" value="{{$faculty_member->l_name}}">
                </div>
            </div>


            <div class="form-group">
                <div class="form-item">
                <label>Email:</label>
                <input type="email" name="email" value="{{$faculty_member->email}}">
                </div>

                <div class="form-item">
                <label>Phone:</label>
                <input type="text" name="phone" value="{{$faculty_member->phone}}">
                </div>
            </div>


            <div class="form-group">
                <div class="form-item">
                    <label>Password:</label>
                    <input type="password" name="password" value="{{$faculty_member->password}}">
                </div>


                <div class="form-item">
                <label>Department:</label>
                <input type="text" name="department" value="{{$faculty_member->department}}">
                </div>
            </div>


            <div class="form-group">
                <div class="form-item">
                    <label>Academic Rank:</label>
                    <input type="text" name="rank" value="{{$faculty_member->rank}}">
                </div>

                <div class="form-item">
                    <label>Academic Qualification:</label>
                    <input type="text" name="Academic_quali" value="{{$faculty_member->Academic_quali}}">
                </div>
            </div>


            <div class="form-group">
                <div class="form-item">
                    <label>Bachelor's Specialization:</label>
                    <input type="text" name="bachelors" value="{{$faculty_member->bachelors}}">
                </div>

                <div class="form-item">
                <label>Master’s Specialization:</label>
                <input type="text" name="masters" value="{{$faculty_member->masters}}">
                </div>
            </div>

            <div class="form-group">
                <div class="form-item">
                    <label>Doctorate’s Specialization:</label>
                    <input type="text" name="phd" value="{{$faculty_member->phd}}">
                </div>

                <div class="form-item">
                    <label>IBAN:</label>
                    <input type="text" name="IBAN" value="{{$faculty_member->IBAN}}">
                </div>
            </div>

            <div class="form-group">
                <div class="form-item">
                <label>Member Role:</label>
                <select name="role">

                    <option value="">Select</option>

                    @foreach($roles as $role)

                        <option value="{{$role->name}}" @if ($role->name == $faculty_member->role->name)
                            selected
                            @endif>{{$role->name}}</option>

                    @endforeach
                </select>
            </div>
            </div>

            
            <div class="permission-buttons">
                <button class="modify-btn" type="submit">Modify</button>
            </div>

            </form>

        </div>
    </div>


    <!-- FOOTER -->
    @include('include.footer')

        <script src="{{ asset('hakkem/javascript/MyProfile.js') }}"></script>

    </body>
</html>
