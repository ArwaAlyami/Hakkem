<aside class="sidebar">
    <ul>

        <li class="active">
            <img src="{{ asset('hakkem/images/image-profile-icon.png') }}" alt="Profile">
            <a href="{{ route("researcher-account.my-profile.index")}}">My Profile</a>
        </li>
        <li>
            <img src="{{ asset('hakkem/images/University/Manage-users icon.png') }}" alt="Manage Manage-users">
            <a href="{{ route('researcher-account.my-researches.index')}}">Manage Users</a>
        </li>
        <li>
            <img src="{{ asset('hakkem/images/image-password-icon.png') }}" alt="Change Password">
            <a href="#">Change Password</a>
        </li>
        <li>
            <img src="{{ asset('hakkem/images/image-signout-icon.png') }}" alt="Sign Out">
            <a href="{{ route('Get_Started')}}">Sign Out</a>
        </li>

    </ul>
</aside>
