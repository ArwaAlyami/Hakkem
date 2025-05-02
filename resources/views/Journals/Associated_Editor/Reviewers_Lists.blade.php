<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reviewers Lists</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Journals/Associated-Ed/Reviewers-list.css') }}">
    <link rel="stylesheet" href="{{ asset('hakkem/css/Header-Footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/Sidebar.css') }}" />
</head>

<body>

    <div class="container">
        @foreach($specializations as $specialization)
            <div class="specialization-card">
                <div class="info">
                    <img src="{{ asset('hakkem/images/University/AI Reviewer List.png') }}" alt="icon">
                    <span><strong>Specialization:</strong> {{ $specialization->specialization }}</span>
                </div>
                <a href="{{ route('journal.reviewers.by.specialization', ['specialization' => $specialization->specialization]) }}">
                    <button>Open</button>
                </a>
            </div>
        @endforeach
    </div>//دينامك

    @include('include.Header')

    <div class="main-container">
        @include('include.Associated-Ed-Sidebar')

        <div class="container">
            <div class="specialization-card">
                <div class="info">
                    <img src="{{ asset('hakkem\images\University\AI Reviewer List.png') }}" alt="icon">
                    <span><strong>Specialization:</strong> Information System</span>
                </div>
                <button>Open</button>
            </div>
        </div>
    </div>
    @include('include.Footer')
</body>

</html>
