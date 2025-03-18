document.addEventListener("DOMContentLoaded", function () {
  const openButton = document.getElementById("openReviewOverlay");
  const overlayContainer = document.getElementById("overlayContainer");

  // فتح الأوفرلاي
  openButton.addEventListener("click", function () {
    fetch("AI-Review-Request.html") // استدعاء الملف
      .then((response) => response.text()) // يحول الملف الى نص
      .then((data) => {
        // يأخذ البيانات عشان يضيفها
        overlayContainer.innerHTML = data; // هنا خزن بيانات الملف في الديف
        overlayContainer.classList.add("active"); // فتح الأوفرلاي
        setupCloseOverlay();
      });
  });

  // إغلاق الأوفرلاي
  function setupCloseOverlay() {
    const overlay = overlayContainer.querySelector(".overlay");
    overlay.addEventListener("click", function (event) {
      // إذا ضغط خارج حدود الاوفر لاي
      if (event.target === overlay) {
        overlayContainer.innerHTML = ""; // إزالة المحتوى
        overlayContainer.classList.remove("active"); // إغلاق الأوفرلاي
      }
    });
  }
});
