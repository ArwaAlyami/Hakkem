<aside class="sidebar">
    <ul>

        <li class="active">
            <img src="{{ asset('hakkem/images/image-profile-icon.png') }}" alt="Profile">
            <a href="{{ route('RevResAccount.Profile')}}">My Profile</a>
        </li>

        {{-- <li>
            <img src="{{ asset('hakkem/images/image-research-icon.png') }}" alt="Research">
            <a href="{{ route('RevResAccount.My_Researches')}}">My Researches</a>
        </li> --}}

        {{-- <li>
            <img src="{{ asset('hakkem/images/image-requests-icon.png') }}" alt="Requests">
            <a href="{{ route('RevResAccount.My_Requests')}}">My Requests</a>
        </li> --}}


        @can('receive_request')
        <li>
            <img src="{{ asset('hakkem/images/image-requests-icon.png') }}" alt="Requests">
            <a href="{{-- route('RevResAccount.ReceivedRequests')--}}">Received Requests</a>
        </li>
        @endcan


        <li>
            <img src="{{ asset('hakkem/images/image-signout-icon.png') }}" alt="Sign Out">
            <a href="{{ route('SignOut')}}">Sign Out</a>
        </li>

    </ul>
</aside>
