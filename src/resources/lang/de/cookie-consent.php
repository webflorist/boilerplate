<?php

$privacyPolicyUrl = route_node_url(config('boilerplate.privacy_policy_node'));
$s = config('boilerplate.privacy_policy_singular') === true;

return [
    'header' => 'Hinweis zu Cookies und Datenschutz',

    'google_analytics_question' => 'Diese Website verwendet den Dritt-Anbieter-Dienst Google Analytics um Ihnen einen bestmöglichen Service zu bieten. Is that OK für Sie?',
    'google_analytics_help_text' => 'Wenn Sie zustimmen, werden Google Analytics bezogene Cookies gesetzt. Wenn Sie ablehnen, werden nur technisch notwendige Cookies und Datenverarbeitungen vorgenommen.',
    'google_analytics_link_text' => 'Mehr Informationen finden Sie in der <a href=":url">Datenschutzerklärung</a>! Dort können Sie Ihre Auswahl auch jederzeit widerrufen.',

    'technical_only' => 'Der Schutz Ihrer persönlichen Daten ist ' . ($s ? 'mir' : 'uns') . ' ein besonderes Anliegen. Deshalb nutzt ' . ($s ? 'meine' : 'unsere') . ' Webseite nur technisch notwendige Cookies und Datenverarbeitungen. Mehr Informationen finden Sie in der <a href="' . $privacyPolicyUrl . '">Datenschutzerklärung</a>!',

    'accept' => 'Akzeptieren',
    'decline' => 'Ablehnen',
    'hide' => 'Hinweis nicht mehr anzeigen'
];
