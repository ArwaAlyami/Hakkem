<!DOCTYPE html>
<html>

<head>
    <title>Review By AI or Expert Feedback</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/MainPages/Requests_Updated/ReviewRequestOptions.css') }}" />
</head>

<body>
    <div class="overlay">
        <div class="review-option container-r">
            <div class="review-options__column">
                <!-- col -->
                <div>
                    <!-- content -->
                    <h1>
                        You can review your research using AI through HAKKEMGPT or choose
                        an independent reviewer for expert feedback!
                    </h1>
                    <div>
                        <div>
                            <!-- col -->
                            <div class="review-options__divider"></div>

                            <div class="div-y">
                                <!-- row -->
                                <div class="AI-Col">
                                    <!-- ai cont -->
                                    <div class="cont">
                                        <div class="div-m">
                                            <!-- col -->
                                            <img src="{{ asset('hakkem/images/Requests/AI-Robot.svg')}}" />
                                            <div class="btn-cont">
                                                <!-- text cont -->
                                                <h2>Through</h2>
                                                <a href="{{ route('chat.index')}}" class="btn"> HAKKEMGPT </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="review-options__independent-divider"></div>

                                <div class="Rev-Col">
                                    <!-- ind cont -->
                                    <div class="cont">
                                        <div class="div-m">
                                            <!-- col -->
                                            <img src="{{ asset('hakkem/images/Requests/Reviewer User.svg')}}" />
                                            <div class="btn-cont">
                                                <!-- text cont -->
                                                <h2>By An</h2>
                                                <a href="{{ route('Requests.ReviewRequest.IndReviewerOptions')}}" class="btn">
                                                    Independent Reviewer
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>