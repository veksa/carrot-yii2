# Yii2 Component for Carrot Quest Api

[![Stable Version](https://poser.pugx.org/veksa/carrot-yii2/v/stable)](https://packagist.org/packages/veksa/carrot-yii2)
[![License](https://poser.pugx.org/veksa/carrot-yii2/license)](https://packagist.org/packages/veksa/carrot-yii2)
[![Total Downloads](https://poser.pugx.org/veksa/carrot-yii2/downloads)](https://packagist.org/packages/veksa/carrot-yii2)
[![Daily Downloads](https://poser.pugx.org/veksa/carrot-yii2/d/daily)](https://packagist.org/packages/veksa/carrot-yii2)

Carrot Quest Api component for yii2 that works with [carrot-api](https://github.com/veksa/carrot-api).

##Install
1. The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require  veksa/carrot-yii2 "~1.0"
```

or add

```
"veksa/carrot-yii2": "~1.0"
```

to the require section of your `composer.json` file.

2. Add the component to `config/main.php`

    ```php
    'components' => [
        // ...
        'carrot' => [
            'class' => 'Veksa\Carrot\Yii2\Service',
            'appId' => 'your carrot application id',
            'token' => 'your carrot access token'
        ],
        // ...
    ],
    ```
## Usage

```php
$carrot = Yii::$app->get('carrot');
$leads = $carrot->getCountLeads();
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email admin@devblog.pro instead of using the issue tracker.

## Credits

- [Alex Khijnij](https://github.com/veksa)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
