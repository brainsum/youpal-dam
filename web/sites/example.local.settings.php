<?php

/**
 * @file
 * Development settings.
 */

// Additional settings from the web/sites folder.
// Probably should put these outside of webroot, too.
if (file_exists(__DIR__ . '/docker.settings.php')) {
  include_once __DIR__ . '/docker.settings.php';
}

if (file_exists(__DIR__ . '/development.settings.php')) {
  include_once __DIR__ . '/development.settings.php';
}

$config['google_tag.settings']['container_id'] = '';

if (file_exists(__DIR__ . '/damo-dev.services.yml')) {
  $settings['container_yamls'][] = __DIR__ . '/damo-dev.services.yml';
}

$settings['hash_salt'] = '<an at least 32 long hash salt>';

// Comment out if security needs to be tested.
$config['cors_ui.configuration']['allowedOrigins'] = ['*'];
$config['google_analytics.settings']['account'] = '';
$config['ip_auth.settings']['ip_auth'] = [];
$config['ldap_authentication.settings']['ldap_authentication_conf']['ssoExcludedPaths'][] = '/user/login';

$settings['trusted_host_patterns'] = [
  '^youpal\-dam\.docker\.localhost$',
];

$settings['file_public_path'] = 'sites/default/files';
// Stuff outside the webroot.
$settings['file_temp_path'] = '../tmp';
$settings['file_private_path'] = '../private_files';
$settings['config_sync_directory'] = '../config/sync';
