<?php

$privacyPolicyUrl = route_node_url(config('boilerplate.privacy_policy_node'));
$s = config('boilerplate.privacy_policy_singular') === true;

return [
    'header' => 'Cookie Notification',

    'google_analytics_question' => 'This website uses the third party service Google Analytics to provide you with the best possible service. Is that OK with you?',
    'google_analytics_help_text' => 'If you accept, Google Analytics related cookies will be set. If you decline, only technically necessary cookies and data processings will be used.',
    'google_analytics_link_text' => 'Find out more in the <a href=":url">privacy policy</a>! There you can also revoke your selection at any time.',

    'technical_only' => 'The privacy and protection of your data is of great concern to ' . ($s ? 'me' : 'es') . '. Therefor ' . ($s ? 'my' : 'our') . ' website only uses technically necessary cookies and data processings. Find out more in the <a href="' . $privacyPolicyUrl . '">privacy policy</a>!',

    'accept' => 'Accept',
    'decline' => 'Decline',
    'hide' => 'Do not show notification again'
];
