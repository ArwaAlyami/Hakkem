<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Details</title>
<!-- ✅ CSS -->
<link rel="stylesheet" href="{{ asset('hakkem/css/UniversityPages/FM_Reviewer/FM_Rev_Request_Details_If_Reviewer_Accept.css') }}">
<link rel="stylesheet" href="{{ asset('hakkem/css/Header-Footer.css') }}" />

<!-- ✅ JavaScript -->
<script src="{{ asset('hakkem/javascript/University/FM_Researcher/Request_Details.js') }}" defer></script>
</head>
<body>

    @include('include.header')

<div class="container">

<!-- ✅ الهيدر العلوي كـ بوكس -->
    <header class="page-header">
    <div class="header-box">
        <h2>Request Details:</h2>
        <div class="request-info">
            <!-- صورة شعار الجامعة -->
            <img src="{{ asset('hakkem/images/University/Najran_University.png') }}" alt="University Logo" width="50" height="50">
                <span>Request ID: <strong>{{$request->id}}</strong></span>
                <span>Specialization: <strong>{{$request->research->field}}</strong></span>
                {{-- <span>Submission Date: <strong>12-2-2025</strong></span> --}}
            </div>
        </div>
    </header>

    <!-- ✅ المحتوى الرئيسي -->
    <main class="content">
        <!-- ✅ الجدول -->
        <table>
            <thead>
                <tr>
                    <th>Research Number </th>
                    <th>Research Title</th>
                    {{-- <th>Price</th> --}}
                    <th>Full Research</th>
                </tr>
            </thead>
            <tbody>               
                <tr>
                    <td>{{$request->id}}</td>
                    <td>{{$request->research->title}}</td>
                    {{-- <td>--- SAR</td> --}}
                    <td class="actions">
                        @if($request->status_rev == 'accepted')
                                      
                        <a href="{{ $request->research->media[0]->original_url }}" target="_blank">
                            <button class="pdf-btn">
                                <img src="{{ asset('hakkem/images/University/pdf icon.png') }}" alt="PDF">
                            </button>
                        </a>      
                        @endif

                        <a href="{{ route('RevResAccount.ReviewForm',$request->id)}}" target="_blank">
                        <button class="Review">Review</button>
                        </a>

                        <button class="see-more">See more <span class="arrow">▼</span></button>
                        </div>
                    </td>
                </tr>

                <tr class="research-details">
                    <td colspan="4">
                        <div class="details-box">
                            <div class="sub-box"><strong>Research Field:</strong>{{$request->research->field}}</div>
                            <div class="sub-box"><strong>Keywords:</strong>{{$request->research->keywords}}</div>
                            <div class="sub-box">
                                <strong>Abstract:</strong>
                                <p>{{$request->research->abstract}}</p>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        @if($request->status_rev != 'accepted' && $request->status_rev !='rejected')

        <div class="table-footer">
            <form action="{{ route('reviewer.requests.accept', $request->id) }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="accept-btn">Accept Request</button>
            </form>

            <form action="{{ route('reviewer.requests.reject', $request->id) }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="reject-btn">Reject Request</button>
            </form>    
        </div>       
            @endif

        <div class="table-footer">

            <form action="{{ route('reviewer.requests.feedback', $request->id) }}" method="POST" enctype="multipart/form-data" style="display:inline;">
                @csrf
                <label class="label-upload">
                    {{-- Upload Feedback --}}
                    <input type="file" name="file_feedback">
                </label>
                    <button type="submit" class="send-feedback-btn">Send Feedback</button>
               

            </form>  

        </div>
    </main>
</div>
    @include('include.footer')
    
</body>
</html>
