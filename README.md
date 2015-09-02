# Doctrine.DateFunctionExtension

[![Build Status](https://travis-ci.org/77web/Doctrine.DateFunctionExtension.svg)](https://travis-ci.org/77web/Doctrine.DateFunctionExtension)

## install

via composer

```bash
$ composer require nanaweb/doctrine-date-function-extension:dev-master@dev
```

## usage

>> NOTE: If your app is based on SQLite, please change namespaces below from "MySql" to "SQLite3".

### Doctrine

```php
$config = new \Doctrine\ORM\Configuration();
$config->addCustomDatetimeFunction('month', '\Nanaweb\Doctrine\DateFunctionExtension\MySql\Month');
$config->addCustomDatetimeFunction('weekday', '\Nanaweb\Doctrine\DateFunctionExtension\MySql\Weekday');
$config->addCustomDatetimeFunction('year', '\Nanaweb\Doctrine\DateFunctionExtension\MySql\Year');

$em = EntityManager::create($dbParams, $config);
```

### Symfony2

Configure functions in ``config.yml``.

```yaml
    orm:
        # ...
        entity_managers:
            default:
                # ...
                dql:
                    datetime_functions:
                        month: \Nanaweb\Doctrine\DateFunctionExtension\MySql\Month
                        weekday: \Nanaweb\Doctrine\DateFunctionExtension\MySql\Weekday
                        year: \Nanaweb\Doctrine\DateFunctionExtension\MySql\Year

```
