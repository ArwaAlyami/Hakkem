<!DOCTYPE html>
<html>
  <head>
    <title>Review By AI or Expert Feedback</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/MainPages/Requests/ReviewRequestOptions.css')}}"/>
  </head>

  <body>
    <div class="overlay">
      <div class="review-option container-r">
        <div class="review-options__column">
          <!-- col -->
          <div>
            <!-- content -->
            <h1>
              You can review your research using AI through HAKKEMGPT or choose
              an independent reviewer for expert feedback!
            </h1>
            <div>
              <div>
                <!-- col -->
                <div class="review-options__divider"></div>

                <div>
                  <!-- row -->
                  <div>
                    <!-- ai cont -->
                    <div>
                      <!-- col -->
                      <img src="{{ asset('hakkem/images/Requests/AI-Robot.svg')}}" />
                      <div>
                        <!-- text cont -->
                        <h2>Through</h2>
                        <a href="{{route('Requests.ReviewRequest.AI_Review')}}">HAKKEMGPT </a>
                      </div>
                    </div>
                  </div>

                  <div class="review-options__independent-divider"></div>

                  <div>
                    <!-- ind cont -->
                    <div>
                      <!-- col -->
                      <img src="{{ asset('hakkem/images/Requests/Reviewer User.svg')}}" />
                      <div>
                        <!-- text cont -->
                        <h2>By An</h2>
                        <a href="{{route('Requests.ReviewRequest.Ind_Reviewer_Options')}}">
                          Independent Reviewer
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
