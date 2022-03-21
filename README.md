# Laravel Swagger UI

Swagger UI for Laravel (render YAML file).

## Install

```shell
composer require fitv/l5-swagger-ui
```

```shell
php artisan vendor:publish --provider "L5SwaggerUI\ServiceProvider"
```

## Configuration

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
