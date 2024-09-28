APP_NAME="${1:-app-name}"

cp .env.example .env
cp stub/prod/docker-compose.yml.default docker-compose.yml

docker compose up -d

docker exec $APP_NAME composer install

docker exec $APP_NAME chmod -R ugo+rw vendor/
docker exec $APP_NAME chmod -R ugo+rw bootstrap/cache/
docker exec $APP_NAME chmod -R ugo+rw storage/

docker exec $APP_NAME chmod ugo+rw composer.lock
docker exec $APP_NAME chmod ugo+rw composer.json

docker exec $APP_NAME php artisan migrate --seed
docker exec $APP_NAME cp stub/local/frankenphp frankenphp
docker exec $APP_NAME php artisan octane:install