php artisan migrate
php artisan db:seed --class=UsersTableSeeder
php artisan db:seed --class=RolesTableSeeder
php artisan db:seed --class=PermissionsTableSeeder
php artisan db:seed --class=RoleHasPermissionsTableSeeder
php artisan db:seed --class=ModelHasRolesTableSeeder
php artisan db:seed --class=ModelHasPermissionsTableSeeder

echo "User admin was created!"
echo "User: viralsoft@vs.com"
echo "Password: 123@123a"
