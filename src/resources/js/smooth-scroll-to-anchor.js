/* On clicking an anchor-link with class 'smooth-scroll' */
document.querySelectorAll('a.smooth-scroll[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
