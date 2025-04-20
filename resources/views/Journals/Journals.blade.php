<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Journals</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Journals/Journals.css') }}">
</head>

<body>

    <div class="journals-container">
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Search for a Journal...">
        </div>

        <h2 class="section-title">View the Journals that joined Hakkem platform and the standards of each Journal.</h2>

        <div class="journals-grid">
            <div class="journal-card">
                <img src="{{ asset('hakkem/images/Journals/Journal-Logo 1.svg') }}" alt="Journal Logo">
                <p class="journal-name">International Interdisciplinary Scientific Journal</p>
            </div>
            <div class="journal-card">
                <img src="{{ asset('hakkem/images/Journals/Journal-Logo 2.svg') }}" alt="MDPI Logo">
                <p class="journal-name">MDPI Journal</p>
            </div>
            <div class="journal-card">
                <img src="{{ asset('hakkem/images/Journals/Journal-Logo 3.svg') }}" alt="DOAJ Logo">
                <p class="journal-name">Directory of Open Access Journals</p>
            </div>
            <div class="journal-card">
                <img src="{{ asset('hakkem/images/Journals/Journal-Logo 4.svg') }}" alt="Elsevier Logo">
                <p class="journal-name">Elsevier Journals</p>
            </div>
        </div>
        <p id="noResultsMessage" class="no-results" style="display: none;">
            No journals found.
        </p>
    </div>
    <script src="{{ asset('hakkem/javascript/Journals.js') }}"></script>
</body>

</html>