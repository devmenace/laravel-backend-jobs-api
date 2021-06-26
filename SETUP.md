Clone repository
---
``
git clone git@github.com:devmenace/laravel-backend-jobs-api.git
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
DB_USERNAME=demo
DB_PASSWORD=demo
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
