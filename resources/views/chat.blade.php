<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AI Review Request</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/MainPages/Requests_Updated/AI-Review-Request.css') }}" />
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
                <input type="text" id="researchField" />

                <label>Research Abstract:</label>
                <textarea id="researchAbstract"></textarea>

                <label>Research File:</label>
                <div class="input_container">
                    <label for="files" class="btn">Browse Files</label>
                    <input id="files" class="browse" style="display: none" type="file" onchange="displayFileName()" />
                    <span id="file-name">No file selected</span>
                </div>

                <div class="buttons">
                    <a href="{{ route('Requests.ReviewRequest.ReviewOptions') }}">
                        <button class="cancel">Cancel</button>
                    </a>

                    <button class="next" onclick="makeAssessment()">Make a Preliminary Assessment</button>
                </div>
            </div>

            <!-- Second Step -->
            <div class="form-step">
                <div class="feedback-container">
                    <div class="feedback-view">
                        <p class="feedback-text size-text">Loading...</p>
                    </div>
                </div>

                <div class="closebtn">
                    <a href="{{ route('Main_Pages.Home') }}">
                        <button class="confirm">Close</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function displayFileName() {
            const input = document.getElementById('files');
            const fileName = input.files[0]?.name || 'No file selected';
            document.getElementById('file-name').textContent = fileName;
        }

        function goToStep(stepNumber) {
            const steps = document.querySelectorAll('.form-step');
            steps.forEach((step, index) => {
                step.classList.remove('active');
                if (index === stepNumber - 1) {
                    step.classList.add('active');
                }
            });

            const progressSteps = document.querySelectorAll('.progress-bar .step');
            progressSteps.forEach((step, index) => {
                step.classList.toggle('preactive', index < stepNumber);
            });
        }

        function makeAssessment() {
            const title = document.getElementById('researchTitle').value;
            const field = document.getElementById('researchField').value;
            const abstract = document.getElementById('researchAbstract').value;

            const prompt = `Please provide a preliminary review of the following research:\n\nTitle: ${title}\nField: ${field}\nAbstract: ${abstract}\n\nGive strengths, weaknesses, formatting and English issues.`;

            document.querySelector('.feedback-text').innerText = 'Loading...';

            fetch("{{ route('chat.ask') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({ message: prompt })
            })
            .then(response => response.json())
            .then(data => {
                document.querySelector('.feedback-text').innerText = data.reply;
                goToStep(2);
            })
            .catch(error => {
                console.error("Error:", error);
                document.querySelector('.feedback-text').innerText = "An error occurred.";
                goToStep(2);
            });
        }
    </script>
</body>

</html>