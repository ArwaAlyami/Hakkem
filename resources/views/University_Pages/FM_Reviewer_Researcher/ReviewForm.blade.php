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
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>

        <h3>English</h3>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>

        <h3>Figures</h3>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>

        <h3>References</h3>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>

        <h3>Introduction</h3>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
      </div>

      <!-- العمود 2 -->
      <div class="column">
        <h3>Problem definition</h3>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>

        <h3>Notations</h3>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>

        <h3>Reproducibility</h3>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>

        <h3>Conclusion</h3>
        <label><input type="checkbox" class="score">AAA</label>
      </div>

      <!-- العمود 3 -->
      <div class="column">
        <h3>Method</h3>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>

        <h3>Experiments</h3>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>

        <h3>Related work</h3>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>

        <h3>General</h3>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
        <label><input type="checkbox" class="score">AAA</label>
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
