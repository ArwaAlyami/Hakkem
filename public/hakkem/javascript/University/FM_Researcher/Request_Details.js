document.addEventListener("DOMContentLoaded", function () {
    let seeMoreButtons = document.querySelectorAll(".see-more");

    seeMoreButtons.forEach(button => {
        button.addEventListener("click", function () {
            let detailsRow = this.closest("tr").nextElementSibling;
            if (detailsRow.classList.contains("research-details")) {
                detailsRow.style.display = detailsRow.style.display === "table-row" ? "none" : "table-row";
                this.classList.toggle("open"); // ← هذا يُفعل الدوران
            }
        });
    });
});
