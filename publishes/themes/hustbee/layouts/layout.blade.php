<!DOCTYPE html>
<html lang="en">
<head>
    {!! meta_init() !!}

    <meta name="keywords" content="@get('keywords')">
    <meta name="description" content="@get('description')">
    <meta name="author" content="@get('author')">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@get('title') | {{ config('app.name') }}</title>
    <link rel="stylesheet" type="text/css" href="{!! Theme::asset()->url('assets/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! Theme::asset()->url('assets/css/fontawesome-all.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! Theme::asset()->url('assets/css/slick.css') !!}">
    @styles()
    <link rel="stylesheet" type="text/css" href="{!! Theme::asset()->url('assets/css/custom.css') !!}">


</head>

    <body>
        @partial('header')

        @content()

        @partial('footer')

        <script src="{!! Theme::asset()->url('assets/js/jquery.min.js') !!}"></script>
        <script src="{!! Theme::asset()->url('assets/js/bootstrap.min.js') !!}"></script>
        <script src="{!! Theme::asset()->url('assets/js/slick.min.js') !!}"></script>
        @scripts()


    </body>
</html>
