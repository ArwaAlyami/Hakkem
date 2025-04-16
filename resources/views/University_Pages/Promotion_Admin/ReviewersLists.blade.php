<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reviewers' List</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Universty/PromotionAdmin/Reviewers-list.css') }}">
    <link rel="stylesheet" href="{{ asset('hakkem/css/Header-Footer.css') }}">
    <link rel="stylesheet" href="{{ asset('hakkem/css/Sidebar.css') }}">
</head>

<body>
    @include('include.Header')

    <div class="container2">
        @include('include.Promotion-Sidebar')

        <div class="container">
            {{-- @foreach($specializations as $item) --}}
                <div class="specialization-card">
                    <div class="info">
                        <img src="{{ asset('hakkem/images/University/AI Reviewer List.png') }}" alt="icon">
                        <span><strong>Specialization:</strong> {{-- $item->specialization --}}</span>
                    </div>
                    <a href="{{-- route('reviewers.bySpecialization', ['specialization' => $item->specialization]) --}}">
                        <button>Open</button>
                    </a>
                </div>
            {{-- @endforeach --}}
        </div>
    </div>

    @include('include.Footer')
</body>

</html>
