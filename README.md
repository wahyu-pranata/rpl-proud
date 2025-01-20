<div align="center">

## PROUD: Program Kerja Udayana

[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![WTFPL License][license-shield]][license-url]

</div>

<!-- PROJECT LOGO -->
</br>
<div align="center">
  <a href="https://www.unud.ac.id/">
    <img src="https://github.com/dash4k/tugas-akhir-alpro-1/assets/133938416/ff71757a-1b51-44b7-b14e-b53b061d9815" alt="Logo" width="230" height="259">
  </a>

  <h3 align="center">Final Project: Rekayasa Perangkat Lunak</h3>

  <p align="center">
    Aplikasi berbasis web sebagai pusat sentralisasi program kerja</br>
    di lingkungan Universitas Udayana.
  </p>
</div>
</br>

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

11. Seed the database. All users in the database are seeded with a default password of "password".

    ```bash
    php artisan db:seed

13. Run the project
    
    ```bash
    composer run dev
   
15. Open the project at `http:127.0.0.1:8000`

[contributors-shield]: https://img.shields.io/github/contributors/wahyu-pranata/rpl-proud?style=flat-square&color=%23ADD8E6
[contributors-url]: https://github.com/wahyu-pranata/rpl-proud/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/wahyu-pranata/rpl-proud?style=flat-square&color=%23ADD8E6
[forks-url]: https://github.com/wahyu-pranata/rpl-proud/forks
[license-shield]: https://img.shields.io/github/license/wahyu-pranata/rpl-proud?style=flat-square&color=%23ADD8E6
[license-url]: https://github.com/wahyu-pranata/rpl-proud/blob/main/LICENSE
