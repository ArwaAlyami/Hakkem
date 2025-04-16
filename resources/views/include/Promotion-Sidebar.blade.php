<aside class="sidebar">
    <ul>
         
        <li class="">
            <img src="{{ asset('hakkem\images\University\My-profile icon.png') }}" alt="Profile">
            <a href="{{ route("PromotionAccount.Profile")}}">My Profile</a>
        </li> 
        
        
        @can('received_promotion_request')
        <li>
            <img src="{{ asset('hakkem\images\University\Promotion-Request icon.png') }}" alt="Research">
            <a href="{{ route('PromotionAccount.PromotionRequests')}}">Promotion Requests</a>
        </li>
        @endcan 


        @can('list_view')
        <li>
            <img src="{{ asset('hakkem\images\University\Reviewers-Lists icons.png') }}" alt="Research">
            <a href="{{ route('PromotionAccount.ReviewersLists')}}">Reviewer's Lists</a>
        </li>
        @endcan 


        <li>
            <img src="{{ asset('hakkem\images\University\Sign-out icon.png') }}" alt="Sign Out">
            <a href="{{ route('SignOut')}}">Sign Out</a>
        </li>
    </ul>
</aside>