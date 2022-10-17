# Installation

cp .env.example .env

composer install

php artisan key:generate

php artisan migrate:fresh --seed

# Admin Login
- username: admin@admin.com
- password: password

# Run Application

php artisan serve
