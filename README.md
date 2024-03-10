## Step 1: install Composer
composer install

## Step 2: Copy .env from .env.example and config the database in .env file

## Step 3: generate key 
php artisan key:generate

## Step 4: Migrate table
php artisan migrate

## Step 5: Seeding database
php artisan db:seed

## Step 6: run localhost and enjoin
php artisan serve

## Account test
email: client_1@gmail.com
password: 123456

## Project still building, not finish yet, follow the check list below

1. Product list Page => done
2. Product detail Page (including detail description and comment section) => Comment section for User to input not build yet
3. Cart management => todo
4. User register and login => done
5. User add balance (custom (virtual) currency) => todo
6. Payment and Order management => todo