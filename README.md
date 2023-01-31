# Laravel Swagger UI

Swagger UI for Laravel (render YAML file).

## Install

```shell
composer require fitv/l5-swagger-ui
```

```shell
php artisan vendor:publish --provider "L5SwaggerUI\ServiceProvider"
```

## Config

```php
<?php

return [

    /*
     * Title of the documentation page.
     */
    'title' => 'Laravel Swagger UI',

    /*
     * Layout of the Swagger UI.
     */
    'layout' => 'StandaloneLayout',

    /*
     * Route of the documentation page.
     */
    'route' => '/api-docs',

    /*
     * Middleware allows to prevent unexpected access to the documentation page.
     */
    'middleware' => [],

    /*
     * Path of the documentation files.
     */
    'docs_path' => storage_path('docs'),

    /*
     * Filename of the json/yaml documentation.
     */
    'doc_filename' => 'api.yml',

    /*
     * Path of the asset files.
     */
    'assets_path' => '/vendor/l5-swagger-ui',

];
```

## Usage

Open the API document URL in your browser

```
http://app.dev/api-docs
```

To improve access speed, you can merge multiple YAML files into one.

```shell
npm install swagger-merger -g

swagger-merger -i resources/docs/api.yml -o swagger.yml
```

Then change the `doc_filename` in the config file to `swagger.yml`.
