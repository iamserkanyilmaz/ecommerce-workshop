composer install --ignore-platform-reqs
php artisan migrate --force
php artisan db:seed --force
