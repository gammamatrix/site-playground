# Site: Playground

[![Playground CI Workflow](https://github.com/gammamatrix/site-playground/actions/workflows/ci.yml/badge.svg?branch=develop)](https://raw.githubusercontent.com/gammamatrix/site-playground/testing/develop/testdox.txt)
[![Test Coverage](https://raw.githubusercontent.com/gammamatrix/site-playground/testing/develop/coverage.svg)](tests)
[![PHPStan Level 9 src and tests](https://img.shields.io/badge/PHPStan-level%209-brightgreen)](.github/workflows/ci.yml#L120)
<!-- [![Playground on Packagist](https://img.shields.io/packagist/v/gammamatrix/playground)](https://packagist.org/packages/gammamatrix/playground) -->

Site: Playground Package for [Laravel v11](https://laravel.com/docs/11.x) applications.

Read more on using [Site: Playground, at the Read the Docs: Playground Documentation.](https://gammamatrix-playground.readthedocs.io/en/develop/applications/site-playground.html)



**NOTE:** Playground uses `declare(strict_types=1);`

**NOTE:** This package is meant to be forked, cloned or used `composer create-project`

Install the package with `composer create-project`

```sh
composer create-project gammamatrix/site-playground site-example --stability dev
```
- NOTE: A stable release has not been deployed yet.

Installed Playground Packages

| Package | Description|
|---------|------------|
| [playground-admin-resource](https://github.com/gammamatrix/playground-admin-resource) | Provide the Admin UI to manage users and settings. |
| [playground-cms-resource](https://github.com/gammamatrix/playground-cms-resource) | Provide the CMS UI for the Playground Content Management System. |
| [playground-login-blade](https://github.com/gammamatrix/playground-login-blade) | Provides endpoints a Blade UI for authentication, authorization, verification and credential management. |
| [playground-site-blade](https://github.com/gammamatrix/playground-site-blade) | Provides a standard website with an index, dashboard, sitemap, theme handling and CMS integration. |

Installed Support Playground Packages

| Package | Description|
|---------|------------|
| [playground](https://github.com/gammamatrix/playground) | A base package for Laravel integration. |
| [playground-admin](https://github.com/gammamatrix/playground-admin) | Provide the Settings models for `playground-admin-resource`. |
| [playground-auth](https://github.com/gammamatrix/playground-auth) | Provide authentication and authorization handling for Laravel applications. Allows using Sanctum. |
| [playground-blade](https://github.com/gammamatrix/playground-blade) | Provides Blade UI handling for login, resource and site packages. |
| [playground-cms](https://github.com/gammamatrix/playground-cms) | Provide the CMS models for `playground-cms-resource`. |
| [playground-http](https://github.com/gammamatrix/playground-http) | Provide HTTP content and filter handling for controllers and requests. |
| [playground-test](https://github.com/gammamatrix/playground-test) | A test helper for Playground packages. |

## Testing

This application supports running integration tests with the installed Playground packages.
- Currently, over [800 Unit and Feature tests are run.](https://raw.githubusercontent.com/gammamatrix/site-playground/testing/develop/testdox.txt)

```xml
<testsuites>
  <testsuite name="Unit">
    <directory>tests/Unit</directory>
    <directory>vendor/gammamatrix/playground/tests/Unit</directory>
    <directory>vendor/gammamatrix/playground-auth/tests/Unit</directory>
    <directory>vendor/gammamatrix/playground-blade/tests/Unit</directory>
    <directory>vendor/gammamatrix/playground-admin/tests/Unit</directory>
    <directory>vendor/gammamatrix/playground-admin-resource/tests/Unit</directory>
    <directory>vendor/gammamatrix/playground-cms/tests/Unit</directory>
    <directory>vendor/gammamatrix/playground-cms-resource/tests/Unit</directory>
    <directory>vendor/gammamatrix/playground-http/tests/Unit</directory>
    <directory>vendor/gammamatrix/playground-test/tests/Unit</directory>
  </testsuite>
  <testsuite name="Feature">
    <directory>tests/Feature</directory>
    <directory>vendor/gammamatrix/playground/tests/Feature</directory>
    <directory>vendor/gammamatrix/playground-auth/tests/Feature</directory>
    <directory>vendor/gammamatrix/playground-blade/tests/Feature</directory>
    <directory>vendor/gammamatrix/playground-admin/tests/Feature</directory>
    <directory>vendor/gammamatrix/playground-admin-resource/tests/Feature</directory>
    <directory>vendor/gammamatrix/playground-cms/tests/Feature</directory>
    <directory>vendor/gammamatrix/playground-cms-resource/tests/Feature</directory>
    <directory>vendor/gammamatrix/playground-login-blade/tests/Feature</directory>
    <directory>vendor/gammamatrix/playground-http/tests/Feature</directory>
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
    <directory suffix=".php">vendor/gammamatrix/playground-admin/src</directory>
    <directory suffix=".php">vendor/gammamatrix/playground-admin-resource/src</directory>
    <directory suffix=".php">vendor/gammamatrix/playground-cms/src</directory>
    <directory suffix=".php">vendor/gammamatrix/playground-cms-resource/src</directory>
    <directory suffix=".php">vendor/gammamatrix/playground-login-blade/src</directory>
    <directory suffix=".php">vendor/gammamatrix/playground-site-blade/src</directory>
    <directory suffix=".php">vendor/gammamatrix/playground-http/src</directory>
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

### Code coverage

NOTE: If you use this repository for a production site, make sure to hide the code coverage linked in [public/tests.](public/tests)

The phpunit files for Playground support integration and package testing.

<img src="resources/docs/site-playground-tests-report.png" alt="screenshot of Test reports for Site Playground.">

Code Coverage for Site Playground

<img src="resources/docs/site-playground-tests-report-cc.png" alt="screenshot of Code Coverage for Site Playground.">

Code Coverage for Site Playground: GammaMatrix Packages:

<img src="resources/docs/site-playground-tests-report-cc-gammamatrix.png" alt="screenshot of Code Coverage for Site Playground: GammaMatrix Packages.">

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

## Themes

playground-blade provides Bootstrap 5 themes, using CSS Variables.

<p align="center">
<img width="45%" src="resources/docs/edit-page-theme-dark.png" alt="screenshot of Editing a Page with the dark theme.">
<img width="45%" src="resources/docs/edit-page-theme-wheat.png" alt="screenshot of Editing a Page with the wheat theme.">
</p>

<img src="resources/docs/sitemap-theme-wheat.png" alt="screenshot of the sitemap with the wheat theme.">


## `artisan about`

Playground provides information in the `artisan about` command.

<img src="resources/docs/artisan-about-site-playground.png" alt="screenshot of artisan about command with Site Playground.">

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Jeremy Postlethwaite](https://github.com/gammamatrix)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
