##About Robusta Bus WebAPI Robusta Bus WebApi is a Laravel work-in-progress project build for bus reservation system which can be used by any platform (web, Mobile, .etc).

##Pre-requisites

PHP 8.1.0 PHP Composer. Laravel 10. MySql. Laravel Passport. Postman optional to can test the api .

##Installation create database : robusta_bus. git clone https://github.com/x4jo-cod3/robusta_bus.git After project download is complete map to the root of your project. Copy database credintials to .env DB_CONNECTION=mysql DB_HOST=127.0.0.1 DB_PORT=3306 DB_DATABASE=robusta_bus DB_USERNAME=root DB_PASSWORD= migrate the database using: php artisan migrate

##install a passport to your project to get apiKey php artisan passport:install copy key details to your .env PASSPORT_PERSONAL_ACCESS_CLIENT_ID="" PASSPORT_PERSONAL_ACCESS_CLIENT_SECRET="" run the application locally using: php artisan serve

Data seeds (initial trip, but, and auth clients)

php artisan db:seed

Now You can Use the Postman Collection to check the apis, find it at:

path-to-projecct/postman/robusta.postman_collection.json frontend dev run

npm install then

npm run build

Access the administration area login as admin from here

email:  admin@admin.com
password:  123456
