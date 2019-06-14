touch storage/testing.sqlite
cp ./.env ./.env.testing
absolutePath=`pwd`
echo "$(sed "s+DB_DATABASE=homestead+DB_DATABASE=${absolutePath}/storage/testing.sqlite+g" .env.testing)" > .env.testing
echo "$(sed "s+DB_CONNECTION=mysql+DB_CONNECTION=testing_sqlite+g" .env.testing)" > .env.testing
echo "$(sed "s+APP_ENV=+APP_ENV=testing+g" .env.testing)" > .env.testing

echo "DB_FOREIGN_KEYS=true" >> ./.env.testing
echo "TEST_DB_HOST=localhost" >> ./.env.testing
echo "TEST_DB_DATABASE=test_database" >> ./.env.testing
echo "TEST_DB_USERNAME=root" >> ./.env.testing
echo "TEST_DB_PASSWORD=root" >> ./.env.testing
