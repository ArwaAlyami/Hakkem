<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Details</title>
    <link rel="stylesheet" href="{{ asset('hakkem\css\Universty\PromotionAdmin\Accept-Reject-Request.css') }}">
    <script src="{{ asset('hakkem\javascript\University\Promotion_Admin\Research_Details.js') }}" defer></script>
</head>

<body>
    @include('include.Header')
    <div class="contain">
        <div class="header">
            <h2>Request Details</h2>
            <p><span class="highlight">Number of researches:</span>AAA</p>
            <p><span class="highlight">Specialization:</span>AAA</p>
        </div>
    </div>
    <div class="container">
        <table>
            <tr>
                <th>Research Number</th>
                <th>Research Title</th>
                <th>Research Field</th>
                <th class="last">Full Research</th>
            </tr>


            <!-- A Single Row -->
            {{-- @foreach($researches as $index => $research) --}}
            <tbody>
                <td>{{-- $index + 1 --}}</td>
                <td>{{-- $research->title --}}</td>
                <td>{{--$research->field --}}</td>
                <td class="td-btn">
                    <button class="pdf-button">
                        <img src="{{ asset('hakkem/images/University/pdf icon.png') }}" class="pdf">
                        {{-- $research->file_name --}}
                    </button>
                    {{-- <button class="see-more-button">
                        See more
                        <div>
                            <div style="margin-left: 10px;" id="chevron-arrow-up" class="chevron-d"></div>
                        </div>
                    </button> --}}
                </td>
            </tbody>
            {{-- @endforeach --}}

         </table>

                <div class="info-box">
                    <div class="keywords"><strong>Keywords:</strong><br>AAA</div>
                    <hr>
                    <div class="abstract">
                        <strong>Abstract:</strong><br>
                        AAA
                    </div>
                </div>

                <form action="{{-- route('promotion.request.accept') --}}" method="POST">
                    @csrf
                    <button type="submit" class="accept">Accept Request</button>
                </form>

                {{-- <form action="{{ route('PromotionAccount.PromotionRequests')}}" method="POST">
                    @csrf --}}
                <a href="{{ route('PromotionAccount.PromotionRequests')}}">
                    <button type="submit" class="reject">Reject Request</button>
                </a>
                {{-- </form> --}}

        </div>
    @include('include.Footer')
</body>

</html>
