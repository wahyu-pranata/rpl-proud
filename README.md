# Project Guide
## Requirement
1. XAMPP or Laragon
2. Make sure the mysql and apache server is turned on
3. PHP version > 8.2
4. Node with NPM installed

## Development
1. Clone this repo

   `git clone https://github.com/wahyu-pranata/rpl-proud.git`

2. Install dependency

   `composer install`<br>
   `npm install`

3. Copy .env.example file to .env (create it first)
4. Change the `DB_CONNECTION` value in .env to mysql
5. Uncomment `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` and change its value to your own database configuration.
6. Uncomment `MAIL_MAILER`, `MAIL_HOST`, `MAIL_PORT`, `MAIL_USERNAME`, `MAIL_PASSWORD`, `MAIL_ENCRYPTION`, `MAIL_FROM_ADDRESS`, `MAIL_FROM_NAME` and change its value to your own mail configuration. [Read Docs](https://laravel.com/docs/11.x/mail)
7. Generate application key

    `php artisan key:generate`
   
8. Run the migration

    `php artisan migrate`

9. Seed the database

    `php artisan db:seed`

11. Run the project
    
    `composer run dev`
   
12. Open the project at `http:127.0.0.1:8000`
