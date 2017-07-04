# coin-the-team
This is a website for a gaming team. It is written in PHP using Laravel.

![Home page](https://2.bp.blogspot.com/-gWZwCd9N8iU/V0PMgI8wR2I/AAAAAAAAApg/ItTS2jihvc4HrFMtd80zVERmx8qpepJFACLcB/s1600/ss%2B%25282016-05-23%2Bat%2B10.35.15%2529.png)

## Features

* Home page shows latest blog posts
* Easily editable teams & members page
* Contact form

## Installation

1. Place the files in your webserver
2. Install Composer and Laravel on server
3. Run `composer update`, `composer install`. Site should now be online.
4. Run `php artisan tinker`:
  ```
  $user = new User();
  $user->username = 'admin';
  $user->password = Hash::make('password');
  $user->email = 'admin@test.com';
  $user->save();
  ```

Site was customized for a specific person, so some manual configuration is required (image URLs, home page text)
