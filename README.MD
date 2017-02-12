Persian
=======
A simple library for Persian language localization


Installation
------------
For install this package Edit your project's ```composer.json``` file to require parsidev/persian

```php
"require": {
    "parsidev/persian": "dev-master"
},
```
Now, update Composer:
```
composer update
```
Once composer is finished, you need to add the service provider. Open ```config/app.php```, and add a new item to the providers array.
```
In Laravel 5.*
Parsidev\Persian\PersianServiceProvider::class,

In Laravel 4.*
'Parsidev\Persian\PersianServiceProvider',
```

Next, add a Facade for more convenient usage. In ```config/app.php``` add the following line to the aliases array:
```
In Laravel 5.*
'Persian' => Parsidev\Persian\Facades\Persian::class,

In Laravel 4.*
'Persian' => 'Parsidev\Persian\Facades\Persian',
```

Usage
-----

#####Convert to Persian characters
```php
Persian::arabicChar("علي"); //returns: علی
```

#####Convert to Persian numbers from Arabic Number
```php
Persian::arabicNumber("٣٤٥"); //returns: ۳۴۵
```

#####Convert to Persian numbers from English Number
```php
Persian::englishNumber("345"); //returns: ۳۴۵
```

#####Change keyboard layout
```php
Persian::switchKey("لخخلمث"); //returns: google
```

