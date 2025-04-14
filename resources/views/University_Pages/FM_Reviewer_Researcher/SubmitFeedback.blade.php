<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Details</title>
<!-- ✅ CSS -->
<link rel="stylesheet" href="{{ asset('hakkem/css/UniversityPages/FM_Reviewer/FM_Rev_Request_Details_Feedback_Submission.css') }}">
<link rel="stylesheet" href="{{ asset('hakkem/css/Header-Footer.css') }}" />

<!-- ✅ JavaScript -->
<script src="{{ asset('hakkem/javascript/University/FM_Researcher/Request_Details.js') }}" defer></script>

</head>
<body>

    @include('include.header')


<!-- ✅ الهيدر العلوي كـ بوكس -->
<header class="page-header">
    <div class="header-box">
        <h2>Request Details:</h2>
        <div class="request-info">
            <!-- صورة شعار الجامعة -->
            <img src="{{ asset(path: 'hakkem/images/University/Najran_University.png') }}" alt="University Logo" width="50" height="50">
                <span>Number of researches: <strong>5 Researches</strong></span>
                <span>Specialization: <strong>Computer Information Systems</strong></span>
                <span>Submission Date: <strong>12-2-2025</strong></span>
            </div>
        </div>
    </header>

    <!-- ✅ المحتوى الرئيسي -->
    <main class="content">
        <!-- ✅ الجدول -->
        <table>
            <thead>
                @foreach ($reviews as $index => $review)
<tr>
    <td>{{ $index + 1 }}</td>
    <td>{{ $review->request->title }}</td>
    <td>{{ $review->request->field }}</td>
    <td>{{ $review->request->price }} SAR</td>
    <td class="actions">
        <a href="{{ asset('storage/' . $review->request->pdf_path) }}" target="_blank" class="pdf-btn">
            <img src="{{ asset('hakkem/images/University/pdf icon.png') }}" alt="PDF"> PDF
        </a>
        <button class="Review">Reviewed</button>
        <button class="see-more">See more <span class="arrow">▼</span></button>
    </td>
</tr>
<tr class="research-details">
    <td colspan="4">
        <div class="details-box">
            <div class="sub-box"><strong>Research Field:</strong> {{ $review->request->field }}</div>
            <div class="sub-box"><strong>Keywords:</strong> {{ $review->request->keywords }}</div>
            <div class="sub-box"><strong>Abstract:</strong> {{ $review->request->abstract }}</div>
        </div>
    </td>
</tr>
@endforeach

     <p>Exploring IoT in smart city management, its impact, and security challenges...</p>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Cybersecurity Threats</td>
                    <td>Cyber Security</td>
                    <td>600 SAR</td>
                    <td class="actions">
                        <button class="pdf-btn">
                            <img src="{{ asset('images/University/pdf-icon.png') }}" alt="PDF"> AI and Healthcare.pdf
                        </button>                        <button class="Review">Reviewed</button>
                        <button class="see-more">See more <span class="arrow">▼</span></button>
                    </td>
                </tr>
                <tr class="research-details">
                    <td colspan="4">
                        <div class="details-box">
                            <div class="sub-box"><strong>Research Field:</strong> Cybersecurity</div>
                            <div class="sub-box"><strong>Keywords:</strong> Malware, Encryption, Data Privacy</div>
                            <div class="sub-box">
                                <strong>Abstract:</strong>
                                <p>Analyzing modern cybersecurity threats and prevention methods...</p>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>Blockchain in Finance</td>
                    <td>Finance</td>
                    <td>200 SAR</td>
                    <td class="actions">
                        <button class="pdf-btn">
                            <img src="{{ asset('images/University/pdf-icon.png') }}" alt="PDF"> AI and Healthcare.pdf
                        </button>                        <button class="Review">Reviewed</button>
                        <button class="see-more">See more <span class="arrow">▼</span></button>

                    </td>
                </tr>
                <tr class="research-details">
                    <td colspan="4">
                        <div class="details-box">
                            <div class="sub-box"><strong>Research Field:</strong> Finance & Blockchain</div>
                            <div class="sub-box"><strong>Keywords:</strong> Decentralization, Cryptography</div>
                            <div class="sub-box">
                                <strong>Abstract:</strong>
                                <p>Impact of blockchain technology on financial transactions...</p>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <form method="POST" action="{{ route('reviewer.feedbacks.submit') }}">
            @csrf
            <button class="send-feedback-btn" type="submit">Send Feedback</button>
        </form>

    </main>

    @include('include.footer')

</body>
</html>
