#1. Cài đặt
## 1.1 Clone project

## 1.2 Cài đặt môi trường(docker) (Yêu cầu đã install docker và docker-compose)
- cd `<project_folder>/docker` và chạy câu lệnh: `make build`
- truy cập vào server docker: `make login`

## 1.3 Cài đặt cơ bản: (Chỉ sử dụng trên server docker)
- **bash __init.sh** `Cài đặt cơ bản: composer install + gen key`
- **bash __seed.sh** `migrate + seed data`
- **bash __testing.sh** `config for unit test`

#2. Cách sử dụng: (Chỉ sử dụng trên server docker và trong thư mục project)
- Để chạy phpcs sử dụng câu lệnh `vendor/bin/phpcs`
- Auto fix một số lỗi cơ bản phpcs sử dụng câu lệnh `vendor/bin/phpcbf`
- Để chạy unit test sử dụng câu lệnh `vendor/bin/phpunit`

#3. Các package
- backpack/crud
- backpack/permissionmanager
- barryvdh/laravel-elfinder
- spatie/laravel-permission
- backpack/generators

#4. Tricks
- Các url:
    + url ứng dụng: `localhost:8080` (có thể thay đổi bằng cách thay đổi file cấu hình `docker-compose.yml` trong thư mục `docker`)
    + url code coverage: `localhost:8081` (có thể thay đổi bằng cách thay đổi file cấu hình `docker-compose.yml` trong thư mục `docker`)
- Cách kết nối với database sử dụng GUI:
    + host: `localhost` (127.0.0.1)
    + port: `13579` (có thể thay đổi bằng cách thay đổi file cấu hình `docker-compose.yml` trong thư mục `docker`)
    + u/p: `root/123@123a` hoặc `luonglit/123@123a`
    + database: `mydb` hoặc `testing`
- Thao tác với docker: (sử dụng tại thư mục `docker` bên ngoài local machine **không phải trong server docker**)
    + rebuild lại docker: `make build`
    + start docker container: `make start`
    + stop docker container: `make stop`
    + truy cập vào docker server: `make login`
