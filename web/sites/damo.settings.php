<?php

/**
 * @file
 * Settings for the DAMo project.
 */

$settings['file_public_path'] = 'sites/default/files';
// Stuff outside the webroot.
$settings['file_temp_path'] = '../tmp';
$settings['file_private_path'] = '../private_files';
$settings['config_sync_directory'] = '../config/sync';

if (file_exists(__DIR__ . '/local.settings.php')) {
  include_once __DIR__ . '/local.settings.php';
}
