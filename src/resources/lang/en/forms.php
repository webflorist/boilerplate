<?php

return [
    'select_file' => 'Select file',
    'change_file' => 'Change',
    'remove_file' => 'Remove',
    'download_file' => 'Download file',
    'contact_data' => 'Contact Data',
    'terms' => 'Terms',
    'accept_terms' => 'I accept the <a href="' . (route_tree()->doesNodeExist('terms') ? route_node('terms')->getUrl() : '') . '" target="_blank">terms and conditions</a> as well as the <a href="' . route_node_url(config('boilerplate.privacy_policy_node')) . '" target="_blank">privacy policy</a>.',
    'accept_privacy_policy' => 'I accept the <a href="' . route_node_url(config('boilerplate.privacy_policy_node')) . '" target="_blank">privacy policy</a>.',
    'drop_or_click_to_upload' => 'Drop or select file(s)',
    'invalid_file_type' => 'File type must be :allowed.',
    'invalid_file_size' => 'File size must not be larger than :max.'
];
