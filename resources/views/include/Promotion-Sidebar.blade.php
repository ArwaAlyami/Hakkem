<aside class="sidebar">
    <ul>
        <li class="">
            <img src="{{ asset('hakkem\images\University\My-profile icon.png') }}" alt="Profile">
            <a href="{{ route("PromotionAccount.Profile")}}">My Profile</a>
        </li>
        
        <li>
            <img src="{{ asset('hakkem\images\University\Promotion-Request icon.png') }}" alt="Research">
            <a href="{{ route('PromotionAccount.PromotionRequests')}}">Promotion Requests</a>
        </li>

        <li>
            <img src="{{ asset('hakkem\images\University\Reviewers-Lists icons.png') }}" alt="Research">
            <a href="{{ route('PromotionAccount.ReviewersLists')}}">Reviewer's Lists</a>
        </li>


        <li>
            <img src="{{ asset('hakkem\images\University\Sign-out icon.png') }}" alt="Sign Out">
            <a href="{{ route('Get_Started')}}">Sign Out</a>
        </li>
    </ul>
</aside>