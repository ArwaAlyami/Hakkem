<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Independent Review Request (AI)</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/MainPages/Requests_Updated/Rev-Review-Request.css')}}" />
</head>

<body>
    <div class="review-option container-r">
        <div class="container">
            <!-- Stages Same For All Steps-->
            <div class="progress-bar">
                <div class="step preactive">Step 1</div>
                <div class="step">Step 2</div>
                <div class="step">Step 3</div>
                <div class="step">Step 4</div>
            </div>

            <!---------------------------- 
                      Step 1 
          ----------------------------->
            <div class="form-step active">
                <h2>Please Fill in the following research details:</h2>
                <label>Research Title:</label>
                <input type="text" id="researchTitle" class="inp" />

                <label>Research Field:</label>
                <input type="text" id="researchTitle" class="inp" />



                <label>Research Abstract:</label>
                <textarea id="researchAbstract"></textarea>

                <label>Research File:</label>

                <!-- Browse Files Button -->
                <div class="input_container">
                    <label for="files" class="btn">Browse Files</label>
                    <input id="files" class="browse" style="display: none" type="file" onchange="displayFileName()" />
                    <span id="file-name">No file selected</span>
                </div>

                <!-- Buttons of step 1 -->
                <div class="buttons">

                    <a href="{{ route('Requests.ReviewRequest.IndReviewerOptions')}}">
                    <button class="cancel">Cancel</button>
                    </a>

                    <button class="next">Create Review List</button>
                </div>
            </div>

            <!---------------------------- 
                      Step 2 
          ----------------------------->
            <div class="form-step">
                <div class="content-list">
                    <!-- 
              حطيت آيفريمز عشان يعرض محتوى البروفايل كارد مبدئيا، مو
              أفضل حل لكن بعد ما نشوف كيف بتكون الباك اند للكارد بنعدل عليها
              -->
                    <iframe src="{{ url('/usercontainer') }}" frameborder="0" style="margin:5px;"></iframe>
                    <iframe src="{{ url('/usercontainer') }}" frameborder="0" style="margin:5px;"></iframe>

                </div>

                <!-- Buttons of Step 2 -->
                <div class="buttons">
                    <button class="back">Back</button>
                    <button class="next">Next</button>
                </div>
            </div>

            <!---------------------------- 
                      Step 3 
          ----------------------------->
            <div class="form-step">
                <div class="content">
                    <!-- إطار الترانزكشن  -->
                    <div class="trans-details">
                        <h2>Transaction Details</h2>
                        <div class="setPrice-row">
                            <p><strong>Set price offer:</strong></p>
                            <div class="price-inp">
                                <span class="currency"><span id="riyal" class="icon icon-home"></span></span>
                                <input type="number" id="price-input" max="50000" onchange="return check()" required />
                            </div>
                        </div>
                        <div id="err" class="err-msg"></div>
                    </div>

                    <!-- الخط الفاصل -->
                    <hr />

                    <!-- إطار الفوندز -->
                    <div class="funds-details">
                        <h3>Transferring Funds</h3>
                        <div class="funds-content">
                            <div class="sent-fund">
                                <p>You Send</p>
                                <div class="amount-border">
                                    <p><span id="riyal" class="icon icon-home"></span></p>
                                    <p id="output-price"></p>
                                </div>
                            </div>

                            <div class="recipient">
                                <p>Recipient:</p>
                                <div class="recipient-border">
                                    <p>Arwa Abdullah M AlYami</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Buttons of Step 3 -->
                <div class="buttons">
                    <button class="back">Back</button>
                    <button class="next">Next</button>
                </div>
            </div>

            <!---------------------------- 
                      Step 4 
          ----------------------------->
            <div class="form-step">
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
                                <p>Indepenent Review Request</p>
                                <p>Arwa Abdullah M AlYami</p>
                                <!-- حالة الطلب -->
                                <div class="state">
                                    <img src="{{ asset('hakkem/images/Requests/timefill.svg') }}" />
                                    <span>To Be Accepted</span>
                                </div>
                                <p>20-01-2025 at 8:51 AM</p>
                            </div>
                        </div>

                        <!-- جزئية الدفع -->
                        <h3>Transaction Details:</h3>
                        <div class="row">
                            <!-- ثابته -->
                            <div class="col1">
                                <p><strong>Transaction ID:</strong></p>
                                <p><strong>Status:</strong></p>
                                <p><strong>Amount:</strong></p>
                            </div>

                            <!-- متغيرة -->
                            <div class="col2">
                                <p># 669948474</p>
                                <div class="state">
                                    <img src="{{ asset('hakkem/images/Requests/timefill.svg') }}" />
                                    <span>Not Yet Transferred</span>
                                </div>
                                <p>
                                    <span id="riyal" class="icon icon-home"></span>1,000.00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Buttons of Step 4 -->
                <div class="buttons">
                    <button class="back">Back</button>

                    <a href="{{ route('Auth.Home')}}">
                        <button class="confirm">Confirm</button>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('hakkem/javascript/Review-Request.js') }}"></script>
</body>

</html>