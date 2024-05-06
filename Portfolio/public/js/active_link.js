document.addEventListener("DOMContentLoaded", function () {
    var links = document.querySelectorAll(".menu-link");

    links.forEach(function (link) {
        var linkPath = new URL(link.href).pathname;
        if (window.location.pathname === linkPath) {
            link.classList.add("active");
        }

        link.addEventListener("click", function (event) {

            event.preventDefault();


            window.location.href = link.href;
        });
    });
});
