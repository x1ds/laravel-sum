# Laravel Sum

Laravel wrapper for simple [PHP package](https://packagist.org/packages/nazububu/sum) for add two numbers

## Installation

To get the latest version of `Laravel Sum`, simply require the project using [Composer](https://getcomposer.org):

```bash
composer require nazububu/laravel-sum
```

Or manually update `require` block of `composer.json` and run `composer update`.

```json
{
    "require": {
        "nazububu/laravel-sum": "^1.0"
    }
}
```

Laravel uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.

### Laravel without auto-discovery:

If you don't use auto-discovery, add the ServiceProvider to the providers array in config/app.php

```php
Nazububu\LaravelSum\SumServiceProvider::class,
```

If you want to use the facade, add this to your facades in app.php:

```php
'Sum' => Nazububu\LaravelSum\Facades\Sum::class,
```

## Using

```php
use Nazububu\LaravelSum\Sum;

$sum = new Sum;
echo $sum->calculate(1, 1); // 2
```

## Testing

You can run tests with command

```bash
vendor/bin/phpunit tests/
```
