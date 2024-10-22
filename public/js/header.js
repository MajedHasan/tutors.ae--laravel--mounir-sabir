// Toggle dropdown on click for mobile responsiveness
const servicesLink = document.querySelector("nav .group.relative");
const dropdownMenu = document.querySelector(".dropdown-menu");

servicesLink.addEventListener("click", function (e) {
    e.preventDefault();
    dropdownMenu.classList.toggle("show"); // Toggle the dropdown menu
});

// Close dropdown menu when clicked outside
document.addEventListener("click", function (event) {
    if (
        !servicesLink.contains(event.target) &&
        !dropdownMenu.contains(event.target)
    ) {
        dropdownMenu.classList.remove("show"); // Remove show class if clicked outside
    }
});
