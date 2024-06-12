# Switch to Infinispan
docker-compose exec php bash -c 'chmod aug+w -R web/sites/default'
docker-compose exec php bash -c "sed -i s/\'redis\'/\'infinispan\'/g web/sites/default/settings.php"
docker-compose exec --user www-data php bash -c "sed -i s/\'6379\'/\'9736\'/g web/sites/default/settings.php"
