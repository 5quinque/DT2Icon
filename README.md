# DateTime to Icon Extension

This is a Twig extension for Symfony Framework where you can easily convert a datetime/timestamp to a clock icon.

Example, if `post.created` is "17/10/19 07:23:29"

```twig
{{ post.created|dt2clock }}
```

Will output: 🕢

# Installation for Symfony

```bash
composer require linnit/dt2icon
```

or update your composer.json

```json
"require": {
    "linnit/dt2icon": "1.*"
}
```

## Register an Extension as a Service

Add the extension to Symfony

```yaml
# app/config/config.yml
services:
    linnit.twig.dt2icon:
        class: Linnit\Twig\Extension\DT2ClockExtension
        tags:
            - { name: twig.extension }
```


# Usage

```twig
{{ post.created|dt2clock }}
```
# Testing

To test, just run phpunit

    ./vendor/phpunit/phpunit/phpunit
