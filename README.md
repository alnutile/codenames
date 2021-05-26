# CodeNames

This will be a simple site
it will product code names for you to use on projects.

It will have an api as well (see notes below)

## API

`GET /api/codenames`

Returns: 201

```json
{
    "codename": "foo-baz"
}
```

## Livewire

https://laravel-livewire.com/docs/2.x/testing

## Theme

https://getmdl.io/started/index.html#download

https://getmdl.io/customize/index.html

## XDebug

This got me far https://blog.levacic.net/2020/12/19/xdebug-3-docker-vs-code-setup-guide-on-ubuntu/
But I still need to be logged in and running `php artisan test path/to/test.php`
To make the Launch Xdebug actually work.

## TODO

-   Footer Area
-   Dark Theme
-   Card for API How to use

## CI

Run PHP Unit
Run lara Stan

## CD

Take the artifact and put it back into the repo WITHOUT forcing another build

Then have the server unpack that and put the .env stuff in there when done

For this one I can use the artifact action to pass the build after it passes to the step to
send it over using a deployer / migrate action or envoy
