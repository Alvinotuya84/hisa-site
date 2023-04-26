

## Getting Started
```shell

cp .env.example .env
composer install OR composer update
php artisan key:generate
php artisan storage:link
nano .env << Configure .env
```
After opning your .env file, change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.

Then we can run
```shell
php artisan migrate:fresh --seed
npm install && npm run build
php artisan optimize:clear
php artisan serve
```

Premade auth
```
username: admin
password: password
```


This app build with below technologies




# License
Copyright 2022. Code released under the MIT license.
