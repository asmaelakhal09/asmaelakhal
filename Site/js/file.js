document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('.nav ul li span a');

    navLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();

            // Remove the 'active' class from all <li> elements
            navLinks.forEach(navLink => navLink.parentElement.classList.remove('active'));

            // Add the 'active' class to the clicked link's parent <li>
            this.parentElement.classList.add('active');

            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 50, // Adjust offset if needed
                    behavior: 'smooth'
                });
            } else {
                console.error(`Element with id ${targetId} not found.`);
            }
        });
    });
});
