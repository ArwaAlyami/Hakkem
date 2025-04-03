document.addEventListener("DOMContentLoaded", function () {
    // تفعيل الروابط الجانبية
    const sidebarLinks = document.querySelectorAll(".sidebar ul li");
    sidebarLinks.forEach(link => {
        link.addEventListener("click", function () {
            sidebarLinks.forEach(li => {
                li.classList.remove("active");
                li.style.borderLeft = "none";
                li.style.outline = "none";
                li.querySelector("img").style.filter = "none";
                li.querySelector("a").style.color = "#333";
            });

            this.classList.add("active");
            this.style.borderLeft = "5px solid rgb(10, 96, 60)";
            this.style.outline = "1px solid rgb(10, 96, 60)";
            this.querySelector("img").style.filter = "grayscale(100%) brightness(50%)";
            this.querySelector("a").style.color = "#555";
        });
    });

    // تفعيل العنصر الجانبي حسب الصفحة الحالية
    const allSidebarLinks = document.querySelectorAll(".sidebar ul li a");
    const currentPage = window.location.pathname.split("/").pop();
    allSidebarLinks.forEach(link => {
        if (link.getAttribute("href").includes(currentPage)) {
            link.parentElement.classList.add("active");
        } else {
            link.parentElement.classList.remove("active");
        }
    });

    // تفعيل تقييم النجوم
    const starsContainers = document.querySelectorAll(".stars");
    starsContainers.forEach(container => {
        let rating = parseInt(container.getAttribute("data-rating"));
        container.innerHTML = generateStars(rating);
    });

    function generateStars(rating) {
        let starsHTML = "";
        for (let i = 1; i <= 5; i++) {
            starsHTML += (i <= rating) ? "★" : "☆";
        }
        return starsHTML;
    }
});

// إظهار/إخفاء تفاصيل البحث
function toggleDetails(button) {
    let detailsRow = button.closest("tr").nextElementSibling;
    detailsRow.style.display = (detailsRow.style.display === "table-row") ? "none" : "table-row";
    button.classList.toggle("open");
}

// إظهار/إخفاء ملف PDF
function togglePDF(button) {
    let pdfLink = button.closest("td").querySelector(".pdf-link");
    let img = button.querySelector("img");

    if (button.getAttribute("data-visible") === "true") {
        pdfLink.style.display = "none";
        img.src = "/Hakkem/public/images/University/eye-closed.png";
        button.setAttribute("data-visible", "false");
    } else {
        pdfLink.style.display = "inline-block";
        img.src = "/Hakkem/public/images/University/eye-open.png";
        button.setAttribute("data-visible", "true");
    }
}
