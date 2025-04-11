<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Details</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/UniversityPages/FM_Reviewer/FM_Rev_Accept_Or_Decline_Requests.css') }}">
    <link rel="stylesheet" href="{{ asset('hakkem/css/Header-Footer.css') }}" />

    <script src="{{ asset('hakkem/javascript/University/FM_Researcher_Reviewer/FM_Rev_Accept_Or_Decline_Requests.js') }}" defer></script>

</head>
<body>

    @include('include.header')

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
            <span class="result">Fees: <strong>10000 SAR</strong></span>
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
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <!-- ✅ 5 أبحاث كاملة -->
                <tr>
                    <td>1</td>
                    <td>AI and Healthcare</td>
                    <td>Information Systems</td>
                    <td class="actions">
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

                <tr>
                    <td>2</td>
                    <td>IoT in Smart Cities</td>
                    <td>Information Systems</td>
                    <td class="actions">
                      <button class="see-more">See more <span class="arrow">▼</span></button>
                    </td>
                </tr>
                <tr class="research-details">
                    <td colspan="4">
                        <div class="details-box">
                            <div class="sub-box"><strong>Research Field:</strong> IoT Applications</div>
                            <div class="sub-box"><strong>Keywords:</strong> Sensors, Big Data, Connectivity</div>
                            <div class="sub-box">
                                <strong>Abstract:</strong>
                                <p>Exploring IoT in smart city management, its impact, and security challenges...</p>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Cybersecurity Threats</td>
                    <td>Cyber Security</td>
                    <td class="actions">
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
                    <td class="actions">
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
        <div class="buttons-container">
            <button class="reject-btn">Reject Request</button>
            <button class="accept-btn">Accept Request</button>
        </div>
        
    </main>

    @include('include.footer')

</body>
</html>
