<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Santana Lombok Tour</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="author" content="Lombok Tour">
    <meta name="description" content="Lombok tour">
    <meta name="description" content="Rent Car Lombok">
    <meta name="description" content="Sapta Santana Lombok tour">
    <link rel="icon" href="/assets/images/logo.png" type="image/gif">

    <!-- Font Imports -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Source+Sans+Pro:wght@300;400;600;700&display=swap"
        rel="stylesheet">

    <!-- Core Style -->
    <link rel="stylesheet" href="/assets/style.css">

    <!-- Font Icons -->
    <link rel="stylesheet" href="/assets/css/font-icons.css">
    <link rel="stylesheet" href="/assets/onepage/css/et-line.css">

    <!-- Plugins/Components CSS -->
    <link rel="stylesheet" href="/assets/css/swiper.css">

    <!-- One Page Module Specific Stylesheet -->
    <link rel="stylesheet" href="/assets/onepage/onepage.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/custom.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @livewireStyles
</head>

<body class="stretched">
    {{ $slot }}
    @livewireScripts

    <script src="/assets/js/plugins.min.js"></script>
    <script src="/assets/js/functions.bundle.js"></script>
</body>

</html>
