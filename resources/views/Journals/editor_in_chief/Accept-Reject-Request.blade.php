<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Details</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Journals/Accept-Reject-Request.css') }}">
</head>

<body>
    @include('include.Header')

    <div class="contain">
        <div class="header">
            <h2>Request Details</h2>
            <p><span class="highlight">Specialization:</span> {{ $request->specialization }}</p>
        </div>
    </div>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Research Number</th>
                    <th>Research Title</th>
                    <th>Research Field</th>
                    <th class="last">Full Research</th>
                </tr>
            </thead>
            <tbody id="table-body">
                <tr>
                    <td class="Res-ID">{{ $request->id }}</td>
                    <td>{{ $request->title }}</td>
                    <td>{{ $request->field }}</td>
                    <td class="td-btn">
                        <a href="{{ asset('storage/' . $request->file_path) }}" target="_blank" class="pdf-button">
                            <img src="{{ asset('hakkem/images/University/pdf icon.png') }}" class="pdf">
                            {{ basename($request->file_path) }}
                        </a>
                        <button class="see-more-button">
                            See more
                            <div style="margin-left: 10px;" id="chevron-arrow-up" class="chevron-d"></div>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="info-box">
            <div class="keywords">
                <strong>Keywords:</strong><br>
                {{ $request->keywords }}
            </div>
            <hr>
            <div class="abstract">
                <strong>Abstract:</strong><br>
                {{ $request->abstract }}
            </div>
        </div>

        <div class="footer-buttons">
            <form action="{{ route('request.reject', $request->id) }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="reject">Reject Request</button>
            </form>

            <form action="{{ route('request.accept', $request->id) }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="accept">Accept Request</button>
            </form>
        </div>
    </div>

    @include('include.Footer')
</body>

</html>
