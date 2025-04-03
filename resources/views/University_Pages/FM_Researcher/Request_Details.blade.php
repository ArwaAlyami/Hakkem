<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Details</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/UniversityPages/FM_Researcher/Request_Details.css') }}">
    <script src="{{ asset('hakkem/javascript/University/FM_Researcher/Request_Details.js') }}" defer></script>
</head>
<body>
<!-- ✅ الهيدر العلوي كـ بوكس -->
<header class="page-header">
    <div class="header-box">
        <h2>Request Details:</h2>
        <div class="request-info">
            <!-- صورة شعار الجامعة -->
            <img src="{{ asset(path: 'hakkem/images/University/Najran_University.png') }}" alt="University Logo" width="50" height="50">

                <span>Number of researches: <strong>AAA</strong></span>
                <span>Specialization: <strong>AAA</strong></span>
                <span>Submission Date: <strong>AAA</strong></span>
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
                <!-- ✅ 5 أبحاث كاملة -->

                <tr>
                    <td>AAA</td>
                    <td>AAA</td>
                    <td>AAA</td>
                    <td>AAA SAR</td>
                    <td class="actions">
                        <button class="pdf-btn">
                            <img src="{{ asset('hakkem/images/University/pdf icon.png') }}" alt="PDF">AAA
                        </button>  
                        <button class="see-more">See more <span class="arrow">▼</span></button>
                        </div>
                    </td>
                </tr>


                <tr class="research-details">
                    <td colspan="4">
                        <div class="details-box">
                            <div class="sub-box"><strong>Research Field:</strong> Data Science</div>
                            <div class="sub-box"><strong>Keywords:</strong> NLP, AI, Chatbots</div>
                            <div class="sub-box">
                                <strong>Abstract:</strong>
                                <p>AI-powered chatbots in healthcare enhance patient interaction and efficiency...</p>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>

</body>
</html>
