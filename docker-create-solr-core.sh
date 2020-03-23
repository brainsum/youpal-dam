#!/usr/bin/env bash

docker-compose exec --user 1000 solr sh -c "make create core=default -f /usr/local/bin/actions.mk"
