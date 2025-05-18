<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ</title>
    <link rel="stylesheet" href="./assets/library/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/css/css-reset.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="./assets/css/root.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="./assets/css/header.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="./assets/css/component.css?v=<?php echo time(); ?>" />
    @stack('styles')
</head>

<body>
    <div class="overlay"></div>

    <div class="header-fixed">
        <header class="medpro-header container">
            @include('components.header')
        </header>
    </div>

    @include('components.menu-mobile')

    <main class="body-pt">
        @yield('contents')
    </main>

    <footer></footer>
</body>
<script src="./assets/library/swiper-bundle.min.js"></script>


{{-- Components --}}
{{-- btn --}}
<script src="./assets/js/btn/btn-navigation.js"></script>

{{-- carousels --}}
<script src="./assets/js/carousels/carousel1.js"></script>
<script src="./assets/js/carousels/carousel2.js"></script>
<script src="./assets/js/carousels/carousel3.js"></script>
<script src="./assets/js/carousels/carousel4.js"></script>
<script src="./assets/js/carousels/carousel5.js"></script>
<script src="./assets/js/carousels/carousel6.js"></script>
<script src="./assets/js/carousels/carousel7.js"></script>
<script src="./assets/js/carousels/carousel8.js"></script>

@stack('scripts')

</html>
