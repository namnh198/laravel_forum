## Install

### Clone Project
```
git clone https://github.com/tieugum/laravel_forum.git
cd laravel_forum && composer install
cp .env.example .env
```

### Edit file .env
```
DB_DATABASE=laravel_forum
DB_USERNAME=root
DB_PASSWORD=
```

### Create Mysql database
```
mysql -u USERNAME -p
use laravel_forum
show databases
```

```
Or using mysql GUI
```

### Setup
```
php artisan key:generate
php artisan migrate:refresh --seed
php artisan serve --port=XX
```

### Admin Account
```
email: admin@admin.com
password: admin123
```