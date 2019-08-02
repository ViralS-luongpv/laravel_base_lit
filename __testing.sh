cp ./.env.testing.template ./.env.testing

php artisan key:generate --env=testing

echo "$(sed "s+TEST_DB_HOST=127.0.0.1+TEST_DB_HOST=database+g" .env.testing)" > .env.testing
