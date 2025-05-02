<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>AI and Healthcare</title>

  <!-- ✅ مكتبات التحويل الخارجية -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

  <!-- ✅ CSS -->
  <link rel="stylesheet" href="{{ asset('hakkem/css/UniversityPages/FM_Reviewer/AI_And_Healthcare.css') }}">
  <link rel="stylesheet" href="{{ asset('hakkem/css/Header-Footer.css') }}" />

  </head>
<body>

  @include('include.header')


  <div id="pdf-content">
    <h1>Review Form</h1>
    <div class="main">
      <!-- العمود 1 -->
      <div class="column">
        <h3>Format</h3>
        <label><input type="checkbox" class="score">Title is too long</label>
        <label><input type="checkbox" class="score">Format is wrong</label>
        <label><input type="checkbox" class="score">Paper is overlength</label>
        <label><input type="checkbox" class="score">Should have been anonymous</label>

        <h3>English</h3>
        <label><input type="checkbox" class="score">Well-written</label>
        <label><input type="checkbox" class="score">Writing style is not good</label>
        <label><input type="checkbox" class="score">There are typos</label>
        <label><input type="checkbox" class="score">No space before ( [</label>
        <label><input type="checkbox" class="score">Used 'our'</label>
        <label><input type="checkbox" class="score">Too many 'we'</label>
        <label><input type="checkbox" class="score">Some sentences too long</label>

        <h3>Figures</h3>
        <label><input type="checkbox" class="score">Appropriate</label>
        <label><input type="checkbox" class="score">Text is too small</label>
        <label><input type="checkbox" class="score">Figure(s) are blur</label>

        <h3>References</h3>
        <label><input type="checkbox" class="score">Appropriate</label>
        <label><input type="checkbox" class="score">References are too old</label>
        <label><input type="checkbox" class="score">Some irrelevant references</label>
        <label><input type="checkbox" class="score">Miss important references</label>
        <label><input type="checkbox" class="score">Inconsistent format</label>
        <label><input type="checkbox" class="score">Some references are not cited</label>

        <h3>Introduction</h3>
        <label><input type="checkbox" class="score">Problem is important</label>
        <label><input type="checkbox" class="score">Problem is well-motivated</label>
        <label><input type="checkbox" class="score">Must add references</label>
        <label><input type="checkbox" class="score">Must add more motivation</label>
        <label><input type="checkbox" class="score">Must highlight limitations of prior work</label>
        <label><input type="checkbox" class="score">Must highlight contributions</label>
        <label><input type="checkbox" class="score">Too long</label>
      </div>


      <!-- العمود 2 -->
      <div class="column">
        <h3>Problem definition</h3>
        <label><input type="checkbox" class="score">Well-defined</label>
        <label><input type="checkbox" class="score">Missing</label>
        <label><input type="checkbox" class="score">Not formal</label>
        <label><input type="checkbox" class="score">Must add example</label>

        <h3>Notations</h3>
        <label><input type="checkbox" class="score">Inconsistent notations</label>
        <label><input type="checkbox" class="score">Must add notations table</label>

        <h3>Reproducibility</h3>
        <label><input type="checkbox" class="score">Reproducible</label>
        <label><input type="checkbox" class="score">Must provide code</label>
        <label><input type="checkbox" class="score">Must provide data</label>

        <h3>Conclusion</h3>
        <label><input type="checkbox" class="score">Must add future work</label>
      </div>

      <!-- العمود 3 -->
      <div class="column">
        <h3>Method</h3>
        <label><input type="checkbox" class="score">Well-explained</label>
        <label><input type="checkbox" class="score">Innovative</label>
        <label><input type="checkbox" class="score">Too simple</label>
        <label><input type="checkbox" class="score">Not enough novelty</label>
        <label><input type="checkbox" class="score">Must give overview of solution</label>
        <label><input type="checkbox" class="score">Must justify design decisions</label>
        <label><input type="checkbox" class="score">Must indicate what is new</label>
        <label><input type="checkbox" class="score">Must add examples</label>
        <label><input type="checkbox" class="score">Must add formal description</label>
        <label><input type="checkbox" class="score">Must add proofs</label>
        <label><input type="checkbox" class="score">Must add algorithm pseudocode</label>
        <label><input type="checkbox" class="score">Must analyze complexity</label>
      

        <h3>Experiments</h3>
        <label><input type="checkbox" class="score">Convincing</label>
        <label><input type="checkbox" class="score">Must compare with newer studies</label>
        <label><input type="checkbox" class="score">Must add statistical analysis</label>
        <label><input type="checkbox" class="score">Must discuss results more</label>
        <label><input type="checkbox" class="score">Must add more datasets</label>
        <label><input type="checkbox" class="score">Must show application of method</label>
        <label><input type="checkbox" class="score">Must evaluate scalability</label>
        <label><input type="checkbox" class="score">Must evaluate runtime</label>
        <label><input type="checkbox" class="score">Must evaluate memory</label>
        <label><input type="checkbox" class="score">Must do sensitivity analysis</label>


        <h3>Related work</h3>
        <label><input type="checkbox" class="score">Good review of related work</label>
        <label><input type="checkbox" class="score">Not well organized</label>
        <label><input type="checkbox" class="score">Must highlight differences with this paper</label>
        <label><input type="checkbox" class="score">Must add comparative table</label>
        <label><input type="checkbox" class="score">Too short</label>

        <h3>General</h3>
        <label><input type="checkbox" class="score">Out of scope for this journal</label>
        <label><input type="checkbox" class="score">Out of scope for this conference</label>
        <label><input type="checkbox" class="score">Novelty is unclear</label>
      </div>
    </div>

    <!-- ✅ الملاحظات والنتيجة -->
    <div class="bottom">
      <h3>Reviewer Notes</h3>
      <textarea id="notes" class="notes-box no-print" placeholder="Type here .."></textarea>
      <div id="notesPreview" class="notes-box" style="display: none; white-space: pre-wrap;"></div>

      <div class="score-section">
        <label>Overall Research Score: 
          <input type="text" id="scoreBox" class="force-english score-input" pattern="\d*">
          <span class="black-text">/ 60</span>
        </label>
      </div>

      
      <button class="no-print" id="saveBtn">Save</button>

      <button class="no-print">
        <a href="{{ route('RevResAccount.RequestDetailsIfAccept')}}">
          Close
        </a>
      </button>

    
     

    </div>

  </div>


  @include('include.footer')

  
  <!-- ✅ JS -->
  <script src="{{ asset('hakkem/javascript/University/FM_Researcher_Reviewer/AI_And_Healthcare.js') }}"></script>
</body>
</html>