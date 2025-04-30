<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Details</title>
    <link rel="stylesheet" href="{{ asset('hakkem\css\Universty\PromotionAdmin\Accept-Reject-Request.css') }}">
    <script src="{{ asset('hakkem\javascript\University\Promotion_Admin\Research_Details.js') }}" defer></script>
</head>

<body>
    @include('include.Header')
    <div class="contain">
        <div class="header">
            <h2>Request Details</h2>
            <p><span class="highlight">ID: </span>{{$research->id}}</p>
            <p><span class="highlight">Specialization: </span>{{$research->field}}</p>
        </div>
    </div>
    <div class="container">

                <div class="info-box">
                    <div class="keywords"><strong>Keywords:</strong><br>{{$research->keywords}}</div>
                    <hr>
                    <div class="abstract">
                        <strong>Abstract:</strong><br>
                        {{$research->abstract}}
                    </div>
                </div>

                <div class="action-row">
                    <form action="{{ route('promotion.request.accept',$research->id) }}" method="POST">
                        @csrf
                    
                        {{-- Select user --}}
                        <label for="user_id"><strong>Select Reviewer:  </strong></label>
                        <select name="user_id" id="user_id" required>
                            <option value="" disabled selected>Choose</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->f_name .' '. $user->l_name }} - {{$user->department}}</option>
                            @endforeach
                        </select>
                    
                        {{-- Optional: send research/request ID --}}
                        <input type="hidden" name="research_id" value="{{ $research->id }}">
                    
                        <button type="submit" class="accept">Accept Request</button>
                    </form>

                    {{-- <form action="{{ route('PromotionAccount.PromotionRequests')}}" method="POST">
                        @csrf --}}
                    <a href="{{ route('PromotionAccount.PromotionRequests')}}">
                        <button type="submit" class="reject">Reject Request</button>
                    </a>
                    {{-- </form> --}}
                </div>

        </div>
    @include('include.Footer')
</body>

</html>
