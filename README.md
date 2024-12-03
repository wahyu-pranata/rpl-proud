# Project Guide
## Requirement
1. XAMPP or Laragon
2. Make sure the mysql and apache server is turned on
3. PHP version > 8.2
4. Node with NPM installed

## Guide 
1. Clone this repo

   `git clone https://github.com/wahyu-pranata/rpl-proud.git`
2. Install dependency

   `composer install`<br>
   `npm install`

3. Copy .env.example file to .env (create it first)
4. Change the `DB_CONNECTION` value in .env to mysql
5. Remove `#` in `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` and change its value to your own database configuration.
6. Generate application key

    `php artisan key generate`
7. Run the migration

    `php artisan migrate`

8. Run the laravel server
    
    `php artisan serve`
9. Open the project at `http:127.0.0.1:8000`