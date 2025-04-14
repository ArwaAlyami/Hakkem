<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Researchers</title>
    <script>
        window.eyeOpen = "{{ asset('hakkem/images/University/eye-open.png') }}";
        window.eyeClosed = "{{ asset('hakkem/images/University/eye-closed.png') }}";
    </script>
<!-- ✅ CSS -->
<link rel="stylesheet" href="{{ asset('hakkem/css/UniversityPages/FM_Reviewer/My_Researches.css') }}">
<link rel="stylesheet" href="{{ asset('hakkem/css/Header-Footer.css') }}" />
<link rel="stylesheet" href="{{ asset('hakkem/css/Sidebar.css') }}" />



<!-- ✅ JavaScript -->
<script src="{{ asset('hakkem/javascript/University/FM_Researcher/My_Researches.js') }}"></script>
</head>
<body>

    @include('include.header')

    <div class="container">

        @include('include.rev-sidebar')

        <!-- المحتوى الرئيسي -->
        <main class="content">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Research Title</th>
                        <th>DOI</th>
                        <th>Research Field</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- البحث الأول -->
                    @foreach ($researches as $key=>$research)
    <tr>
        <td>{{ ++$key }}</td>
        <td>{{ $research->title }}</td>
        <td>{{ $research->DOI }}</td>
        <td>{{ $research->field }}</td>
        ...
    </tr>

    <tr class="research-details">
        <td colspan="4">
            <div class="details-box">
                <div class="sub-box"><strong>Keywords: </strong>{{ $research->keywords }}</div>
                <div class="sub-box"><strong>Abstract: </strong>{{ $research->abstract }}</div>
            </div>
        </td>
    </tr>
@endforeach


       <a href="{{route('researcher-account.my-researches.show',['id'=>$research->id]) }}" class="pdf-link">
               <button class="download">
                <img src="{{ asset('hakkem/images/University/pdf icon.png') }}" alt="PDF">
                                    </button>
                                </a>

                                <button class="pdf-toggle" onclick="togglePDF(this)" data-visible="true">
                                    <img src="{{ asset('hakkem/images/University/eye-open.png') }}" alt="Toggle PDF">
                                </button>

                                <form action="{{ route('researcher-account.my-researches.delete', $research->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <button type="submit" class="see-more">Delete</button>
                                </form>


                            </div>
                        </td>
                    </tr>


                    <tr class="research-details">
                        <td colspan="4">
                            <div class="details-box">

                                <div class="sub-box"><strong>Keywords: </strong>{{$research->keywords}}</div>
                                <div class="sub-box">
                                    <strong>Abstract: </strong><br>
                                    {{$research->abstract}}
                                </div>
                            </div>
                        </td>
                    </tr>


                </tbody>
            </table>
            {{-- {{ $researches->appends(request()->query())->links() }} --}}


            <!-- زر إضافة بحث جديد -->
            <a href="{{ route('RevResAccount.AddResearch') }}">
                <button class="add-research">Add New Research</button>
            </a>


            </main>
            <script>
                function togglePDF(button) {
                    let pdfLink = button.closest("td").querySelector(".pdf-link");
                    let img = button.querySelector("img");

                    if (button.getAttribute("data-visible") === "true") {
                        pdfLink.style.display = "none";
                        img.src = eyeClosed;
                        button.setAttribute("data-visible", "false");
                    } else {
                        pdfLink.style.display = "inline-block";
                        img.src = eyeOpen;
                        button.setAttribute("data-visible", "true");
                    }
                }
            </script>
    </div>
            @include('include.footer')
            @if($research->pdf_path)
    <a href="{{ asset('storage/researches/' . $research->pdf_path) }}" class="pdf-link" target="_blank">
        <button class="download">
            <img src="{{ asset('hakkem/images/University/pdf icon.png') }}" alt="PDF">
        </button>
    </a>
@endif


</body>
</html>
