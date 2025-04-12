document.addEventListener("DOMContentLoaded", function () {
  const filterButtons = document.querySelectorAll(".filter button");
  const rows = document.querySelectorAll("table tbody tr");
  const sidebarLinks = document.querySelectorAll(".sidebar ul li");
  const detailsButtons = document.querySelectorAll(".details");
  const statusButtons = document.querySelectorAll(".status");

  filterButtons.forEach((button) => {
    button.addEventListener("click", function () {
      filterButtons.forEach((btn) => {
        btn.classList.remove("active");
        btn.style.outline = "none";
      });
      this.classList.add("active");
      this.style.outline = "2px solid #0d2b1f";

      const filter = this.textContent.trim().toLowerCase();

      rows.forEach((row) => {
        const type = row.children[2].textContent.trim().toLowerCase();

        if (
          filter === "all" ||
          type.includes(filter.split(" ")[0]) ||
          (filter.includes("publish") && type.includes("publication"))
        ) {
          row.style.display = "table-row";
        } else {
          row.style.display = "none";
        }
      });
    });
  });

  detailsButtons.forEach((button) => {
    button.addEventListener("click", function () {
      window.location.href = "details_page.html";
    });
  });

  statusButtons.forEach((button) => {
    button.addEventListener("click", function () {
      if (this.classList.contains("track")) {
        window.location.href = "tracking_page.html";
      } else if (this.classList.contains("completed")) {
        window.location.href = "completed_page.html";
      }
    });
  });

  sidebarLinks.forEach((link) => {
    link.addEventListener("click", function () {
      sidebarLinks.forEach((li) => {
        li.classList.remove("active");
        li.style.borderLeft = "none";
        li.style.outline = "none";
        li.querySelector("img").style.filter = "none";
        li.querySelector("a").style.color = "#333";
      });

      this.classList.add("active");
      this.style.borderLeft = "5px solid #0d2b1f";
      this.style.outline = "1px solid #0d2b1f";
      this.querySelector("img").style.filter =
        "grayscale(100%) brightness(50%)";
      this.querySelector("a").style.color = "#555";
    });
  });
});
document.addEventListener("DOMContentLoaded", function () {
  // احصل على جميع الروابط في القائمة الجانبية
  let sidebarLinks = document.querySelectorAll(".sidebar ul li a");

  // احصل على اسم الصفحة الحالية من الرابط
  let currentPage = window.location.pathname.split("/").pop();

  sidebarLinks.forEach((link) => {
    if (link.getAttribute("href").includes(currentPage)) {
      link.parentElement.classList.add("active"); // إضافة `active` إلى العنصر المحدد
    } else {
      link.parentElement.classList.remove("active"); // إزالة `active` من العناصر الأخرى
    }
  });
});
