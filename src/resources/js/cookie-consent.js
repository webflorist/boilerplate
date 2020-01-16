/*
 * Bootstrap Cookie Alert by Wruczek
 * https://github.com/Wruczek/Bootstrap-Cookie-Alert
 * Released under MIT license
 */
(function () {
    "use strict";

    var cookieAlert = document.querySelector(".cookiealert");
    var acceptCookies = document.querySelector(".acceptcookies");
    var declineCookies = document.querySelector(".declinecookies");
    let cookieAccepted = getCookie("acceptCookies");

    cookieAlert.offsetHeight; // Force browser to trigger reflow (https://stackoverflow.com/a/39451131)

    // Show the alert if we cant find the "acceptCookies" cookie
    if (!cookieAccepted) {
        cookieAlert.classList.add("show");
    }

    // Init Google Analytics, if cookies were accepted.
    if (cookieAccepted === 'true') {
        initGoogleAnalytics();
    }

    // When clicking on the agree or disagree button, create a 1 year
    // cookie to remember user's choice and close the banner
    acceptCookies.addEventListener("click", function () {
        makeCookieChoice(true);
    });
    declineCookies.addEventListener("click", function () {
        makeCookieChoice(false);
    });

    function makeCookieChoice(accepted) {
        setCookie("acceptCookies", accepted, 365);
        cookieAlert.classList.remove("show");
        if (accepted === true) {
            initGoogleAnalytics();
        }
    }

    // Cookie functions from w3schools
    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) === ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) === 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
})();
