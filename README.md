# Youpal DAM
@todo

## Solr
### Docker4Drupal

The exported config should work with the supplied docker-compose stack without changes.

You probably need to create the solr core used by the site manually. You can use the `docker-create-solr-core.sh` helper script for that.

### Config overwrite

Other instances should override the required config in the ```settings.php``` file. E.g. for solr 8:
```
$config['search_api.server.solr']['backend_config']['connector_config']['scheme'] = 'http';
$config['search_api.server.solr']['backend_config']['connector_config']['host'] = 'localhost';
$config['search_api.server.solr']['backend_config']['connector_config']['port'] = 8983;
$config['search_api.server.solr']['backend_config']['connector_config']['path'] = '/';
$config['search_api.server.solr']['backend_config']['connector_config']['core'] = 'default';
```
