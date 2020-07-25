(function () {
    "use strict";

    var cookieAlert = document.querySelector(".cookiealert");
    cookieAlert.offsetHeight; // Force browser to trigger reflow (https://stackoverflow.com/a/39451131)

    // Show the alert if we cant find the "hideCookieAlert" cookie
    let cookieAlertHidden = getCookie("hideCookieAlert");
    if (!cookieAlertHidden) {
        cookieAlert.classList.add("show");
    }

    // Handle Google Analytics
    let googleAnalyticsAccepted = getCookie("acceptGoogleAnalytics");
    if (googleAnalyticsAccepted === 'true') {
        initGoogleAnalytics();
    }
    var acceptGoogleAnalyticsBtn = document.querySelector(".accept-google-analytics");
    if (acceptGoogleAnalyticsBtn !== null) {
        acceptGoogleAnalyticsBtn.addEventListener("click", function () {
            makeGoogleAnalyticsChoice(true);
        });
    }
    var declineGoogleAnalyticsBtn = document.querySelector(".decline-google-analytics");
    if (declineGoogleAnalyticsBtn !== null) {
        declineGoogleAnalyticsBtn.addEventListener("click", function () {
            makeGoogleAnalyticsChoice(false);
        });
    }
    function makeGoogleAnalyticsChoice(accepted) {
        hideCookieAlert();
        setCookie("acceptGoogleAnalytics", accepted, 365);
        if (accepted === true) {
            initGoogleAnalytics();
        }
    }

    // Handle Hide Cookie Alert
    var hideCookieAlertBtn = document.querySelector(".hide-cookie-alert");
    if (hideCookieAlertBtn !== null) {
        hideCookieAlertBtn.addEventListener("click", function () {
            hideCookieAlert();
        });
    }
    function hideCookieAlert() {
        cookieAlert.classList.remove("show");
        setCookie("hideCookieAlert", true, 365);
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
