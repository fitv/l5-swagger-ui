<?php

use Illuminate\Support\Facades\Route;
use L5SwaggerUI\Http\Controllers\SwaggerController;

Route::get(config('swagger.route'), [
    'middleware' => config('swagger.middleware'),
    'uses' => SwaggerController::class.'@index',
]);
