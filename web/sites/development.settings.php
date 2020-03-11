<?php

/**
 * @file
 * Development settings. You should include this on your settings.local.php.
 */

// It is strongly recommended that you set
// zend.assertions=1 in the PHP.ini file.
use Drupal\Component\Assertion\Handle;

assert_options(ASSERT_ACTIVE, TRUE);
Handle::register();

if (file_exists($app_root . '/sites/development.services.yml')) {
  $settings['container_yamls'][] = $app_root . '/sites/development.services.yml';
}

$settings['config_exclude_modules'] = [
  'devel',
  'devel_php',
  'devel_entity_updates',
  'webprofiler',
  'field_ui',
  'views_ui',
  'menu_ui',
];
$config['devel.settings']['devel_dumper'] = 'var_dumper';

// Expiration of cached pages to 0.
$config['system.performance']['cache']['page']['max_age'] = 0;
// Aggregate CSS files on.
$config['system.performance']['css']['preprocess'] = FALSE;
// Aggregate JavaScript files on.
$config['system.performance']['js']['preprocess'] = FALSE;
// Show all error messages on the site.
$config['system.logging']['error_level'] = 'verbose';

$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
$settings['cache']['bins']['page'] = 'cache.backend.null';
$settings['cache']['bins']['discovery_migration'] = 'cache.backend.null';
$settings['cache']['default'] = 'cache.backend.null';

$settings['skip_permissions_hardening'] = TRUE;
$settings['rebuild_access'] = TRUE;
# $settings['extension_discovery_scan_tests'] = TRUE;
