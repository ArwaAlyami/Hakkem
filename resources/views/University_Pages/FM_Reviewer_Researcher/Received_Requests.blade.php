<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Received Requests - Hakkem</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/UniversityPages/FM_Reviewer/Received_Requests.css') }}">
    <link rel="stylesheet" href="{{ asset('hakkem/css/Header-Footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/Sidebar.css') }}" />


    <script src="{{ asset('hakkem/javascript/University/FM_Researcher_Reviewer/Received_Requests.js') }}"></script>
</head>
<body>
    @include('include.header')
    <div class="container">

        @include('include.rev-sidebar')

        <main class="content">
            @foreach ($requests as $req)
<div class="request-item" data-status="{{ $req->status }}">
    <img src="{{ asset('hakkem/images/University/Najran_University.png') }}" alt="University Logo">
    <div class="request-info">
        <span class="university">{{ $req->university_name }}</span>
        <span class="request-id">Request Number\ {{ $req->request_number }}</span>
    </div>

    <a href="{{ route('reviewer.requests.show', $req->id) }}">
        <button class="details">Details</button>
    </a>
</div>
@endforeach



                </div>

            </div>

            </div>
        </main>
    </div>
    @include('include.footer')
</body>
</html>
