# Library System

## Description
Simple Library Information System

## Requirements
- PHP
- Composer
- MySQL
- Laravel

## Installation
1. Clone repository ini: git clone https://github.com/023nurulfadillah-rgb/library-system.git
2. Masuk ke folder: cd library-system
3. Install dependency: composer install
4. Copy file environment: copy .env.example .env
5. Generate application key: php artisan key:generate
6. Buat database baru bernama library_system di MySQL (lewat phpMyAdmin)
7. Sesuaikan konfigurasi database di file .env (DB_DATABASE=library_system, DB_USERNAME=root, DB_PASSWORD=kosong)
8. Jalankan migration: php artisan migrate
9. Jalankan server: php artisan serve
10. Buka browser ke http://127.0.0.1:8000

## Author
Nurul Fadillah