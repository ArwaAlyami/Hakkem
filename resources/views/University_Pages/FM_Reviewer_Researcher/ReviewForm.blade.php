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
    <form method="POST" action="{{ route('reviewForm.store') }}" id="reviewForm">
        @csrf

        <input type="hidden" name="research_id" value="{{ $research->id }}">


        <input type="hidden" name="criteria" id="criteriaInput">


        <textarea name="notes" id="notes"></textarea>


        <input type="text" name="total_score" id="scoreBox">

        <button type="submit">Save</button>
    </form>


      <button class="no-print" id="saveBtn">Save</button>

      <button class="no-print">
        <a href="{{ route('RevResAccount.RequestDetailsIfAccept')}}">

            document.getElementById("saveBtn").addEventListener("click", function () {
                const checkedItems = Array.from(document.querySelectorAll(".score:checked")).map(el => el.parentElement.innerText.trim());

                document.getElementById("criteriaInput").value = JSON.stringify(checkedItems);

                document.getElementById("reviewForm").submit();
            });

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
