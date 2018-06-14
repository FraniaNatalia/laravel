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

        <link rel="stylesheet" href="/css/admincss.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>

        </style>
        <!-- scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="/js/vendor.js"></script>
        <script src="/js/bundle.js"></script>
        <script src="http://cdn.ckeditor.com/4.9.2/full/ckeditor.js"></script>
        <script>
            $(document).ready(function(){
                $('.nav-left li a').click(function(){
                    var page = $(this).text();
                    $('#row').load('/admin/panel/' + page + 'edit');
                });
            });
        </script>
    </head>
    <body class="app" style="background-color: #f9fafb;">
        <div>
            <div class="sidebar">
                <div class="sidebar-inner">
                    <div class="sidebar-logo">
                        <div class="peers ai-c fxw-nw">
                            <div class="peer peer-greed">
                                <a class="sidebar-link td-n" href="">
                                    <div class="peers ai-c fxw-nw">
                                        <div class="peer">
                                            <div class="logo">

                                            </div>
                                        </div>
                                        <div class="peer peer-greed">
                                            <h5 class="lh-1 mB-0 logo-text">CREATIVEOBD</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="peer">
                                <div class="mobile-toggle sidebar-toggle">
                                    <a href="" class="td-n">
                                        <i class="ti-arrow-circle-left"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="sidebar-menu scrollable pos-r ps">
                        <li class="nav-item mT-30 active">
                            <a class="sidebar-link" href="" default="">
                                <span class="icon-holder">
                                    <i class="c-blue-500 ti-home"></i>
                                </span>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item mT-30 active">
                            <a class="sidebar-link" href="" default="">
                                <span class="icon-holder">
                                    <i class="c-blue-500 ti-face-smile"></i>
                                </span>
                                <span class="title">Klanten</span>
                            </a>
                        </li>
                    </ul>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;">

                            </div>
                        </div>
                        <div class="ps__rail-y" style="top: 0px; right: 0px;">
                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;">

                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="page-container">
            <div class="header navbar">
                <div class="header-container">
                    <ul class="nav-left">
                        <li><a id="sidebar-toggle overbedrijf" class="sidebar-toggle">Overbedrijf</a></li>
                        <li><a id="sidebar-toggle" class="sidebar-toggle">Aanbod</a></li>
                        <li><a id="sidebar-toggle" class="sidebar-toggle">Klanten</a></li>
                        <li><a id="sidebar-toggle" class="sidebar-toggle">Portefeuille</a></li>
                        <li><a id="sidebar-toggle" class="sidebar-toggle">Nieuws</a></li>
                        <li><a id="sidebar-toggle" class="sidebar-toggle">Blog</a></li>
                        <li><a id="sidebar-toggle" class="sidebar-toggle">Contact</a></li>
                    </ul>
                    <ul class="nav-right">
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">

                                <div class="peer">
                                    <span class="fsz-sm c-grey-900">Olaf Donajgrodzki</span>
                                </div>
                            </a>
                            <ul class="dropdown-menu fsz-sm">
                                <li>
                                    <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                        <i class="ti-settings mR-10"></i>
                                        <span>Setting</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                        <i class="ti-user mR-10"></i>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                        <i class="ti-email mR-10"></i>
                                        <span>Messages</span>
                                    </a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                        <i class="ti-power-off mR-10"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
                <div id="row" class="row" style="position: relative; top: 65px; padding: 15px; left: 4%;">
                    @foreach($petani as $key => $data)
                    <div class="col-lg-11 col-md-11" style="background-color: #e8eef2;padding: 10px; ; margin-top: 25px;">
                        <span style="margin-left: 1.5%;margin-right: 5%;">{{$data->Id}}</span>
                        <span style="margin-right: 24%;">{{$data->Wie}}</span>
                        <span style="margin-right: 19.5%;">{{$data->Informatie}}</span>
                        <span style="margin-right: 17%;">{{$data->Priority}}</span>
                        <span class="icon-holder" style="margin-right: 2%;"><i class="c-blue-500 ti-eye"></i></span>
                        <span class="icon-holder" style="margin-right: 2.6%;"><i class="c-blue-500 ti-trash"></i></span>
                        <span class="icon-holder"><i class="c-blue-500 ti-check"></i></span>
                    </div>
                    @endforeach
                </div>
        </div>
    </body>
</html>