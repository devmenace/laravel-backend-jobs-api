Laravel backend repository
---
``
git clone https://github.com/devmenace/laravel-backend-jobs-api.git
``

Install dependencies
---
``
composer install && npm install
``

Create config file and add DB configs in .env file
---
`
cp .env.example .env
`

DB connection details
---

```
DB_CONNECTION=mysql         
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=
DB_PASSWORD=
```

Create DB Tables
---
``
php artisan migrate
``

Dump ad recreate DB Tables
---
``
php artisan migrate:fresh
``

Seed DB Tables with records
---
``
php artisan db:seed
``

Now you should have user
---
Username`Demo`  
Email `demo@demo.com`   
Password `demo`

Username`Admin`  
Email `admin@admin.com`   
Password `admin`

Username`Test`  
Email `test@test.com`   
Password `test`

--------------

Angular client repository
---

``
git clone https://github.com/devmenace/angular-api-client.git
``
