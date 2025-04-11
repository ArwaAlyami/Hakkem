<aside class="sidebar">
    <ul>
 
        <li class="">
            <img src="{{ asset('hakkem/images/image-profile-icon.png') }}" alt="Profile">
            <a href="{{ route('ITAdminAccount.My_Profile.Profile')}}">My Profile</a>
        </li>

        <li>
            <img src="{{ asset('hakkem/images/University/Manage-users icon.png') }}" alt="Research">
            <a href="{{ route('ITAdminAccount.manage-users.index') }}">Manage Users</a>
        </li>

        <li>
            <img src="{{ asset('hakkem/images//University/Manage-users icon.png') }}" alt="Requests">
            <a href="{{ route('roles.index') }}">Manage Roles</a>
        </li>

        <li>
            <img src="{{ asset('hakkem/images/image-signout-icon.png') }}" alt="Sign Out">
            <a href="{{ route('Get_Started')}}">Sign Out</a>
        </li>

    </ul>
</aside>

