<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promotion Requests</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Universty/PromotionAdmin/PromotionRequests.css') }}">
    <link rel="stylesheet" href="{{ asset('hakkem/css/Header-Footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/Sidebar.css') }}" />
</head>

<body>
    @include('include.Header')
        <div class="container">
            @include('include.Promotion-Sidebar')
                <div class="page-content">

                    <div class="tabs2">
                    @foreach ($promotionRequests as $key=>$request)  
                    <div class="tabs">
                        <div class="request red">
                            <div class="request-info row">

                                <div class="col">
                                    <div class="request-id">#{{++$key}}</div>
                                    <div class="request-name">{{$request->research?->title}}</div>
                                    <div class="request-dept">Field: {{$request?->research?->field }}
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="buttons">
                                    <a href="{{ route('PromotionAccount.AcceptOrReject',$request->research->id)}}">  <button class="view">View Request</button></a> 
                                    <a href="{{ $request?->media[0]?->original_url ?? '#' }}">  <button class="track">View Feedbacks</button></a>
                                    </div>
                                </div>
                                   
                                </a>   
                            </div>
                        </div>
                    </div>
                    @endforeach  

                </div>
                </div>
            </div>

         @include('include.Footer')
    </body>
</html>
