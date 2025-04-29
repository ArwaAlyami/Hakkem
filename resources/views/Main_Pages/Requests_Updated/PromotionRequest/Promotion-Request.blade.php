<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Promotion Request</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/MainPages/Requests_Updated/Promotion-Request.css') }}" />
</head>

<body>
    <div class="review-option container-r">
        <div class="container">
            <div class="progress-bar">
                <div class="step preactive">Step 1</div>
                {{-- <div class="step">Step 2</div> --}}
            </div>

            <!---------------------------- 
                      Step 1 
          ----------------------------->
          <form action="{{route('Requests.PromotionRequest.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('post') }}

            
            <div class="form-step active">
                <div class="content">
                    <h2>Please choose the researches:</h2>
                    <div class="research-list">
                        <!-- Research 1 -->
                        @foreach($researchs as $research)
                        <label class="Res-name">
                            <div class="col">
                                <input type="checkbox" name="research_ids[]" value="{{$research->id}}" class="Res-checkbox" />
                            </div>
                            <div class="col">
                                <div class="Res-text" id="research-name">
                                    {{$research->title}}
                                </div>
                            </div>
                        </label>
                        @endforeach
                    </div>
                </div>
                <div class="buttons">

                    <a href="{{ route('Main_Pages.Home')}}">
                    <button class="cancel">Cancel</button>
                    </a>

                
                    <button type="submit" class="next">Submit</button>

                    {{-- <a href="{{ route('Main_Pages.Home')}}"><button class="next">Back</button></a> --}}
                
                </div>
            </div>
          </form>
            <!---------------------------- 
                      Step 2 
          ----------------------------->
            {{-- <div class="form-step">
                <div class="content">
                    <h2>Request Details:</h2>
                    <!-- جزئية البيانات الشخصية -->
                    <div class="Req-Details">
                        <h3>Personal Details:</h3>
                        <div class="row">
                            <!-- هذا للخانات الثابته -->
                            <div class="col1">
                                <p><strong>Name:</strong></p>
                                <p><strong>Email:</strong></p>
                                <p><strong>Phone:</strong></p>
                            </div>
                            <!-- هذا لمحتواها المتغير -->
                            <div class="col2">
                                <p>Jomanh Saeed M Alqahtani</p>
                                <p>jsalqhatani@nu.edu.sa</p>
                                <p>050 636 4092</p>
                            </div>
                        </div>

                        <!-- جزئية بيانات الطلب -->
                        <h3>Request Details:</h3>
                        <div class="row">
                            <!-- الخانات الثابته -->
                            <div class="col1">
                                <p><strong>Request ID:</strong></p>
                                <p><strong>Request Type:</strong></p>
                                <p><strong>Recipient:</strong></p>
                                <p><strong>Status:</strong></p>
                                <p><strong>Date:</strong></p>
                            </div>

                            <!-- المحتوى المتغير -->
                            <div class="col2">
                                <p>#669948473</p>
                                <p>Promotion Request</p>
                                <p>Arwa Abdullah M AlYami</p>
                                <!-- حالة الطلب -->
                                <div class="state">
                                    <img src="{{ asset('hakkem/images/Requests/timefill.svg')}}" />
                                    <span>To Be Accepted</span>
                                </div>
                                <p>20-01-2025 at 8:51 AM</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Buttons of Step 2 -->
                <div class="buttons">
                    <button class="back">Back</button>

                    <a href="{{ route('Main_Pages.Home')}}">
                    <button class="confirm">Confirm</button>
                    </a>
                    
                </div>
            </div> --}}
        </div>
    </div>

    <script src="{{ asset(path: 'hakkem/javascript/Review-Request.js')}}">
    </script>
</body>

</html>