cp ./../.env.example ./../.env
cd ./..
composer install
php artisan key:generate
