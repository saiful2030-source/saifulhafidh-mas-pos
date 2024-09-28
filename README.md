# Starter Kit Laravel Filament

## Default Usage (Use XAMPP, MAMPP, etc)

### Additional Kit
1. Visual Studio Code/Sublime/Other Text Editor
2. Composer
3. XAMPP/MAMPP/Other (Minimum PHP Version 8.2)

### How to Run the Application
1. Clone this repository <code>git clone https://github.com/naufal-rafif/laravel-filament-starter.git appname</code>
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
### On Shell

#### Development Environment
```
sh stub/local/setup.sh
```

#### Production Environment
```
sh stub/prod/setup.sh
```

### Docker Usage Note
- On development we use npm package **chokidar** to update change when reload. You can remove `--watch` on **supervisord.conf** or you can choose setup on production mode
- We use Laravel Octane with frankenphp server, you can change or remove it if you don't want use it

## Filament Cheat Sheet

Optimize filament on Production
```
php artisan filament:optimize
```

Clear cache on filament
```
php artisan filament:optimize-clear
```

## Just a Note

You can directly show the error on the storage/logs file

## Progress
- [x] Docker Friendly
- [ ] User Module
- [ ] Role Permission
- [ ] Multi Tenant
- [ ] Landing Page
- [ ] App Setting
- [ ] Testing

## Happy Code !
