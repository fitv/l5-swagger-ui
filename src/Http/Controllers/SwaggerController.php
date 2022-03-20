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
            'title' => config('swagger-ui.title'),
            'layout' => config('swagger-ui.layout'),
            'assets_path' => config('swagger-ui.assets_path'),
            'filepath' => config('swagger-ui.filepath'),
        ]);
    }
}
