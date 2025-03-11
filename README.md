<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Panduan untuk Clone

Sebelumnya pastikan Anda sudah menginstal:
- [PHP](https://www.php.net/downloads) (Minimal **versi 8.1**)
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/) atau database lain yang didukung Laravel
- [Git](https://git-scm.com/)
- [Laravel](https://laravel.com/) (Opsional, bisa diinstal melalui `composer`)


Akses [github repo](https://github.com/AzisWh/server-memento)

open your terminal

```bash
git clone https://github.com/AzisWh/server-memento
#
cd server-memento
```

Install all the depedencies:

```bash
composer install
```
konfigurasi env:

```bash
cp .env.example .env
```

## Local Server

Edit env dan sesuaikan dengan konfigurasi database:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=password_database
```

Database :

Migrate

```bash
php artisan migrate
```

Seed Foodlist

```bash
php artisan db:seed --class=FoodList
```

Run Server :

```bash
php artisan serve
```

API ROUTES :
```bash
url/api/login
url/api/register
url/api/logout
url/api/refresh
url/api/foodlist
url/api/fooddetail/id
url/api/foodbuy
url/api/userfood
```

