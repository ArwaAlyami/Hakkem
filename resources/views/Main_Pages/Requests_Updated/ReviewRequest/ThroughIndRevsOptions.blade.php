<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/MainPages/Requests_Updated/ThroughIndRevsOptions.css') }}" />
    <title>Choose Review Type</title>
</head>

<body>
    <div class="overlay">
        <div class="container-r review-option">
            <section class="selection-container">
                <h1 class="main-question">
                    How do you want to choose your reviewer?
                </h1>

                <!-- إطار الخيارين -->
                <div class="selection-options">
                    <!-- إطار الخيار حق الذكاء -->
                    <div class="option-left">
                        <h2 class="option-title">using the help of</h2>
                        <img class="option-icon" src="{{ asset('hakkem/images/Requests/AI-Robot.svg') }}" alt="Robot icon" />
                        
                        <button class="option-button hakkem-gpt">
                            <a href="{{ route('Requests.ReviewRequest.ThroughIndReviewer')}}">
                            <span class="button-text">HAKKEMGPT</span>
                            </a>
                        </button>

                    </div>

                    <!-- إطار الخيار الي عاليمين -->
                    <div class="option-right">
                        <h2 class="option-title">Agreed with a</h2>
                        <img class="option-icon" src="{{ asset('hakkem/images/Requests/Agreed-W-Reviewer.png') }}"
                            alt="Handshake icon" />

                        <button class="option-button reviewer">
                            <a href="{{ route('Requests.ReviewRequest.ThroughOffersReview')}}">
                            <span class="button-text">Reviewer</span>
                            </a>
                        </button>

                    </div>
                </div>
            </section>
        </div>
    </div>
</body>

</html>