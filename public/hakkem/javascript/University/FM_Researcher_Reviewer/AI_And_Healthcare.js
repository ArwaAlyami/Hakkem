// تحديد العناصر
const checkboxes = document.querySelectorAll('.score');
const scoreBox = document.getElementById('scoreBox');
const totalPossible = 60;

// ✅ التحكم في الإدخال اليدوي داخل scoreBox
scoreBox.addEventListener('keypress', (e) => {
  const char = String.fromCharCode(e.which);

  // السماح فقط بالأرقام
  if (!/^\d$/.test(char)) {
    e.preventDefault();
    return;
  }

  const currentValue = scoreBox.value;

  // منع أكثر من رقمين
  if (currentValue.length >= 2) {
    e.preventDefault();
    return;
  }

  const newValue = currentValue + char;

  // منع القيم الأعلى من 60
  if (parseInt(newValue) > 60) {
    e.preventDefault();
    return;
  }

  // منع "00" أو "000"
  if (/^0+$/.test(newValue)) {
    e.preventDefault();
    return;
  }
});

// ✅ منع اللصق لقيم غير صالحة
scoreBox.addEventListener('paste', (e) => {
  const pasted = e.clipboardData.getData('text').trim();

  if (
    isNaN(pasted) ||
    pasted.length > 2 ||
    parseInt(pasted) > 60 ||
    /^0+$/.test(pasted)
  ) {
    e.preventDefault();
  }
});

// ✅ تحميل النموذج كـ PDF عند الضغط على زر التحميل
  document.getElementById('saveBtn').addEventListener('click', async () => {
    const element = document.getElementById('pdf-content');
    const textarea = document.getElementById('notes');
    const preview = document.getElementById('notesPreview');
    const successMessage = document.getElementById('successMessage');
    const noPrintElements = document.querySelectorAll('.no-print');

    // انسخ المحتوى إلى div ليظهر في PDF
    preview.textContent = textarea.value;
    preview.style.display = 'block';
    textarea.style.display = 'none';

    // أخفِ العناصر غير المرغوب ظهورها في PDF
    noPrintElements.forEach(el => el.style.display = 'none');

    // التقط صورة للنموذج
    const canvas = await html2canvas(element, {
      scale: 2,
      useCORS: true
    });

    const imgData = canvas.toDataURL('image/jpeg', 1.0);
    const { jsPDF } = window.jspdf;
    const pdf = new jsPDF('p', 'mm', 'a4');

    const pageWidth = 210;
    const pageHeight = 297;
    const imgWidth = pageWidth;
    const imgHeight = (canvas.height * imgWidth) / canvas.width;

    if (imgHeight > pageHeight) {
      const ratio = pageHeight / imgHeight;
      pdf.addImage(imgData, 'JPEG', 0, 0, imgWidth * ratio, pageHeight);
    } else {
      pdf.addImage(imgData, 'JPEG', 0, 0, imgWidth, imgHeight);
    }

    pdf.save('Review_Form.pdf');

   
  });
