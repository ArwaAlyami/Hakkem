document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll(".filter button");
    const requests = document.querySelectorAll(".request-item");

    filterButtons.forEach((button) => {
        button.addEventListener("click", function () {
            filterButtons.forEach((btn) => btn.classList.remove("active"));
            this.classList.add("active");

            const filter = this.textContent.trim().toLowerCase();

            requests.forEach((request) => {
                const status = request.querySelector(".status").textContent.trim().toLowerCase();

                if (filter === "all" || status.includes(filter)) {
                    request.style.display = "flex";
                } else {
                    request.style.display = "none";
                }
            });
        });
    });
});
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
