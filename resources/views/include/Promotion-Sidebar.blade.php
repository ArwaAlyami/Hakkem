<aside class="sidebar">
    <ul>
        <li class="active">
            <img src="{{ asset('hakkem\images\University\My-profile icon.png') }}" alt="Profile">
            <a href="{{ route("researcher-account.my-profile.index")}}">My Profile</a>
        </li>
        <li>
            <img src="{{ asset('hakkem\images\University\Promotion-Request icon.png') }}" alt="Research">
            <a href="{{ route('researcher-account.my-researches.index')}}">Promotion Requests</a>
        </li>
        <li>
            <img src="{{ asset('hakkem\images\University\Reviewers-Lists icons.png') }}" alt="Research">
            <a href="{{ route('researcher-account.my-researches.index')}}">Reviewer's Lists</a>
        </li>
        <li>
            <img src="{{ asset('hakkem\images\University\Change-Password icon.png') }}" alt="Change Password">
            <a href="#">Change Password</a>
        </li>

        <li>
            <img src="{{ asset('hakkem\images\University\Sign-out icon.png') }}" alt="Sign Out">
            <a href="{{ route('Get_Started')}}">Sign Out</a>
        </li>
    </ul>
</aside>