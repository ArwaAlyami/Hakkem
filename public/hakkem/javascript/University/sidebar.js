document.addEventListener("DOMContentLoaded", function () {
    const sidebarLinks = document.querySelectorAll(".sidebar ul li");

    sidebarLinks.forEach(link => {
        link.addEventListener("click", function () {
            // إزالة النمط النشط عن جميع العناصر
            sidebarLinks.forEach(li => {
                li.classList.remove("active");
                li.style.borderLeft = "none";
                li.style.outline = "none";
                li.querySelector("img").style.filter = "none";
                li.querySelector("a").style.color = "#333";
            });

            // تفعيل العنصر النشط الجديد
            this.classList.add("active");
            this.style.borderLeft = "5px solid rgb(10, 96, 60)";
            this.style.outline = "1px solid rgb(10, 96, 60)";;
            this.querySelector("img").style.filter = "grayscale(100%) brightness(50%)";
            this.querySelector("a").style.color = "#555";
        });
    });
});
