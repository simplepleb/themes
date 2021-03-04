<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hustbee</title>
    <link rel="stylesheet" type="text/css" href="{!! Theme::asset()->url('assets/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! Theme::asset()->url('assets/css/fontawesome-all.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! Theme::asset()->url('assets/css/slick.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! Theme::asset()->url('assets/css/style.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! Theme::asset()->url('assets/css/custom.css') !!}">
</head>
<body class="fullpage">
<div class="container-fluid">
    <div class="container">
        @content()
    </div>
</div>

<script src="{!! Theme::asset()->url('assets/js/jquery.min.js') !!}"></script>
<script src="{!! Theme::asset()->url('assets/js/bootstrap.min.js') !!}"></script>
<script src="{!! Theme::asset()->url('assets/js/slick.min.js') !!}"></script>
<script src="{!! Theme::asset()->url('assets/js/main.js') !!}"></script>
</body>
</html>
