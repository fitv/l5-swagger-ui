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
    'docs_path' => resource_path('docs'),

    /*
     * Filename of the json/yaml documentation.
     */
    'doc_filename' => 'api.yml',

    /*
     * Path of the asset files.
     */
    'assets_path' => '/vendor/l5-swagger-ui',

];
