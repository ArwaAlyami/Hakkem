<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Details</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/UniversityPages/FM_Researcher/Request_Details.css') }}">
    <link rel="stylesheet" href="{{ asset('hakkem/css/Header-Footer.css') }}" />

    <script src="{{ asset('hakkem/javascript/University/FM_Researcher/Request_Details.js') }}" defer></script>
</head>
<body>
    @include('include.header')
<!-- ✅ الهيدر العلوي كـ بوكس -->

<div class="container">
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
                    <td>1</td>
                    <td>AI and Healthcare</td>
                    <td>Information Systems</td>
                    <td>200 SAR</td>
                    <td class="actions">
                        <button class="pdf-btn">
                            <img src="{{ asset('images/University/pdf-icon.png') }}" alt="PDF"> AI and Healthcare.pdf
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

                <tr>
                    <td>2</td>
                    <td>IoT in Smart Cities</td>
                    <td>Information Systems</td>
                    <td>300 SAR</td>
                    <td class="actions">
                        <button class="pdf-btn">
                            <img src="{{ asset('images/University/pdf-icon.png') }}" alt="PDF"> IoT in Smart Cities.pdf
                        </button>                          
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
                    <td>600 SAR</td>
                    <td class="actions">
                        <button class="pdf-btn">
                            <img src="{{ asset('images/University/pdf-icon.png') }}" alt="PDF"> Cyber Security.pdf
                        </button>  
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
                            <img src="{{ asset('images/University/pdf-icon.png') }}" alt="PDF">Finance.pdf
                        </button>  
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
    </main>
</div>

    @include('include.footer')

</body>
</html>
