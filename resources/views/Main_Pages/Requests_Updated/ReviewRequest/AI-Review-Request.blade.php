<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AI Review Request</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/MainPages/Requests_Updated/AI-Review-Request.css')}}" />
</head>

<body>
    <div class="review-option container-r">
        <div class="container">
            <div class="progress-bar">
                <div class="step preactive">Step 1</div>
                <div class="step">Step 2</div>
            </div>

            <!-- First Step -->
            <div class="form-step active">
                <h2>Please Fill in the following research details:</h2>
                <label>Research Title:</label>
                <input type="text" id="researchTitle" />

                <label>Research Field:</label>
                <input type="text" id="researchTitle" />



                <label>Research Abstract:</label>
                <textarea id="researchAbstract"></textarea>

                <label>Research File:</label>
                <div class="input_container">
                    <label for="files" class="btn">Browse Files</label>
                    <input id="files" class="browse" style="display: none" type="file" onchange="displayFileName()" />
                    <span id="file-name">No file selected</span>
                </div>

                <div class="buttons">
                    <a href="{{ route('Requests.ReviewRequest.ReviewOptions')}}">
                    <button class="cancel">Cancel</button>
                    </a>



                    {{-- Here Apply API Integration --}}

                    <button class="next">
                        Make a Preliminary Assessment
                    </button>
                    
                    {{-- ************************** --}}




                </div>
            </div>

            <!-- Second Step -->
            <div class="form-step">
                <div class="feedback-container">
                    <div class="feedback-view">
                        <p class="feedback-text size-text">

                            {{-- response --}}

                        </p>
                    </div>
                </div>

                <div class="closebtn">
                    <a href="{{ route('Main_Pages.Home')}}">
                    <button class="confirm">Close</button>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <script src="{{ asset(path: 'hakkem/javascript/Review-Request.js')}}"></script>
</body>

</html>