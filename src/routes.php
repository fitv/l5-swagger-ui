<?php

use Illuminate\Support\Facades\Route;
use L5SwaggerUI\Http\Controllers\SwaggerController;

Route::get(config('swagger-ui.route'), [
    'middleware' => config('swagger-ui.middleware'),
    'uses' => SwaggerController::class.'@index',
]);
