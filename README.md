# enrollment_mobile

[![Latest Stable Version](https://poser.pugx.org/manelgavalda/enrollment_mobile/v/stable)](https://packagist.org/packages/manelgavalda/enrollment_mobile)[![Software License][ico-license]](LICENSE.md)
[![Build Status](https://travis-ci.org/manelgavalda/enrollment_mobile.svg?branch=master)](https://travis-ci.org/manelgavalda/enrollment_mobile)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/manelgavalda/enrollment_mobile/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/manelgavalda/enrollment_mobile/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/manelgavalda/enrollment_mobile/badges/build.png?b=master)](https://scrutinizer-ci.com/g/manelgavalda/enrollment_mobile/build-status/master)
[![StyleCI](https://styleci.io/repos/73415404/shield?branch=master)](https://styleci.io/repos/73415404)
[![Total Downloads](https://poser.pugx.org/manelgavalda/enrollment_mobile/downloads)](https://packagist.org/packages/manelgavalda/enrollment_mobile)

Projecte mòdul enrollment_mobile

## Install

Via Composer:

``` bash
$ composer require scool/enrollment_mobile
```

Add to file **config/app.php** the PaymentsServiceProvider:
```
/*
* Package Service Providers...
*/
Scool\EnrollmentMobile\Providers\PaymentsServiceProvider::class,
```

And publish files with:

```bash
php artisan vendor:publish --tag=scool_enrollment_mobile
```

## Usage

``` php
public function run()
{
    $this->call(EnrollmentMobileSeeder::class);
}
```

## Requeriments

This package use:

* Composer
* Laravel
* acacha/names
* acacha/l5-repository
* scool/foundation
* acacha/stateful-eloquent
* Admin-lte Template



## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

Execute:
``` bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email manelgavalda@iesebre.com instead of using the issue tracker.

## Credits

- [Manel Gavaldà][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/scool/enrollment_mobile.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/scool/enrollment_mobile/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/scool/enrollment_mobile.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/scool/enrollment_mobile.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/scool/enrollment_mobile.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/scool/enrollment_mobile
[link-travis]: https://travis-ci.org/scool/enrollment_mobile
[link-scrutinizer]: https://scrutinizer-ci.com/g/scool/enrollment_mobile/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/scool/enrollment_mobile
[link-downloads]: https://packagist.org/packages/scool/enrollment_mobile
[link-author]: https://github.com/manelgavalda
[link-contributors]: ../../contributors
