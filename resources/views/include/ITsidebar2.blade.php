<aside class="sidebar">
    <ul>
 
        <li class="">
            <img src="{{ asset('hakkem/images/image-profile-icon.png') }}" alt="Profile">
            <a href="{{ route('JournalITAdmin.Profile') }}">My Profile</a>
        </li>

        <li>
            <img src="{{ asset('hakkem/images/University/Manage-users icon.png') }}" alt="Research">
            <a href="{{ route('JournalITAdmin.ManageUsers') }}">Manage Users</a>
        </li>
   
        <li>
            <img src="{{ asset('hakkem/images//University/Manage-users icon.png') }}" alt="Requests">
            <a href="{{ route('JournalITAdmin.ManagePermissions') }}">Manage Roles</a>
        </li>

        <li>
            <img src="{{ asset('hakkem/images/image-signout-icon.png') }}" alt="Sign Out">
            <a href="{{ route('Get_Started') }}">Sign Out</a>
        </li>

    </ul>
</aside>

