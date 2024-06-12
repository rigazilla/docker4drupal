docker-compose exec --user wodby:82 php bash -c 'chmod aug+w -R .'
docker-compose exec --user 82 php bash -c 'chmod aug+w -R web/sites/default/files/js'
docker-compose exec --user 82 php bash -c 'chmod aug+w -R web/sites/default/files/css'
make down
make prune
