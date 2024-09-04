document.addEventListener("DOMContentLoaded", function () {
    const activeLink = document.querySelector(".nav_links a.active");

    if (activeLink) {
        activeLink.style.fontWeight = "bold";
        activeLink.style.color = "White"; 
        activeLink.style.cursor = "no-drop"; 
        activeLink.addEventListener("click", function (event) {
            event.preventDefault();
        });
    }
});