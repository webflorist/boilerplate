require('cookieconsent');
window.cookieconsent.initialise({
    "palette": {
        "popup": {
            "background": "#eaf7f7",
            "text": "#5c7291"
        },
        "button": {
            "background": "#56cbdb",
            "text": "#ffffff"
        }
    },
    "theme": "classic",
    "content": {
        "message": "Message",
        "dismiss": "Dismiss button text",
        "link": "Policy link text",
        "href": "/datenschutz"
    }
});