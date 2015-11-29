## KapanServer

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)

KapanServer adalah backend dari project Kawal pembangunan Hackataon 3.0. Dibangun dengan arsitektur REST Webservice.

## Tools

- Lumen Framework
- MySQL
- JWT Token
- OAuth2 (Facebook & Google+, etc??) - Laravel Socialite
- PHPUnit (Liat waktu)


## Persiapan

1. Install library with composer -> "composer install"
2. Setup Database connection -> rubah .env, DB_DATABASE, DB_USERNAME, DB_PASSWORD
3. Migrate Database -> "php artisan migrate"
4. Seed Database -> "php artisan db:seed"
5. Test request via Postman -> setting Header: Content-Type = application/json

### Reference

- [Lumen OAuth2](https://github.com/barryvdh/barryvdh.github.io/blob/master/_posts/2015-07-19-oauth-in-javascript-apps-with-angular-lumen-using-satellizer-laravel-socialite.md)
