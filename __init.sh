cp .env.example .env
composer install
php artisan key:generate

echo "==== Auto config database start ===="
echo "$(sed "s+DB_HOST=127.0.0.1+DB_HOST=database+g" .env)" > .env
echo "$(sed "s+DB_DATABASE=homestead+DB_DATABASE=mydb+g" .env)" > .env
echo "$(sed "s+DB_USERNAME=homestead+DB_USERNAME=root+g" .env)" > .env
echo "$(sed "s+DB_PASSWORD=secret+DB_PASSWORD=123@123a+g" .env)" > .env
echo "==== End ===="
