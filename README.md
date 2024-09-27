# Starter Kit Laravel Filament

## Default Usage (Use XAMPP, MAMPP, etc)

### Additional Kit
1. Visual Studio Code/Sublime/Other Text Editor
2. Composer
3. XAMPP/MAMPP/Other (Minimum PHP Version 8.2)

### How to Run the Application
1. Clone this repository <code>git clone https://github.com/naufal-rafif/laravel-filament-starter.git</code>
2. Run <code>composer install</code>
2. Run <code>php artisan migrate --seed</code>

## Docker Usage
```
cp .env.example .env
cp docker-compose.yml.default docker-compose.yml
```

```
docker compose up -d
docker exec -it starter-project-app bash
```

In shell:
```
composer install
```

```
chmod -R ugo+rw vendor/
chmod -R ugo+rw bootstrap/cache/
chmod -R ugo+rw storage/
```

```
chmod -R ugo+rw composer.lock
chmod -R ugo+rw composer.json
```

## Filament Cheat Sheet
Create dummy user admin
```
php artisan make:filament-user
```

Optimize filament on Production
```
php artisan filament:optimize
```

Clear cache on filament
```
php artisan filament:optimize-clear
```

## Just a Note
Fresh project who use **docker** need this:

Install Octane
```
vendor/bin/sail php artisan octane:install
```

## Progress
- [✓] Docker Friendly
- [ ] User Module
- [ ] Role Permission
- [ ] Multi Tenant
- [ ] Landing Page
- [ ] App Setting
- [ ] Testing

## Happy Code !
