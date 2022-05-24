# A demo of Laravel Comments

This repo contains a Laravel app to showcase [Laravel Comments](https://laravel-comments.com). You'll need [a valid license](https://spatie.be/docs/laravel-comments/v1/getting-a-license) in order to install it.

## Usage

1. Clone the repo
2. Copy `.env.example` to `.env`
3. Configure `auth.json` as instructed in [the installation instruction](https://spatie.be/docs/laravel-comments/v1/installation-setup#content-installation-via-composer) of the package
4. Run `composer install`
5. Run `php artisan key:generate`
6. Run `php artisan migrate --seed`
7. Run `yarn` and `yarn run dev` (or the npm equivalents)
8. Visit the Laravel app in your browser.

You can use the comments component to post a comment, reply or reaction. Using the navigation above you can quickly log in as an admin or regular user.

![screenshot](https://github.com/spatie/laravel-comments-app/blob/main/docs/screenshot.png?raw=true)
