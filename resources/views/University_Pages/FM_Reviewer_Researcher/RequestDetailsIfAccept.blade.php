<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Details</title>
<!-- ✅ CSS -->
<link rel="stylesheet" href="{{ asset('hakkem/css/UniversityPages/FM_Reviewer/FM_Rev_Request_Details_If_Reviewer_Accept.css') }}">
<link rel="stylesheet" href="{{ asset('hakkem/css/Header-Footer.css') }}" />

<!-- ✅ JavaScript -->
<script src="{{ asset('hakkem/javascript/University/FM_Researcher/Request_Details.js') }}" defer></script>
</head>
<body>

    @include('include.header')

<div class="container">

<!-- ✅ الهيدر العلوي كـ بوكس -->
<header class="page-header">
    <div class="header-box">
        <h2>Request Details:</h2>
        <div class="request-info">
            <!-- صورة شعار الجامعة -->
            <img src="{{ asset('hakkem/images/University/Najran_University.png') }}" alt="University Logo" width="50" height="50">
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
                <tr>
                    <th>Research Number</th>
                    <th>Research Title</th>
                    <th>Research Field</th>
                    <th>Price</th>
                    <th>Full Research</th>
                </tr>
            </thead>
            <tbody>
               
                <tr>
                    <td>1</td>
                    <td>AAA</td>
                    <td>AAA</td>
                    <td>AAA SAR</td>
                    <td class="actions">
                        <button class="pdf-btn">
                            <img src="{{ asset('hakkem/images/University/pdf icon.png') }}" alt="PDF">AAA
                        </button>                         
                        
                        <a href="{{ route('RevResAccount.ReviewForm')}}">
                        <button class="Review">Review</button>
                        </a>

                        <button class="see-more">See more <span class="arrow">▼</span></button>
                        </div>
                    </td>
                </tr>

                <tr class="research-details">
                    <td colspan="4">
                        <div class="details-box">
                            <div class="sub-box"><strong>Research Field:</strong>AAA</div>
                            <div class="sub-box"><strong>Keywords:</strong>AAA</div>
                            <div class="sub-box">
                                <strong>Abstract:</strong>
                                <p>AAA</p>
                            </div>
                        </div>
                    </td>
                </tr>
  
            </tbody>
        </table>
        <div class="table-footer">
            <button class="send-feedback-btn">Send Feedback</button>
        </div>
    </main>
</div>
    @include('include.footer')
    
</body>
</html>
