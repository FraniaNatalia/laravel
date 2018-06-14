<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Het CreativeOBD interactieve bureau is een team van creatieve persoonlijkheden. Websites en online winkels, speciale platforms, branding, etc. Hierin zijn we de beste!"/>
        <meta name="keywords" content="creativeobd, interactieve bureau, website laten maken, online winkel laten maken, branding roermond, branding melick, website roermond, website melick, online winkel roermond, online winkel melick, website laten maken goedkoop, Olaf Donajgrodzki, hoe maak ik zelf een website"/>
        <meta name="author" content="CreativeOBD interactieve bureau" />
        <meta name="copyright" content=" CreativeOBD interactieve bureau" />
        <meta name="robots" content="index follow"/>
        <meta name="robots" content="noindex" />
        <meta http-equiv="expires" content="43200"/>
        <META NAME="geo.placename" CONTENT="Melick">
        <META NAME="geo.region" CONTENT="Limburg">
        <title>@yield('pageTitle')creativeOBD Interactief bureau</title>

        <!-- Style -->
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        @include('inc.header')
        @yield('content')
        @include('inc.footer')
    </body>
</html>