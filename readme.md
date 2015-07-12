Laravel Auth Boilerplate
========================

Laravel 5.1 boilerplate to build a website that implements authentication.

## Screenshot

![Login page screenshot](http://i.imgur.com/zFF2DTx.jpg)

## Features

 * Authentication
	 * Registration and Login by Email
	 * Social authentication (Facebook, Twitter & Google+) using [Socialite](https://github.com/laravel/socialite)
	 * Account settings
	 * Password Reset
 * User Roles
 * Administration Panel Ready
	 * [AdminLTE 2.1](https://almsaeedstudio.com/blog/features-of-adminlte-2.1) Control Panel Template
 * Separated Frontend & Backend Controllers
 * HTML5 Boilerplate & Bootstrap ([Bootswatch](http://bootswatch.com/lumen/))


## Configuration

1. Adapt the settings in `.env.example` to the needs of your application and rename it to `.env`.
2. Change the admin login info in `database\seeds\DatabaseSeeder.php`

## Installation

```
$ composer install
$ php artisan key:generate
$ php artisan migrate
$ php artisan db:seed
$ php artisan serve
```

Now go to [localhost:8000](http://localhost:8000/) and login with the info you set in `database\seeds\DatabaseSeeder.php`.
