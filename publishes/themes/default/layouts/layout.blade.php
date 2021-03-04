<!DOCTYPE html>
<html lang="en">
<head>
    {!! meta_init() !!}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="@get('keywords')">
    <meta name="description" content="@get('description')">
    <meta name="author" content="@get('author')">

    <title>@get('title')</title>


    <!-- build:css -->
    <link rel="stylesheet" href="{!! Theme::asset()->url('assets/css/main.css') !!}">
    <!-- endbuild -->
    @styles()
</head>

<body>

@partial('header')

<div class="container">

    @content()

</div>

@partial('footer')

    @scripts()

</body>

</html>
