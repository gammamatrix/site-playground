# Site: Playground

[![Playground CI Workflow](https://github.com/gammamatrix/site-playground/actions/workflows/ci.yml/badge.svg?branch=develop)](https://raw.githubusercontent.com/gammamatrix/site-playground/testing/develop/testdox.txt)
[![Test Coverage](https://raw.githubusercontent.com/gammamatrix/site-playground/testing/develop/coverage.svg)](tests)
[![PHPStan Level 9 src and tests](https://img.shields.io/badge/PHPStan-level%209-brightgreen)](.github/workflows/ci.yml#L120)
<!-- [![Playground on Packagist](https://img.shields.io/packagist/v/gammamatrix/playground)](https://packagist.org/packages/gammamatrix/playground) -->


Site: Playground Package for [Laravel v11](https://laravel.com/docs/11.x) applications.

This package may be installed with `composer create-project`

```sh
composer create-project gammamatrix/site-playground site-example
```

Installed Playground Packages

| Package | Description|
|---------|------------|
| [playground](https://github.com/gammamatrix/playground) | A base package for Laravel integration. |
| [playground-auth](https://github.com/gammamatrix/playground-auth) | Provide authentication for Laravel applications. Allows using Sanctum. |
| [playground-blade](https://github.com/gammamatrix/playground-blade) | Provides Blade UI handling. |
| [playground-cms](https://github.com/gammamatrix/playground-cms) | Provide the Cms models for a Playground Laravel application. |
| [playground-cms-resource](https://github.com/gammamatrix/playground-cms-resource) | Provide the CMS for a Laravel application. |
| [playground-http](https://github.com/gammamatrix/playground-http) | Provide http content and filter handling for controllers. |
| [playground-login-blade](https://github.com/gammamatrix/playground-login-blade) | Provides a Blade UI for authentication handling. |
| [playground-site-blade](https://github.com/gammamatrix/playground-site-blade) | Provides Blade UI handling for standard website. |
| [playground-test](https://github.com/gammamatrix/playground-test) | A test helper for Playground Laravel packages. |

## Testing

This application supports running integration tests with the installed Playground packages.
- Currently, over [1,000 Unit and Feature tests are run.](https://raw.githubusercontent.com/gammamatrix/site-playground/testing/develop/testdox.txt)

```xml
<testsuites>
  <testsuite name="Unit">
    <directory>tests/Unit</directory>
    <directory>vendor/gammamatrix/playground/tests/Unit</directory>
    <directory>vendor/gammamatrix/playground-auth/tests/Unit</directory>
    <directory>vendor/gammamatrix/playground-cms/tests/Unit</directory>
    <directory>vendor/gammamatrix/playground-cms-resource/tests/Unit</directory>
    <directory>vendor/gammamatrix/playground-blade/tests/Unit</directory>
    <directory>vendor/gammamatrix/playground-http/tests/Unit</directory>
    <directory>vendor/gammamatrix/playground-test/tests/Unit</directory>
  </testsuite>
  <testsuite name="Feature">
    <directory>tests/Feature</directory>
    <directory>vendor/gammamatrix/playground/tests/Feature</directory>
    <directory>vendor/gammamatrix/playground-auth/tests/Feature</directory>
    <directory>vendor/gammamatrix/playground-cms/tests/Feature</directory>
    <directory>vendor/gammamatrix/playground-cms-resource/tests/Feature</directory>
    <directory>vendor/gammamatrix/playground-blade/tests/Feature</directory>
    <directory>vendor/gammamatrix/playground-http/tests/Feature</directory>
    <directory>vendor/gammamatrix/playground-login-blade/tests/Feature</directory>
    <directory>vendor/gammamatrix/playground-site-blade/tests/Feature</directory>
    <directory>vendor/gammamatrix/playground-test/tests/Feature</directory>
  </testsuite>
</testsuites>

<source>
  <include>
    <directory>app</directory>
    <directory suffix=".php">vendor/gammamatrix/playground/src</directory>
    <directory suffix=".php">vendor/gammamatrix/playground-auth/src</directory>
    <directory suffix=".php">vendor/gammamatrix/playground-blade/src</directory>
    <directory suffix=".php">vendor/gammamatrix/playground-cms/src</directory>
    <directory suffix=".php">vendor/gammamatrix/playground-cms-resource/src</directory>
    <directory suffix=".php">vendor/gammamatrix/playground-http/src</directory>
    <directory suffix=".php">vendor/gammamatrix/playground-login-blade/src</directory>
    <directory suffix=".php">vendor/gammamatrix/playground-site-blade/src</directory>
    <directory suffix=".php">vendor/gammamatrix/playground-test/src</directory>
  </include>
</source>
```

```sh
composer test
```

Test examples:

```sh
phpunit --coverage-text --teamcity --filter 'PageRevision\\ModelTest::test_verify_model_relationships'
--testsuite Feature

phpunit --coverage-text --teamcity --filter 'Backlog\\ModelTest::test_verify_model_relationships' --testsuite Feature
```

```sh
phpunit --coverage-text --filter ModelTest
```

```sh
phpunit --coverage-text --filter RouteTest
```

```sh
phpunit --coverage-text --filter InstanceTest
```

```sh
phpunit --coverage-text --filter Policy
```

```sh
phpunit --coverage-text --filter Resource
```

```sh
phpunit --coverage-text  --filter Login
```

```sh
phpunit --coverage-text  --filter Cms
```

```sh
phpunit --coverage-text --filter Matrix
```


## PHPStan

Tests at level 9 on:
- `app/`
- `config/`
- `database/`
- `resources/views/`
- `tests/Feature/`
- `tests/Unit/`
- and on Playground packages.

```sh
composer analyse
```

## Coding Standards

```sh
composer format
```

## `artisan about`

Playground packages provides information in the `artisan about` command.


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Jeremy Postlethwaite](https://github.com/gammamatrix)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
