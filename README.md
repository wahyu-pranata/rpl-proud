# Project Guide
## Requirement
1. XAMPP or Laragon
2. Make sure the mysql and apache server is turned on
3. PHP version > 8.2
4. Node with NPM installed

## Development
1. Clone this repo

   ```bash
   git clone https://github.com/wahyu-pranata/rpl-proud.git

3. Install dependency

   ```bash
   composer install
   npm install

4. Copy .env.example file to .env (create it first)
5. Change the `DB_CONNECTION` value in .env to mysql
6. Uncomment `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` and change the values to your own database configuration.
7. Uncomment `MAIL_MAILER`, `MAIL_HOST`, `MAIL_PORT`, `MAIL_USERNAME`, `MAIL_PASSWORD`, `MAIL_ENCRYPTION`, `MAIL_FROM_ADDRESS`, `MAIL_FROM_NAME` and change the values to your own mail server configuration. [Read Docs](https://laravel.com/docs/11.x/mail)
8. Generate application key

    ```bash
   php artisan key:generate
   
9. Run the migration

    ```bash
   php artisan migrate

11. Seed the database

    ```bash
    php artisan db:seed

13. Run the project
    
    ```bash
    composer run dev
   
15. Open the project at `http:127.0.0.1:8000`
