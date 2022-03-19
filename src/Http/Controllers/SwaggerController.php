<?php

namespace L5SwaggerUI\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class SwaggerController extends BaseController
{
    /**
     * Display Swagger API page.
     *
     * @return void
     */
    public function index()
    {
        return view('l5-swagger-ui::index', [
            'title' => config('swagger.title'),
            'layout' => config('swagger.layout'),
            'assets_path' => config('swagger.assets_path'),
            'filepath' => config('swagger.filepath'),
        ]);
    }
}
