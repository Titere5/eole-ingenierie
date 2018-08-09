<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    {{ get_title() }}
    {{ stylesheet_link('css/bootstrap.min.css') }}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Pierre-Louis">
    {{ elements.getMenu() }}
</head>
<body>
    <div class="container">
        {{ content() }}

    </div>
    {{ javascript_include('js/jquery.min.js') }}
    {{ javascript_include('js/bootstrap.min.js') }}
    {{ javascript_include('js/utils.js') }}
    {{ assets.outputCss() }}
</body>

</html>
