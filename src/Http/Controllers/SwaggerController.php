<?php

namespace L5SwaggerUI\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Str;

class SwaggerController extends BaseController
{
    /**
     * Display Swagger API page.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        return view('l5-swagger-ui::index', [
            'title' => config('swagger-ui.title'),
            'layout' => config('swagger-ui.layout'),
            'assets_path' => config('swagger-ui.assets_path'),
            'filename' => config('swagger-ui.route').'/'.config('swagger-ui.doc_filename'),
        ]);
    }

    /**
     * Get document asset file.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  string $asset
     * @return \Illuminate\Http\Response
     */
    public function docs(Request $request, $asset)
    {
        $path = realpath(config('swagger-ui.docs_path').'/'.$asset);

        if (! ($path && Str::startsWith($path, config('swagger-ui.docs_path')))) {
            abort(404);
        }

        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $extMap = [
            'yml' => 'text/x-yaml',
            'yaml' => 'text/x-yaml',
            'json' => 'application/json',
        ];

        if (! isset($extMap[$ext])) {
            abort(404);
        }

        $ifNoneMatch = $request->header('If-None-Match');

        if ($ifNoneMatch && $ifNoneMatch === md5_file($path)) {
            return new Response('', 304);
        }

        return new Response(
            file_get_contents($path),
            200,
            [
                'ETag' => md5_file($path),
                'Content-Type' => $extMap[$ext],
            ]
        );
    }
}
