document.addEventListener("DOMContentLoaded", function() {
    const links = document.querySelectorAll(".sidebar ul li a");

    links.forEach(link => {
        link.addEventListener("click", function() {
            links.forEach(item => item.classList.remove("active"));
            this.classList.add("active");

            const target = this.getAttribute("href").substring(1);
            document.querySelectorAll(".main-content section").forEach(section => {
                section.style.display = section.id === target ? "block" : "none";
            });
        });
    });

    // Show the first section by default
    links[0].click();
});
