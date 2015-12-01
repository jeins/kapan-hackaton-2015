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


## Service Request

* #### Dokumentasi di Postman (tinggal import ke Postman aja)
[Download KapanBackend - Postman](https://www.getpostman.com/collections/3bbaa3a712dce8a7e2d8)

* #### Authenticate
| HTTP | URL                 | Keterangan | Request                                                | Response        |
| ---  |:------------------- | :----------| ------------------------------------------------------ | --------------- |
| POST | /auth/rakyat/signup | rakyat signup |{"fullname": "xxx", "email": "xxx", "password": "xxx"} | {"token":"xxx"} |
| POST | /auth/rakyat/login  | rakyat login |{"email": "xxx", "password": "xxx"}| {"token":"xxx"} |
| POST | /auth/rakyat/google | rakyat login via google |OAuth2 | {"token":"xxx"} |

* #### Admin
| HTTP | URL      | Keterangan           | Request   | Response  |
| ---: |:--------:| :------------------- | :-------- | :-------- |
| POST | /admin/profile      | add new admin profile |{ "email": "budi@dpr-ri.com", "password": "mautauaja", "fullname": "Budi Setiawan" } | {request} |
| PUT  | /admin/profile/{id} | update admin profile |{"fullname": "x", "email": "x", "password": "x"} | {request} |
| POST | /admin/project      | add new project | {"profile_pemerintah_id":1,"nama":"Pembangunan Tangga Berjalan","jenis":"negara","deskripsi":"project ini adalah","outcome":"project ini adalah","lokasi":"{long:123, lat:456}","status_selesai":0,"biaya":"123.123.123.123","waktu_pelaksanaan":"0000-00-00 00:00:00","jadwal_realisasi":"0000-00-00 00:00:00"} | {request} |
| PUT  | /admin/project/{id} | update project | {"profile_pemerintah_id":1,"nama":"Pembangunan Tangga Berdiri","jenis":"negara","deskripsi":"tangga berdiri adalah","outcome":"jalan tol","lokasi":"{long:123, lat:456}","status_selesai":0,"biaya":"123.123.123.123","waktu_pelaksanaan":"0000-00-00 00:00:00","jadwal_realisasi":"0000-00-00 00:00:00"} | {request} |

* #### API
| HTTP | URL      | Keterangan           | Request   | Response  |
| ---: |:--------:| :------------------- | :-------- | :-------- |
| GET | /api/profiles | display all profile pemerintah | - | [{"id":1,"email":"x","fullname":"x"}{"id":2,"email":"x","fullname":"x"}] |
| GET | /api/profile/{id} | display profile pemerintah by id | - | {"id":1,"email":"x","fullname":"x"} |
| GET | /api/projects | display all projects | - | [{"id":3,"profile_pemerintah_id":1,"nama":"Pembangunan Tangga Berjalan","jenis":"negara","deskripsi":"project ini adalah .....","outcome":"project ini adalah .....","lokasi":"{long:123, lat:456}","status_selesai":0,"biaya":"123.123.123.123","waktu_pelaksanaan":"0000-00-00 00:00:00","jadwal_realisasi":"0000-00-00 00:00:00","created_at":"-0001-11-30 00:00:00","updated_at":"-0001-11-30 00:00:00"},{"id":4,"profile_pemerintah_id":2,"nama":"Pembangunan Kereta Kencana","jenis":"negara","deskripsi":"project ini adalah .....","outcome":"project ini adalah .....","lokasi":"{long:123, lat:456}","status_selesai":0,"biaya":"1238.123.1512","waktu_pelaksanaan":"0000-00-00 00:00:00","jadwal_realisasi":"0000-00-00 00:00:00","created_at":"-0001-11-30 00:00:00","updated_at":"-0001-11-30 00:00:00"}] |
| GET | /api/projects/{id} | display selected project | - | {"id":3,"profile_pemerintah_id":1,"nama":"Pembangunan Tangga Berjalan","jenis":"negara","deskripsi":"project ini adalah .....","outcome":"project ini adalah .....","lokasi":"{long:123, lat:456}","status_selesai":0,"biaya":"123.123.123.123","waktu_pelaksanaan":"0000-00-00 00:00:00","jadwal_realisasi":"0000-00-00 00:00:00","created_at":"-0001-11-30 00:00:00","updated_at":"-0001-11-30 00:00:00"} |
| GET | /api/project/pemerintah/{id} | display project from specific pemerintah id | - | [{"id":3,"profile_pemerintah_id":1,"nama":"Pembangunan Tangga Berjalan","jenis":"negara","deskripsi":"project ini adalah .....","outcome":"project ini adalah .....","lokasi":"{long:123, lat:456}","status_selesai":0,"biaya":"123.123.123.123","waktu_pelaksanaan":"0000-00-00 00:00:00","jadwal_realisasi":"0000-00-00 00:00:00","created_at":"-0001-11-30 00:00:00","updated_at":"-0001-11-30 00:00:00"}] |
