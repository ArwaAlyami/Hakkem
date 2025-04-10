<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promotion Requests</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Universty/PromotionAdmin/PromotionRequests.css') }}">
    <link rel="stylesheet" href="{{ asset('hakkem/css/Header-Footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/Sidebar.css') }}" />
</head>

<body>
    @include('include.Header')
    @include('include.Promotion-Sidebar')

    <div class="tabs">
        <button class="active">All</button>
        <button>Active Requests</button>
        <button>Completed Requests</button>
        <button>Rejected Requests</button>
    </div>

    <!-- الطلبات الحالية -->
    <div class="request yellow">
        <div class="request-info row">
            <div class="col">
                <div class="request-id">#98761</div>
                <div class="request-name">Dr. Abdullah Al-Ghamdi</div>
                <div class="request-dept">College of Computer Science and Information Systems</div>
            </div>
            <!-- section -->
            <div class="col">
                <div class="buttons">
                    <button class="view">View Request</button>
                    <button class="track">Track</button>
                    <button class="pay">Pay</button>
                </div>
                <div class="request-date">
                    <p>Result submission date: 12-2-2025</p>
                </div>
            </div>
        </div>
    </div>

    <!-- الطلبات المنتهية -->
    <div class="request teal">
        <div class="request-info row">
            <div class="col">
                <div class="request-id">#12345</div>
                <div class="request-name">Dr. Noura Abdel Aziz</div>
                <div class="request-dept">College of Computer Science and Information Systems</div>
            </div>

            <div class="col">
                <div class="buttons">
                    <button class="view">View Request</button>
                    <button class="track">View Feedbacks</button>
                    <button class="pay" disabled>Pay</button>
                </div>
                <div class="request-date">
                    <p>Result submission date: 12-2-2025</p>
                </div>
            </div>
        </div>
    </div>

    <!-- الطلبات المرفوضة -->
    <div class="request red">
        <div class="request-info row">
            <div class="col">
                <div class="request-id">#86543</div>
                <div class="request-name">Dr. Feryal Al-Harith</div>
                <div class="request-dept">College of Computer Science and Information Systems</div>
            </div>

            <div class="col">
                <div class="buttons">
                    <button class="view">View Request</button>
                    <button class="track">View Feedbacks</button>
                    <button class="pay" disabled>Pay</button>
                </div>
                <div class="request-date">
                    <p>Result submission date: 12-2-2025</p>
                </div>
            </div>
        </div>
    </div>

    @include('include.Footer')
</body>

</html>