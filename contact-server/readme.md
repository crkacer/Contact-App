# Lumen PHP Framework

## Project setup

### Migrate
#### Rename .env.example to .env
```
DB_CONNECTION=sqlite
```


### Migrate
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
