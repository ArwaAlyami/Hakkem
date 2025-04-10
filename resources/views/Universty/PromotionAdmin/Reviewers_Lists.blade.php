<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reviewer's Lists</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Universty/PromotionAdmin/Reviewers-list.css') }}">
    <link rel="stylesheet" href="{{ asset('hakkem/css/Header-Footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/Sidebar.css') }}" />
</head>

<body>
    @include('include.Header')
    @include('include.Promotion-Sidebar')

    <div class="container">
        <div class="specialization-card">
            <div class="info">
                <img src="{{ asset('hakkem\images\University\AI Reviewer List.png') }}" alt="icon">
                <span><strong>Specialization:</strong> Information System</span>
            </div>
            <button>Open</button>
        </div>

        <div class="specialization-card">
            <div class="info">
                <img src="{{ asset('hakkem\images\University\AI Reviewer List.png') }}" alt="icon">
                <span><strong>Specialization:</strong> Cyber Security</span>
            </div>
            <button>Open</button>
        </div>

        <div class="specialization-card">
            <div class="info">
                <img src="{{ asset('hakkem\images\University\AI Reviewer List.png') }}" alt="icon">
                <span><strong>Specialization:</strong> Artificial Intelligence</span>
            </div>
            <button>Open</button>
        </div>

        <div class="specialization-card">
            <div class="info">
                <img src="{{ asset('hakkem\images\University\AI Reviewer List.png') }}" alt="icon">
                <span><strong>Specialization:</strong> Computer Science</span>
            </div>
            <button>Open</button>
        </div>

        <div class="specialization-card">
            <div class="info">
                <img src="{{ asset('hakkem\images\University\AI Reviewer List.png') }}" alt="icon">
                <span><strong>Specialization:</strong> Data Science</span>
            </div>
            <button>Open</button>
        </div>

        <div class="specialization-card">
            <div class="info">
                <img src="{{ asset('hakkem\images\University\AI Reviewer List.png') }}" alt="icon">
                <span><strong>Specialization:</strong> Database</span>
            </div>
            <button>Open</button>
        </div>

        <div class="specialization-card">
            <div class="info">
                <img src="{{ asset('hakkem\images\University\AI Reviewer List.png') }}" alt="icon">
                <span><strong>Specialization:</strong> Information Security</span>
            </div>
            <button>Open</button>
        </div>
    </div>

    @include('include.Footer')
</body>

</html>