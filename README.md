<h1 align="center">Seahorse</h1>
<p align="center"><img src="./publishable/assets/images/seahorse.svg" height="150"></p>
<p align="center"><a href="https://travis-ci.com/sunnytreesoftware/seahorse"><img src="https://travis-ci.com/sunnytreesoftware/searhorse.svg?branch=master"</a>
<a href="https://packagist.org/packages/sunnytreesoftware/seahorse"><img src="https://poser.pugx.org/sunnytreesoftware/seahorse/d/total.svg"></a>
<a href="https://packagist.org/packages/sunnytreesoftware/seahorse"><img src="https://poser.pugx.org/sunnytreesoftware/seahorse/v/stable"></a>
<a href="https://opensource.org/licenses/MIT"><img src="https://img.shields.io/badge/License-MIT-yellow.svg"></a></p>

<h2 align="center">Seahorse is a Content Management System built with Laravel </h2>
<br>

## Installation  
Install Laravel  
```bash
laravel new seahorse
```  

Laravel Auth  
```bash
php artisan make:auth  
```  

Migrations  
```bash
php artisan migrate  
```  

Install Seahorse
```bash
composer require sunnytreesoftware/seahorse
```  

Publish Assets  
```bash
php artisan vendor:publish --provider="Sunnytree\Seahorse\SeahorseServiceProvider"
```  

Run Migrations Again  
```bash
php artisan migrate
```   

Open the file app/Providers/RouteServiceProvider.php and find the lines:  
```php
protected function mapWebRoutes()
{
    Route::middleware('web')
        ->namespace($this->namespace)
        ->group(base_path('routes/web.php'));
}
```  

Change this line:  
```php
->group(base_path('routes/web.php'));
```  
to:  
```php
->group(base_path('routes/seahorse.php'));
```
