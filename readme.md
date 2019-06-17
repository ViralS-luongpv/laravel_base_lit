# Cài đặt
## Cài đặt môi trường(docker) (Yêu cầu đã install docker)
- docker-compose build
- docker-compose up
- bash login.sh(đăng nhập vào server docker)

## Cài đặt cơ bản: (Chỉ sử dụng trên server docker)
- **bash __init.sh** 

## Seed base data: (Chỉ sử dụng trên server docker)
- **bash __seed.sh**

# Setup unit test: (Chỉ sử dụng trên server docker)
- **bash __testing.sh**
- Để chạy unit test sử dụng câu lệnh **vendor/bin/phpunit**

# Các package
- backpack/crud
- backpack/permissionmanager
- barryvdh/laravel-elfinder
- spatie/laravel-permission
- viralsbackpack/backpackapi
- viralsbackpack/backpackexcel
- viralsbackpack/backpackimageupload
- backpack/generators
