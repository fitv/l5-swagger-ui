<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <link rel="stylesheet" type="text/css" href="{{ $assets_path }}/swagger-ui.css">
    <link rel="icon" type="image/png" href="{{ $assets_path }}/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ $assets_path }}/favicon-16x16.png" sizes="16x16">
    <style>
      html {
        box-sizing: border-box;
        overflow: -moz-scrollbars-vertical;
        overflow-y: scroll;
      }

      *, *:before, *:after {
        box-sizing: inherit;
      }

      body {
        margin:0;
        background: #fafafa;
      }

      form.download-url-wrapper,
      .information-container .info a {
        display: none !important;
      }
    </style>
  </head>

  <body>
    <div id="swagger-ui"></div>

    <script src="{{ $assets_path }}/swagger-ui-bundle.js"></script>
    <script src="{{ $assets_path }}/swagger-ui-standalone-preset.js"></script>
    <script>
      window.onload = function() {
        const ui = SwaggerUIBundle({
          url: "{{ $filename }}",
          dom_id: '#swagger-ui',
          deepLinking: true,
          validatorUrl: null,
          defaultModelsExpandDepth: -1,
          presets: [
            SwaggerUIBundle.presets.apis,
            SwaggerUIStandalonePreset
          ],
          plugins: [
            SwaggerUIBundle.plugins.DownloadUrl
          ],
          layout: "{{ $layout }}",
        })

        window.ui = ui
      }
    </script>
  </body>
</html>
