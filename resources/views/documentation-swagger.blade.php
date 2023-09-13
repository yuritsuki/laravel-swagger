<!-- HTML for static distribution bundle build -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Swagger UI</title>
    <link rel="stylesheet" type="text/css" href="{{ config('auto-doc.global_prefix') }}/auto-doc/swagger-ui.css" >
    <link rel="icon" type="image/png" href="{{ config('auto-doc.global_prefix') }}/auto-doc/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="{{ config('auto-doc.global_prefix') }}/auto-doc/favicon-16x16.png" sizes="16x16" />
    <style>
        html
        {
            box-sizing: border-box;
            overflow: -moz-scrollbars-vertical;
            overflow-y: scroll;
        }

        *,
        *:before,
        *:after
        {
            box-sizing: inherit;
        }

        body
        {
            margin:0;
            background: #fafafa;
        }
    </style>
</head>

<body>
<div id="swagger-ui"></div>

<script src="{{ config('auto-doc.global_prefix') }}/auto-doc/swagger-ui-bundle.js" charset="UTF-8"> </script>
<script src="{{ config('auto-doc.global_prefix') }}/auto-doc/swagger-ui-standalone-preset.js" charset="UTF-8"> </script>
<script>
    const prefix = '{{ config('auto-doc.global_prefix') }}';

    window.onload = () => {
        const ui = SwaggerUIBundle({
            url: `${prefix}/auto-doc/documentation`,
            dom_id: '#swagger-ui',
            deepLinking: true,
            defaultModelRendering: 'model',
            presets: [
                SwaggerUIBundle.presets.apis,
                SwaggerUIStandalonePreset
            ],
            plugins: [
                SwaggerUIBundle.plugins.DownloadUrl
            ],
            layout: 'StandaloneLayout'
        })

        window.ui = ui
    }
</script>
</body>
</html>
