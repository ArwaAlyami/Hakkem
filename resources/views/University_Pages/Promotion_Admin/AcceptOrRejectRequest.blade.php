<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Details</title>
    <link rel="stylesheet" href="{{ asset('hakkem\css\Universty\PromotionAdmin\Accept-Reject-Request.css') }}">
    <script src="{{ asset('hakkem\javascript\University\Promotion_Admin\Research_Details.js') }}" defer></script>
</head>

<body>
    @include('include.Header')
    <div class="contain">
        <div class="header">
            <h2>Request Details</h2>
            <p><span class="highlight">Number of researches:</span> 4 Researches</p>
            <p><span class="highlight">Specialization:</span> Computer Information Systems</p>
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

            <!-- A Single Row -->
            <tbody id="table-body">
                <td>1</td>
                <td>AI and Healthcare</td>
                <td>Information Systems</td>
                <td class="td-btn">
                    <button class="pdf-button">
                        <img src="{{ asset('hakkem\images\University\pdf icon.png') }}" class="pdf">
                        AI and Healthcare.pdf
                    </button>
                    <button class="see-more-button">
                        See more
                        <!-- A chevron arrow code -->
                        <div>
                            <div style="margin-left: 10px;" id="chevron-arrow-up" class="chevron-d"></div>
                        </div>
                    </button>
                </td>
            </tbody>

            <!-- A Single Row -->
            <tbody id="table-body">
                <td class="Res-ID">2</td>
                <td>AI and Healthcare</td>
                <td>Information Systems</td>
                <td class="td-btn">
                    <button class="pdf-button">
                        <img src="{{ asset('hakkem\images\University\pdf icon.png') }}" class="pdf">
                        AI and Healthcare.pdf
                    </button>
                    <button class="see-more-button">
                        See more
                        <!-- A chevron arrow code -->
                        <div>
                            <div style="margin-left: 10px;" id="chevron-arrow-up" class="chevron-d"></div>
                        </div>
                    </button>
                </td>
            </tbody>

            <!-- A Single Row -->
            @foreach($researches as $index => $research)
<tbody>
    <td>{{ $index + 1 }}</td>
    <td>{{ $research->title }}</td>
    <td>{{ $research->field }}</td>
    <td class="td-btn">
        <button class="pdf-button">
            <img src="{{ asset('hakkem/images/University/pdf icon.png') }}" class="pdf">
            {{ $research->file_name }}
        </button>
        <button class="see-more-button">
            See more
            <div>
                <div style="margin-left: 10px;" id="chevron-arrow-up" class="chevron-d"></div>
            </div>
        </button>
    </td>
</tbody>
@endforeach

        </table>

        <div class="info-box">
            <div class="keywords"><strong>Keywords:</strong><br>Text Mining, Text Analysis, Syntax, Language
                Understanding.</div>
            <hr>
            <div class="abstract">
                <strong>Abstract:</strong><br>
                Natural Language Processing (NLP) has revolutionized the healthcare industry by enabling the development
                of intelligent chatbots that improve patient interaction, streamline medical processes, and enhance
                accessibility. This study explores the integration of NLP-based chatbots in healthcare systems, focusing
                on their ability to process patient inquiries, provide accurate responses, and assist in scheduling
                appointments. The research highlights the use of state-of-the-art models such as GPT and BERT to
                understand complex medical queries and deliver human-like conversations. Additionally, the study
                evaluates the effectiveness of these chatbots in reducing administrative burdens and enhancing patient
                satisfaction. Challenges such as data privacy, language barriers, and the need for domain-specific
                training are discussed. The paper concludes by emphasizing the potential of NLP to bridge gaps in
                healthcare delivery, making medical services more efficient and inclusive.
            </div>
        </div>

        <form action="{{ route('promotion.request.accept', $request->id) }}" method="POST">
            @csrf
            <button type="submit" class="accept">Accept Request</button>
        </form>

        <form action="{{ route('promotion.request.reject', $request->id) }}" method="POST">
            @csrf
            <button type="submit" class="reject">Reject Request</button>
        </form>

    </div>
    @include('include.Footer')
</body>

</html>
