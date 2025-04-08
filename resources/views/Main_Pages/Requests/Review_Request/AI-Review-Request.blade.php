<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AI Review Request</title>
    <link rel="stylesheet" href="{{asset('hakkem/css/MainPages/Requests/AI-Review-Request.css')}}"/>
  </head>
  <body>
    <div class="overlay">
      <div class="review-option container-r">
        <div class="container">
          <div class="progress-bar">
            <div class="step preactive">Step 1</div>
            <div class="step">Step 2</div>
          </div>

          <!-- First Step -->
          <div class="form-step active">
            <h2>Please Fill in the following research details:</h2>
            <label>Research Title:</label>
            <input type="text" id="researchTitle" />

            <label>Research Field:</label>
            <div class="dropdownlist">
              <select id="researchField">
                <option value="">Select Field</option>
                <option value="Artificial Intellegence">
                  Artificial Intellegence
                </option>
                <option value="Bioinformatics">Bioinformatics</option>
                <option value="Cyber Security">Cyber Security</option>
                <option value="Digital Forensic">Digital Forensic</option>
                <option value="Embedded Systems">Embedded Systems</option>
              </select>
              <div style="margin-right: 10px; margin-top: 5px">
                <div
                  style="margin-left: 20px"
                  id="chevron-arrow-up"
                  class="chevron"
                ></div>
              </div>
            </div>

            <label>Research Abstract:</label>
            <textarea id="researchAbstract"></textarea>

            <label>Research File:</label>
            <div class="input_container">
              <label for="files" class="btn">Browse Files</label>
              <input
                id="files"
                class="browse"
                style="display: none"
                type="file"
                onchange="displayFileName()"
              />
              <span id="file-name">No file selected</span>
            </div>

            <div class="buttons">
              <a href="{{route('Main_Pages.Home')}}"><button class="cancel">Cancel</button></a>
              <button class="next">Make a Preliminary Assessment</button>
            </div>
          </div>

          <!-- Second Step -->
          <div class="form-step">
            <div class="feedback-container">
              <div class="feedback-view">
                <p class="feedback-text size-text">
                  Strengths:<br />
                  (+) The problem is well-motivated.<br />
                  (+) The literature review is good.<br />
                  (+) The method is innovative.<br />
                  (+) The figures are appropriate.<br />
                  (+)<br />
                  (+)<br /><br />Weaknesses:<br />
                  (-) There are English issues.<br />
                  (-) References are inadequate.<br />
                  (-) Experimental evaluation must be improved.<br />
                  (-)<br />
                  (-)<br /><br />==== FORMAT ==== <br /><br />The title of the
                  paper is too long. In general, it is not recommended to exceed
                  10 words. <br /><br />==== ENGLISH ==== <br /><br />There
                  should always be a single space before characters such as (
                  and [. <br /><br />The pronoun &#39;we&#39; is used too many
                  times in the paper. Generally, &#39;we&#39; is appropriate to
                  discuss future work in the conclusion but besides that it
                  should be used sparingly
                </p>
              </div>
            </div>

            <div class="closebtn">
              <a href="{{route('Main_Pages.Home')}}"><button class="confirm">Close</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="{{ asset('hakkem/javascript/Review-Request.js')}}"></script>
  </body>
</html>
