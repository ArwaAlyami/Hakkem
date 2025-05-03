<aside class="sidebar">
    <ul>
 
        
        <li class="active">
            <img src="{{ asset('hakkem/images/image-profile-icon.png') }}" alt="Profile">
            <a href="{{ route("researcher-account.my-profile.index")}}">My Profile</a>
        </li>


        @can('research_view')
        <li>
            <img src="{{ asset('hakkem/images/image-research-icon.png') }}" alt="Research">
            <a href="{{ route('researcher-account.my-researches.index')}}">My Researches</a>
        </li>
        @endcan


        {{-- @can('request_list_view')
        <li>
            <img src="{{ asset('hakkem/images/image-requests-icon.png') }}" alt="Requests">
            <a href="{{ route('researcher-account.My_Requests.Requests')}}">My Requests</a>
        </li>
        @endcan --}}

        @can('request_list_view')
        <li>
            <img src="{{ asset('hakkem/images/image-requests-icon.png') }}" alt="Requests">
            <a href="{{ route('history.index')}}">My Requests History</a>
        </li>
        @endcan




        {{-- @can('feedback_view') --}}
        {{-- <li>
            <img src="{{ asset('hakkem/images/image-requests-icon.png') }}" alt="Requests">
            <a href="{{ route('researcher-account.My_Requests.Requests')}}">My Feedbacks</a>
        </li> --}}
        {{-- @endcan --}}


        <li>
            <img src="{{ asset('hakkem/images/image-signout-icon.png') }}" alt="Sign Out">
            <a href="{{ route('SignOut')}}">Sign Out</a>
        </li>
   

    </ul>
</aside>
