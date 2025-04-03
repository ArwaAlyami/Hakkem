<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Researchers - Hakkem</title>
    <script>
        window.eyeOpen = "{{ asset('images/University/eye-open.png') }}";
        window.eyeClosed = "{{ asset('images/University/eye-closed.png') }}";
    </script>
<!-- ✅ CSS -->
<link rel="stylesheet" href="{{ asset('hakkem/css/UniversityPages/FM_Researcher/My_Researches.css') }}">
<!-- ✅ JavaScript -->
<script src="{{ asset('hakkem/javascript/University/FM_Researcher/My_Researches.js') }}"></script>
</head>
<body>

    <div class="container">
        <!-- المحتوى الرئيسي -->
        <main class="content">
            <table>
                <thead>
                    <tr>
                        <th>Research ID</th>
                        <th>Research Title</th>
                        <th>DOI</th>
                        <th>Full Research</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- البحث الأول -->
                    <tr>
                        <td>AAA</td>
                        <td>AAA</td>
                        <td>
                            <strong>AAA</strong><br>
                        </td>

                        <td>
                            <div class="action-buttons">
                                <button class="see-more" onclick="toggleDetails(this)">
                                    See More <span class="arrow">&#9660;</span>
                                </button>

                                <a href="AI-Healthcare.pdf" class="pdf-link" target="_blank">
                                    <button class="download">
                                        <img src="{{ asset('HAKKEM/images/University/pdf icon.png') }}" alt="PDF">
                                    </button>
                                </a>

                                <button class="pdf-toggle" onclick="togglePDF(this)" data-visible="true">
                                    <img src="{{ asset('hakkem/images/University/eye-open.png') }}" alt="Toggle PDF">
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr class="research-details">
                        <td colspan="4">
                            <div class="details-box">
                                <div class="sub-box"><strong>Research Field:</strong>AAA</div>
                                <div class="sub-box"><strong>Keywords:</strong>AAA</div>
                                <div class="sub-box">
                                    <strong>Abstract:</strong><br>
                                    AAA
                                </div>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
 

            <!-- زر إضافة بحث جديد -->
           <a href="{{ route('My_Researches.Add')}}">
            <button class="add-research">
                <img src="{{ asset('hakkem/images/University/Add icon.png') }}" alt="Add"> Add New Research</button>
            <a>

            </main>
            <script>
                function togglePDF(button) {
                    let pdfLink = button.closest("td").querySelector(".pdf-link");
                    let img = button.querySelector("img");

                    if (button.getAttribute("data-visible") === "true") {
                        pdfLink.style.display = "none";
                        img.src = eyeClosed;
                        button.setAttribute("data-visible", "false");
                    } else {
                        pdfLink.style.display = "inline-block";
                        img.src = eyeOpen;
                        button.setAttribute("data-visible", "true");
                    }
                }
            </script>

</body>
</html>