<!DOCTYPE html>
<html lang="en">
<head>
    {!! meta_init() !!}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="@get('keywords')">
    <meta name="description" content="@get('description')">
    <meta name="author" content="@get('author')">
    <title>@get('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{!! Theme::asset()->url('assets/css/bootstrap.css') !!}">
    <link rel="stylesheet" href="{!! Theme::asset()->url('assets/css/icon-fonts.css') !!}">
    <link rel="stylesheet" href="{!! Theme::asset()->url('assets/css/plugins.css') !!}">
    @styles()
    <link rel="stylesheet" href="{!! Theme::asset()->url('assets/css/colors.css') !!}">
    <link rel="stylesheet" href="{!! Theme::asset()->url('assets/css/responsive.css') !!}">

</head>
<body>
<div class="loader-container" id="pre-loader">
    <div class="loader">
        <div class="preloader"></div>
    </div>
</div>
<!-- main container of all the page elements -->
<div id="wrapper">
    @partial('header')

    @content()

    @partial('footer')
</div>

<script src="{!! Theme::asset()->url('assets/js/jquery.js') !!}"></script>
<script src="{!! Theme::asset()->url('assets/js/plugins.js') !!}"></script>
@scripts()
<script type="text/javascript" defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuYrTpyrSuM32JCjwsk7lHAYGE7UoKbK0"></script>

</body>
</html>
