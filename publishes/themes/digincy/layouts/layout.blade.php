<!DOCTYPE html>
<html lang="en">

    <head>
        {!! meta_init() !!}
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="@get('keywords')">
        <meta name="description" content="@get('description')">
        <meta name="author" content="@get('author')">
        <title>@get('title')</title>
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{!! Theme::asset()->url('assets/img/favicon.ico') !!}">

        <!-- CSS
        ============================================ -->
        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Orbitron:400,500,600,700,800,900%7CRoboto:300,300i,400,400i,500,500i,700,900&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{!! Theme::asset()->url('assets/css/vendor/bootstrap.min.css') !!}">
        <!-- Font-awesome CSS -->
        <link rel="stylesheet" href="{!! Theme::asset()->url('assets/css/vendor/font-awesome.min.css') !!}">
        <!-- Slick slider css -->
        <link rel="stylesheet" href="{!! Theme::asset()->url('assets/css/plugins/slick.min.css') !!}">
        <!-- Odometer css -->
        <link rel="stylesheet" href="{!! Theme::asset()->url('assets/css/plugins/odometer.min.css') !!}">
        <!-- animate css -->
        <link rel="stylesheet" href="{!! Theme::asset()->url('assets/css/plugins/animate.css') !!}">

        @styles()

    </head>

    <body>
        @partial('header')
        <main>
            @content()
        </main>

        @partial('footer')

        <!-- Scroll to top start -->
        <div class="scroll-top not-visible">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- Scroll to Top End -->

        <!-- All JS Plugin Include Here -->

        <!-- Modernizer JS -->
        <script src="{!! Theme::asset()->url('assets/js/vendor/modernizr-3.6.0.min.js') !!}"></script>
        <!-- jQuery JS -->
        <script src="{!! Theme::asset()->url('assets/js/vendor/jquery-3.3.1.min.js') !!}"></script>
        <!-- Popper JS -->
        <script src="{!! Theme::asset()->url('assets/js/vendor/popper.min.js') !!}"></script>
        <!-- Bootstrap JS -->
        <script src="{!! Theme::asset()->url('assets/js/vendor/bootstrap.min.js') !!}"></script>
        <!-- wow js -->
        <script src="{!! Theme::asset()->url('assets/js/plugins/wow.min.js') !!}"></script>
        <!-- slick Slider JS -->
        <script src="{!! Theme::asset()->url('assets/js/plugins/slick.min.js') !!}"></script>
        <!-- odometer js -->
        <script src="{!! Theme::asset()->url('assets/js/plugins/odometer.min.js') !!}"></script>
        <!-- appear js -->
        <script src="{!! Theme::asset()->url('assets/js/plugins/appear.min.js') !!}"></script>
        <!-- google map api -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2D8wrWMY3XZnuHO6C31uq90JiuaFzGws"></script>
        <!-- google map active js -->
        <script src="{!! Theme::asset()->url('assets/js/plugins/google-map.js') !!}"></script>

        @scripts()
    </body>

</html>
