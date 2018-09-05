<h1 align="center">Laravel Skeleton</h1>

<p align="center">
<a href="https://packagist.org/packages/klutzybubbles/laravel-skeleton"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/klutzybubbles/laravel-skeleton"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About

This skeleton is a fork from the laravel repo, it contains a simple navigation bar and footer for Bootstrap 4 and Laravel 5.6

This package is only intended for use with composer to create a project much faster than copying and pasting template files to the default laravel template.

To use the composer template simply use

```bash
composer create-project klutzybubbles/laravel-skeleton [directory]
```

Some other commands worth using in the setup phase

```bash
composer install
```

```bash
npm install
```

Key generation should be automatically done on project creation, but if for some reason it isnt there

```bash
php artisan key:generate
```

```bash
php artisan migrate:refresh
```

OPTIONAL (You can just register):
```bash
php artisan db:seed
```

After changes to scss or js files in the resources director have been changed you will need to run

```bash
npm run dev
```


Starting the server

```bash
php artisan serve
```
The above command doesn't play nice with js and css requests, so a workaround is to use PHP directly

```bash
php -S localhost:8000 -t public
```



I don't plan on keeping this repository up to date, but i will push updates every now and then.

## Laravel Repo

https://github.com/laravel/laravel
