<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publish Requests</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Journals/PublishRequests.css') }}">
    <link rel="stylesheet" href="{{ asset('hakkem/css/Header-Footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/Sidebar.css') }}" />
    <script src="{{ asset('hakkem/javascript/Filter.js') }}" defer></script>
</head>
<body>
    @include('include.Header')

    <div class="main-container">
        @include('include.Chief-Ed-Sidebar')

        <div class="page-content">
            <div class="tabs">
                <button class="active">All</button>
                <button>Published Requests</button>
                <button>Under Review Requests</button>
                <button>Rejected Requests</button>
            </div>

            <!-- All Requests -->
            @foreach($allRequests as $request)
                <div class="request yellow">
                    <div class="request-info row">
                        <div class="col">
                            <div class="request-id">#{{ $request->request_id }}</div>
                            <div class="request-name">{{ $request->name }}</div>
                            <div class="request-dept">{{ $request->department }}</div>
                        </div>
                        <div class="col2">
                            <div class="buttons">
                                <a class="view" href="{{ route('request.show', $request->id) }}">View Request</a>
                            </div>
                            <div class="request-date">
                                <p>Result submission date: {{ $request->submission_date }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Published Requests -->
            @foreach($publishedRequests as $request)
                <div class="request teal">
                    <div class="request-info row">
                        <div class="col">
                            <div class="request-id">#{{ $request->request_id }}</div>
                            <div class="request-name">{{ $request->name }}</div>
                            <div class="request-dept">{{ $request->department }}</div>
                        </div>
                        <div class="col2">
                            <div class="buttons">
                                <a class="view" href="{{ route('request.show', $request->id) }}">View Request</a>
                                <a class="track" href="#">View Feedbacks</a>
                            </div>
                            <div class="request-date">
                                <p>Result submission date: {{ $request->submission_date }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Under Review Requests -->
            @foreach($underReviewRequests as $request)
                <div class="request yellow">
                    <div class="request-info row">
                        <div class="col">
                            <div class="request-id">#{{ $request->request_id }}</div>
                            <div class="request-name">{{ $request->name }}</div>
                            <div class="request-dept">{{ $request->department }}</div>
                        </div>
                        <div class="col2">
                            <div class="buttons">
                                <a class="view" href="{{ route('request.show', $request->id) }}">View Request</a>
                            </div>
                            <div class="request-date">
                                <p>Result submission date: {{ $request->submission_date }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Rejected Requests -->
            @foreach($rejectedRequests as $request)
                <div class="request red">
                    <div class="request-info row">
                        <div class="col">
                            <div class="request-id">#{{ $request->request_id }}</div>
                            <div class="request-name">{{ $request->name }}</div>
                            <div class="request-dept">{{ $request->department }}</div>
                        </div>
                        <div class="col2">
                            <div class="buttons">
                                <a class="view" href="{{ route('request.show', $request->id) }}">View Request</a>
                            </div>
                            <div class="request-date">
                                <p>Result submission date: {{ $request->submission_date }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('include.Footer')
</body>
</html>
