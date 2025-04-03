document.addEventListener("DOMContentLoaded", function() {
  const editButton = document.getElementById("edit-btn");
  const saveButton = document.getElementById("save-btn");
  const cancelButton = document.getElementById("cancel-btn");
  const formInputs = document.querySelectorAll("#profile-form input, #profile-form select");

  let originalValues = {};

  // تفعيل وضع التحرير عند النقر على زر "Edit"
  editButton.addEventListener("click", function() {
      formInputs.forEach(input => {
          originalValues[input.id] = input.value; // حفظ القيم الأصلية
          input.removeAttribute("disabled"); // السماح بالكتابة
      });
      saveButton.removeAttribute("disabled");
      cancelButton.removeAttribute("disabled");
      editButton.setAttribute("disabled", "true");
  });

  // حفظ التغييرات
  saveButton.addEventListener("click", function(event) {
      event.preventDefault(); // منع إعادة تحميل الصفحة
      formInputs.forEach(input => {
          input.setAttribute("disabled", "true"); // تعطيل الحقول بعد الحفظ
      });
      saveButton.setAttribute("disabled", "true");
      cancelButton.setAttribute("disabled", "true");
      editButton.removeAttribute("disabled");
  });

  // إلغاء التعديلات وإعادة القيم الأصلية
  cancelButton.addEventListener("click", function() {
      formInputs.forEach(input => {
          input.value = originalValues[input.id]; // إعادة القيم الأصلية
          input.setAttribute("disabled", "true"); // تعطيل الحقول
      });
      saveButton.setAttribute("disabled", "true");
      cancelButton.setAttribute("disabled", "true");
      editButton.removeAttribute("disabled");
  });

  // تحديث القائمة الجانبية ليتم تحديد العنصر عند النقر
  const sidebarLinks = document.querySelectorAll(".sidebar ul li");

  sidebarLinks.forEach(link => {
      link.addEventListener("click", function() {
          sidebarLinks.forEach(li => {
              li.classList.remove("active");
              li.style.borderLeft = "none";
              li.style.outline = "none";
              li.querySelector("img").style.filter = "none";
              li.querySelector("a").style.color = "#333";
          });

          this.classList.add("active");
          this.style.borderLeft = "5px solid #0d2b1f";
          this.style.outline = "1px solid #0d2b1f";
          this.querySelector("img").style.filter = "grayscale(100%) brightness(50%)";
          this.querySelector("a").style.color = "#555";
      });
  });
});
document.addEventListener("DOMContentLoaded", function () {
    // احصل على جميع الروابط في القائمة الجانبية
    let sidebarLinks = document.querySelectorAll(".sidebar ul li a");

    // احصل على اسم الصفحة الحالية من الرابط
    let currentPage = window.location.pathname.split("/").pop();

    sidebarLinks.forEach(link => {
        if (link.getAttribute("href").includes(currentPage)) {
            link.parentElement.classList.add("active"); // إضافة `active` إلى العنصر المحدد
        } else {
            link.parentElement.classList.remove("active"); // إزالة `active` من العناصر الأخرى
        }
    });
});