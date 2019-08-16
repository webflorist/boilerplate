$(document).on('click', 'a.smooth-scroll[href^="#"]', function (event) {
    let href = $.attr(this, 'href');
    if (href !== '#') {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top -100
        }, 500);
    }
});
