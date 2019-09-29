/* On clicking an anchor-link with class 'smooth-scroll' */
$(document).on('click', 'a.smooth-scroll[href^="#"]', function (event) {
    let href = $.attr(this, 'href');
    if (href !== '#') {
        event.preventDefault();
        smooth_scroll_to_anchor($.attr(this, 'href'));
    }
});

/* On page-load with anchor in url */
// prevent default scrolling
if (window.location.hash) scroll(0, 0);
setTimeout(function () {
    scroll(0, 0);
}, 1);
$(document).ready(function () {

    if (window.location.hash) {
        smooth_scroll_to_anchor(window.location.hash);
    }
});

function smooth_scroll_to_anchor(anchor) {
    $('html, body').animate({
        scrollTop: $(anchor).offset().top - 100
    }, 500, 'swing');
}
