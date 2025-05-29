document.addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll(".filter-btn");
    const items = document.querySelectorAll(".equipment-item");

    buttons.forEach(button => {
        button.addEventListener("click", () => {
            const filter = button.getAttribute("data-filter");

            // Highlight active button
            buttons.forEach(btn => btn.classList.remove("selected"));
            button.classList.add("selected");

            // Filter equipment
            items.forEach(item => {
                const itemType = item.getAttribute("data-type");
                if (filter === "all" || itemType === filter) {
                    item.style.display = "";
                } else {
                    item.style.display = "none";
                }
            });
        });
    });
});
