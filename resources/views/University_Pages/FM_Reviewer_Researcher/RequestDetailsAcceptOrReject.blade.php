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
        <img src="{{ asset('hakkem/images/University/Najran_University.png') }}" alt="University Logo" width="50" height="50">
        <span>Number of researches: <strong>{{ $request->researches->count() }} Researches</strong></span>
        <span>Specialization: <strong>{{ $request->specialization }}</strong></span>
        <span>Submission Date: <strong>{{ $request->submission_date }}</strong></span>
<span class="result">Fees: <strong>{{ $request->fees }} SAR</strong></span>

        </div>
    </header>

    <!-- ✅ المحتوى الرئيسي -->
    <main class="content">
        @foreach ($request->researches as $index => $research)
<tr>
    <td>{{ $index + 1 }}</td>
    <td>{{ $research->title }}</td>
    <td>{{ $research->field }}</td>
    <td>{{ $research->price }} SAR</td>
    <td class="actions">
        <button class="pdf-btn">
            <img src="{{ asset('images/University/pdf-icon.png') }}" alt="PDF"> {{ $research->file_name }}
        </button>
        <button class="see-more">See more <span class="arrow">▼</span></button>
    </td>
</tr>
<tr class="research-details">
    <td colspan="4">
        <div class="details-box">
            <div class="sub-box"><strong>Research Field:</strong> {{ $research->field }}</div>
            <div class="sub-box"><strong>Keywords:</strong> {{ $research->keywords }}</div>
            <div class="sub-box">
                <strong>Abstract:</strong>
                <p>{{ $research->abstract }}</p>
            </div>
        </div>
    </td>
</tr>
@endforeach


    </main>
    <form method="POST" action="{{ route('reviewer.requests.reject', $request->id) }}">
        @csrf
        <button class="reject-btn" type="submit">Reject Request</button>
    </form>

    <form method="POST" action="{{ route('reviewer.requests.accept', $request->id) }}">
        @csrf
        <button class="accept-btn" type="submit">Accept Request</button>
    </form>

</div>

    @include('include.footer')

</body>
</html>
