## How to Reproduce

- Clone this repository
- Run `composer install`
- Run `cp .env.example .env ` and add database credentials
- Run `php artisan telescope:publish`
- Run `php artisan key:generate`
- Run `php artisan migrate`
- Load the .test url and then check the `laravel.log` file