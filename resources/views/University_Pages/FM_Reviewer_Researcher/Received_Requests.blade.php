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
            <div class="filter-container">
                <div class="filter">
                    <button class="filter-btn active" data-filter="all">All</button>
                    <button class="filter-btn" data-filter="under-review">Under Review</button>
                    <button class="filter-btn" data-filter="completed">Completed</button>
                    <button class="filter-btn" data-filter="rejected">Rejected</button>
                </div>
            </div>
            
            <div class="request-list">

                <div class="request-item">
                    <img src="{{ asset('hakkem/images/University/Najran_University.png') }}" alt="University Logo">
                    <div class="request-info">
                        <span class="university">AAA</span>
                        <span class="request-id">Request Number\ AAA</span>
                    </div>

                    <a href="{{ route('RevResAccount.RequestDetailsIfAccept')}}">
                    <button class="details">Details</button>
                    </a>


                </div>           
              
            </div>
            
            </div>
        </main>
    </div>
    @include('include.footer')
</body>
</html>
