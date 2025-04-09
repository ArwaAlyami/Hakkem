<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roles</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Universty/IT Admin/ManageUsers.css') }}" />


</head>

<body>
    <!-- HEADER -->
    <div class="center">
        <header>
            <div class="logo-placeholder">
                <img src="{{ asset('hakkem/images/White-logo.png') }}" alt="logo" />
                <h1 class="brandname">HAKKEM</h1>
            </div>
            <div class="nav">
                <div class="nav-cont">
                    <a href="{{-- route('') --}}" class="navigate">Home</a>
                    <a href="{{-- route('') --}}" class="navigate">Chat</a>
                    <a href="{{-- route('') --}}" class="navigate">Offers</a>
                    <a href="{{-- route('') --}}" class="navigate">Journals</a>
                </div>
            </div>

        </header>
    </div>

    <!--السايد بار-->
    <aside class="sidebar">
        <ul>
            <li class="sidebar-item active">
                <a href="{{ route('roles.index') }}">
                    <img src="{{ asset('hakkem/images/University/Manage-users icon.png')}}" alt="Profile">
                    Roles
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('ITAdminAccount.manage-users.index') }}">
                    <img src="{{ asset('hakkem/images/University/Manage-users icon.png') }}" alt="Manage">
                    Manage Users
                </a>
            </li>

            <li class="sidebar-item">
                <a href="{{ route('Get_Started') }}">
                    <img src="{{ asset('hakkem/images/University/Sign-out icon.png') }}" alt="Sign Out">
                    Sign Out
                </a>
            </li>
        </ul>
    </aside>


    <form action="{{ route('roles.store')}}" method="POST">
        {{ csrf_field() }}
        {{ method_field('post') }}

        <div class="container">
            <h2>Permissions:</h2>

            <div class="role-input">
                <label>Role Name:</label>
                <input type="text" id="RoleName" name="name">
            </div>


            <div class="permissions">
                @foreach($permissions as $key => $permissionGroups)
                    <h3>{{$key}}</h3>

                    @foreach($permissionGroups as $permission)
                        <div class="permission-item">
                            <label><input type="checkbox" id="permissions_name" name="permissions_name[]"
                                    value="{{$permission->name}}" />{{$permission->name}}</label>
                        </div>

                    @endforeach
                @endforeach
            </div>

        </div>
        
        <div class="add-member-container">
            <button class="add-member-btn" type="submit">Assign Permission</button>
        </div>

    </form>


    <!-- FOOTER -->
    <div class="center">
        <footer>
            <div class="left">
            <a href="{{-- route('')--}}">
                <p class="Footer-link">Pivacy Policy</p>
            </a>
                <p>|</p>
            <a href="{{ route('About_Hakkem')}}">
                <p class="Footer-link">About Hakkem</p>
            </a>
            </div>
            <div class="Mid">
                <p>© 2025 Hakkem. All Rights Reserved.</p>
            </div>
            <div class="right">
                <img src="{{ asset('hakkem/images/Header_Footer/Contact-Phone_light.png') }} " />
                <img src="{{ asset('hakkem/images/Header_Footer/Contact-Email_light.png') }}" />
                <img src="{{ asset('hakkem/images/Header_Footer/Contact-X_light.png') }}" />
            </div>
        </footer>
    </div>
    <script src="{{ asset('hakkem/javascript/MyProfile.js') }}"></script>
    <script src="{{ asset('hakkem/javascript/sidebar.js') }}"></script>
</body>

</html>
