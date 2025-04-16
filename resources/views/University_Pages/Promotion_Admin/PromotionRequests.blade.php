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

                    {{-- 

                        @foreach ($requests as $request)
                        <div class="request
                            {{ $request->status == 'active' ? 'yellow' :
                                ($request->status == 'completed' ? 'teal' :
                                ($request->status == 'rejected' ? 'red' : '')) }}">

                            <div class="request-info row">
                                <div class="col">
                                    <div class="request-id">{{ $request->id }}</div>
                                    <div class="request-name">{{ $request->facultyMember->name }}</div>
                                    <div class="request-dept">{{ $request->facultyMember->department }}</div>
                                </div>

                                <div class="col">
                                    <div class="buttons">
                                        <a href="{{route('PromotionAccount.AcceptOrReject' )}}">
                                            <button class="view">View Request</button>
                                        </a>
                                        <button class="track">Track</button>
                                        <button class="pay" $request->status != 'completed' ? 'disabled' : ''>Pay</button>
                                    </div>
                                    <div class="request-date">
                                        <p>Result submission date: {{ \Carbon\Carbon::parse($request->result_submission_date)->format('d-m-Y') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div> --}}



                    <div class="tabs">
                        <div class="request red">
                            {{--  @foreach ($requests as $request)  --}}
                            <div class="request-info row">
                                <div class="col">
                                    <div class="request-id">#1</div>
                                    <div class="request-name">Dr. Feryal Al-Harith</div>
                                    {{-- <div class="request-dept">College of Computer Science and Information Systems</div> --}}
                                </div>

                                <div class="col">
                                    <div class="buttons">
                                    <a href="{{ route('PromotionAccount.AcceptOrReject')}}">  <button class="view">View Request</button></a> 
                                    <a href="#">  <button class="track">View Feedbacks</button></a>
                                        {{-- <a href="#">  <button class="pay" disabled>Pay</button></a> --}}
                                    </div>
                                    <div class="request-date">
                                        {{-- <p>Result submission date: 12-2-2025</p> --}}
                                    </div>
                                </div>
                            </div>
                            {{--  @endforeach  --}}
                        </div>
                    </div>
                    </div>
                </div>

         @include('include.Footer')
    </body>
</html>
