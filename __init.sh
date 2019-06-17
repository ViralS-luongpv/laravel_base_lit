cp .env.example .env
composer install
php artisan key:generate

echo "==== Auto config database start ===="
echo "$(sed "s+DB_HOST=127.0.0.1+DB_HOST=db+g" .env)" > .env
echo "$(sed "s+DB_DATABASE=homestead+DB_DATABASE=base+g" .env)" > .env
echo "$(sed "s+DB_USERNAME=homestead+DB_USERNAME=root+g" .env)" > .env
echo "$(sed "s+DB_PASSWORD=secret+DB_PASSWORD=1+g" .env)" > .env
echo "==== End ===="
