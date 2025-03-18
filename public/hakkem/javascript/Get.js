document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("menu-toggle");
    const mobileMenu = document.getElementById("mobile-menu");

    // عند النقر على زر ☰، يتم إظهار/إخفاء القائمة
    menuToggle.addEventListener("click", function () {
        mobileMenu.style.display = (mobileMenu.style.display === "flex") ? "none" : "flex";
    });

    // إغلاق القائمة عند النقر خارجها
    document.addEventListener("click", function (event) {
        if (!menuToggle.contains(event.target) && !mobileMenu.contains(event.target)) {
            mobileMenu.style.display = "none";
        }
    });
});