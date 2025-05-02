<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Request Feedback</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Journals/Associated-Ed/Accepted-Request.css') }}">
    <script src="{{ asset('hakkem/javascript/University/Promotion_Admin/Research_Details.js') }}" defer></script>
    <script src="{{ asset('hakkem/javascript/University/Promotion_Admin/overlay.js')}}" defer></script>
</head>

<body>
    @include('include.Header')

    <div class="contain">
        <div class="header">
            <div class="cont">
                <h2>Request Details</h2>
                <p><span class="highlight">Specialization:</span> {{ $request->specialization }}</p>
            </div>
        </div>
    </div>

    <div class="container">
        <table>
            <tr>
                <th>Research Number</th>
                <th>Research Title</th>
                <th>Research Field</th>
                <th class="last">Full Research</th>
            </tr>

            <tbody id="table-body">
                @foreach($request->researches as $research)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $research->title }}</td>
                    <td>{{ $research->field }}</td>
                    <td class="td-btn">
                        <a href="{{ route('download.research', $research->file_name) }}">
                            <button class="pdf-button">
                                <img src="{{ asset('hakkem/images/University/pdf icon.png') }}" class="pdf">
                                {{ $research->file_name }}
                            </button>
                        </a>
                        <div class="row">
                            <button class="see-more-button" id="openOverlayBtn">View Feedback</button>
                            <button class="see-more-button">
                                See more
                                <div>
                                    <div style="margin-left: 10px;" id="chevron-arrow-up" class="chevron-d"></div>
                                </div>
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="info-box">
            <div class="keywords"><strong>Keywords:</strong><br>{{ $request->keywords }}</div>
            <hr>
            <div class="abstract">
                <strong>Abstract:</strong><br>
                {{ $request->abstract }}
            </div>
        </div>

        <div class="footer-buttons">
            <form method="POST" action="{{ route('request.reject', $request->id) }}">
                @csrf
                <button type="submit" class="reject">Reject Publication</button>
            </form>
            <form method="POST" action="{{ route('request.accept', $request->id) }}">
                @csrf
                <button type="submit" class="accept">Accept Publication</button>
            </form>
        </div>
    </div>

    <!-- Overlay -->
    <div id="feedbackOverlay" class="overlay">
        <div class="overlay-content">
            <span class="close-btn" id="closeOverlayBtn">&times;</span>
            <div class="feedback-list">
                @foreach($request->feedbacks as $feedback)
                <div class="feedback-item">
                    <span>{{ $feedback->reviewer->name }}</span>
                    @if($feedback->is_viewed)
                        <button class="viewed-btn">Viewed Feedback</button>
                    @else
                        <button class="view-btn">View Feedback</button>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('include.Footer')
</body>

</html>
