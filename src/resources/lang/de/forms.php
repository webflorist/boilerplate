<?php

return [
    'select_file' => 'Datei wählen',
    'change_file' => 'Ändern',
    'remove_file' => 'Löschen',
    'download_file' => 'Datei herunterladen',
    'contact_data' => 'Kontaktdaten',
    'terms' => 'Geschäftsbedingungen',
    'accept_terms' => 'Ich akzeptiere die <a href="' . (route_tree()->doesNodeExist('terms') ? route_node('terms')->getUrl() : '') . '" target="_blank">Allgemeinen Geschäftsbedingungen</a> sowie die <a href="' . route_node_url(config('boilerplate.privacy_policy_node')) . '" target="_blank">Datenschutzerklärung</a>.',
    'accept_privacy_policy' => 'Ich akzeptiere die <a href="' . route_node_url(config('boilerplate.privacy_policy_node')) . '" target="_blank">Datenschutzerklärung</a>.',
    'drop_or_click_to_upload' => 'Datei(en) ablegen oder auswählen',
    'invalid_file_type' => 'Datei muss von Typ :allowed sein.',
    'invalid_file_size' => 'Dateigröße darf :max nicht überschreiten.'
];
