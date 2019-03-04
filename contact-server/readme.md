# Lumen PHP Framework

## Project setup

### Migrate
#### Rename .env.example to .env with sqlite configuration
```
DB_CONNECTION=sqlite
```

```
php artisan migrate:refresh --seed
```

### Seed DB
```
php artisan db:seed --class=ContactTableSeeder
```

### Run Project
```
php -S localhost:4000 -t public
```
