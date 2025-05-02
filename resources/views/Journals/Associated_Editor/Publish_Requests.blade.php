<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publish Requests</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Journals/Associated-Ed/PublishRequests.css') }}">
    <link rel="stylesheet" href="{{ asset('hakkem/css/Header-Footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/Sidebar.css') }}" />
</head>

<body>

    <div class="page-content">
        <div class="tabs">
            <button class="active">All</button>
            <button>Active Requests</button>
            <button>Completed Requests</button>
            <button>Rejected Requests</button>
        </div>

        @foreach($publishRequests as $request)
            <div class="request
                @if($request->status == 'active') yellow
                @elseif($request->status == 'completed') teal
                @elseif($request->status == 'rejected') red
                @endif
            ">
                <div class="request-info row">
                    <div class="col">
                        <div class="request-id">#{{ $request->request_id }}</div>
                        <div class="request-name">{{ $request->name }}</div>
                        <div class="request-dept">{{ $request->department }}</div>
                    </div>
                    <div class="col2">
                        <div class="buttons">
                            <a class="view" href="#">View Request</a>
                            @if($request->status == 'active')
                                <button class="pay" id="openOverlayBtn">Rate</button>
                            @else
                                <button class="pay" id="openOverlayBtn" disabled>Rate</button>
                            @endif
                        </div>
                        <div class="request-date">
                            <p>Result submission date: {{ $request->result_submission_date->format('d-m-Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>//دينامك


    @include('include.Header')

    <div class="main-container">
        @include('include.Associated-Ed-Sidebar')

        <div class="page-content">
            <div class="tabs">
                <button class="active">All</button>
                <button>Active Requests</button>
                <button>Completed Requests</button>
                <button>Rejected Requests</button>
            </div>

            <!-- الطلبات الحالية -->
            <div class="request yellow">
                <div class="request-info row">
                    <div class="col">
                        <div class="request-id">#98761</div>
                        <div class="request-name">Dr. Abdullah Al-Ghamdi</div>
                        <div class="request-dept">College of Computer Science and Information Systems</div>
                    </div>
                    <!-- section -->
                    <div class="col2">
                        <div class="buttons">
                            <a class="view" href="#">View Request</a>
                            <button class="pay" id="openOverlayBtn">Rate</button>
                        </div>
                        <div class="request-date">
                            <p>Result submission date: 12-2-2025</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- الطلبات المنتهية -->
            <div class="request teal">
                <div class="request-info row">
                    <div class="col">
                        <div class="request-id">#12345</div>
                        <div class="request-name">Dr. Noura Abdel Aziz</div>
                        <div class="request-dept">College of Computer Science and Information Systems</div>
                    </div>

                    <div class="col2">
                        <div class="buttons">
                            <a class="view" href="#">View Request</a>
                            <a class="track" href="#">View Feedbacks</a>
                            <button class="pay" id="openOverlayBtn" disabled>Rate</button>
                        </div>
                        <div class="request-date">
                            <p>Result submission date: 12-2-2025</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- الطلبات المرفوضة -->
            <div class="request red">
                <div class="request-info row">
                    <div class="col">
                        <div class="request-id">#86543</div>
                        <div class="request-name">Dr. Feryal Al-Harith</div>
                        <div class="request-dept">College of Computer Science and Information Systems</div>
                    </div>

                    <div class="col2">
                        <div class="buttons">
                            <a class="view" href="#">View Request</a>
                        </div>
                        <div class="request-date">
                            <p>Result submission date: 12-2-2025</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Overlay -->
    <div id="feedbackOverlay" class="overlay">
        <div class="overlay-content">
            <span class="close-btn" id="closeOverlayBtn">&times;</span>

            <div class="feedback-list">
                <!-- Unviewed Feedback -->
                <div class="feedback-item">
                    <span>Dr. Abdullah Al-Ghamdi</span>
                    <button class="view-btn" id="openPopupBtn">Rate</button>
                </div>

                <!-- Viewed Feedback -->
                <div class="feedback-item">
                    <span>Dr. Noura Abdel Aziz</span>
                    <button class="viewed-btn" id="openPopupBtn">Rate</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Overlay -->
    <div class="overlay" id="evaluationOverlay">
        <div class="popup">
            <span class="close-btn" id="closePopupBtn">&times;</span>
            <h2>Reviewers evaluation:</h2>

            <div class="rating-row">
                <label>Speed:</label>
                <div class="stars">
                    <span class="star filled">&#9733;</span>
                    <span class="star filled">&#9733;</span>
                    <span class="star filled">&#9733;</span>
                    <span class="star filled">&#9733;</span>
                    <span class="star">&#9733;</span>
                </div>
            </div>

            <div class="rating-row">
                <label>Quality:</label>
                <div class="stars">
                    <span class="star filled">&#9733;</span>
                    <span class="star filled">&#9733;</span>
                    <span class="star filled">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                </div>
            </div>

            <div class="rating-row">
                <label>Accuracy:</label>
                <div class="stars">
                    <span class="star filled">&#9733;</span>
                    <span class="star filled">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                </div>
            </div>

            <div class="btns">
                <button class="btn cancel">Cancel</button>
                <button class="btn submit">Submit</button>
            </div>
        </div>
    </div>
    <script src="{{ asset('hakkem\javascript\University\Promotion_Admin\overlay.js')}}"></script>
    @include('include.Footer')
</body>

</html>
