<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publish Requests</title>
    <link rel="stylesheet" href="{{ asset('hakkem\css\Journals\PublishRequests.css') }}">
    <link rel="stylesheet" href="{{ asset('hakkem/css/Header-Footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/Sidebar.css') }}" />
    <script src="public\hakkem\javascript\Filter.js" defer></script>
</head>

<body>
    @include('include.Header')

    <div class="main-container">
        @include('include.Chief-Ed-Sidebar')

        <div class="page-content">
            <div class="tabs">
                <button class="active">All</button>
                <button>Published Requests</button>
                <button>Under Review Requests</button>
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
                    <div class="col2">
                        <div class="buttons">
                            <a class="view" href="#">View Request</a>
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

                    <div class="col2">
                        <div class="buttons">
                            <a class="view" href="#">View Request</a>
                            <a class="track" href="#">View Feedbacks</a>
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

                    <div class="col2">
                        <div class="buttons">
                            <a class="view" href="#">View Request</a>
                        </div>
                        <div class="request-date">
                            <p>Result submission date: 12-2-2025</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('include.Footer')
</body>

</html>