const searchInput = document.getElementById("searchInput");
const cards = document.querySelectorAll(".journal-card");
const noResults = document.getElementById("noResultsMessage");

searchInput.addEventListener("input", function () {
    const query = this.value.toLowerCase();
    let hasResult = false;

    cards.forEach((card) => {
        const text = card.innerText.toLowerCase();
        const match = text.includes(query);
        card.style.display = match ? "block" : "none";
        if (match) hasResult = true;
    });

    noResults.style.display = hasResult ? "none" : "block";
});
