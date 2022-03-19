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
     * Path of the asset files.
     */
    'assets_path' => '/vendor/l5-swagger-ui',

    /*
     * Filepath of the json/yaml documentation file.
     */
    'filepath' => '/vendor/l5-swagger-ui/docs/api.yml',

];
