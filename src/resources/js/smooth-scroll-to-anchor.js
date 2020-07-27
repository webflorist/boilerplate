/* On clicking an anchor-link with class 'smooth-scroll' */
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth',
            block: 'center'
        });
    });
});

/* On loading a page with an anchor in it's URL */
// to top right away
if (window.location.hash) scroll(0, 0);
// void some browsers issue
setTimeout(function () {
    scroll(0, 0);
}, 1);
(function () {
    // *only* if we have anchor on the url
    if (window.location.hash) {
        document.querySelector(window.location.hash).scrollIntoView({
            behavior: 'smooth',
            block: 'center'
        });
    }

});
