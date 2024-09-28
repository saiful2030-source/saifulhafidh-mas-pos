composer install

chmod -R ugo+rw vendor/
chmod -R ugo+rw bootstrap/cache/
chmod -R ugo+rw storage/

chmod ugo+rw composer.lock
chmod ugo+rw composer.json

php artisan migrate --seed
cp stub/local/frankenphp frankenphp
php artisan octane:install