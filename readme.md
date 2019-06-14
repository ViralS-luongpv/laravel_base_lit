# Cài đặt
## Cài đặt cơ bản:
- cp .env.example .env
- composer install
- php artisan key:generate

## Seed base data
- **bash __seed.sh**

# Các package
- backpack/crud
- backpack/permissionmanager
- barryvdh/laravel-elfinder
- spatie/laravel-permission
- viralsbackpack/backpackapi
- viralsbackpack/backpackexcel
- viralsbackpack/backpackimageupload
- backpack/generators

# Setup unit test
- bash __testing.sh
- php artisan config:cache
- Để chạy unit test sử dụng câu lệnh **vendor/bin/phpunit**
