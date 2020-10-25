<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('titulo')</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Meta tag Keywords -->
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom-Files -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.css') }}">
    <!-- Font-Awesome-Icons-CSS -->
    <link href="{{ asset('css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- pop-up-box -->
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--css de materialize-->
    <!-- Compiled and minified CSS 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">-->

    <!--Css cerrar materialize-->
    <!-- menu style -->
    <!-- //Custom-Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- web fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link
        href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
        rel="stylesheet">
    <link
        href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <!-- //web fonts -->

</head>

<body>
    <!-- top-header -->
    <div class="agile-main-top">
        <div class="container-fluid">
            <div class="row main-top-w3l py-2">
                <div class="col-lg-3 header-most-top">
                    <p class="text-white text-lg-left text-center">EmprendeVende
                        <i class="fas fa-shopping-cart ml-1"></i>
                    </p>
                </div>
                <div class="col-lg-9 header-right mt-lg-0 mt-2">
                    <!-- header lists -->
                    <ul>
                        <li class="text-center border-right text-white">
                            <a class="play-icon popup-with-zoom-anim text-white" href="#small-dialog1">
                                <i class="fas fa-map-marker mr-2"></i>Selecciona tu localidad</a>
                        </li>
                        <li class="text-center border-right text-white">
                            <a href="#" data-toggle="modal" data-target="#ModalCategoria" class="text-white">
                                <i class="fas fa-truck mr-2"></i>Compra por categoría</a>

                        </li>
                        <li class="text-center border-right text-white">
                            <a href="#" data-toggle="modal" data-target="#ModalCompraEnTienda" class="text-white">
                                <i class="fas fa-truck mr-2"></i>Compra por tienda</a>
                        </li>
                        <li class="text-center border-right text-white">
                            <a href="{{ route('registrovendedor') }}" class="text-white">
                                <i class="fas fa-truck mr-2"></i>Abre tu tienda</a>
                        </li>


                        @if (Auth::check())

                            @can('administrador', 'vendedor')
                                <li class="text-center border-right text-white">
                                    <a href="{{ route('administrable') }}" class="text-white">
                                        <i class="fas fa-truck mr-2"></i>Administrar</a>

                                </li>
                            @endcan

                            <li class="text-white nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                                    <FONT COLOR="white">{{ Auth::user()->name }} </FONT>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>

                            @else
                            <li class="text-center border-right text-white">
                                <a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
                                    <i class="fas fa-sign-in-alt mr-2"></i>
                                    Iniciar Sesión
                                </a>
                        @endif

                        </li>
                        <!--<li class="text-center text-white">
       <a href="#" data-toggle="modal" data-target="#exampleModal2" class="text-white">
        <i class="fas fa-sign-out-alt mr-2"></i>Register </a>
      </li>!-->
                    </ul>
                    <!-- //header lists -->
                </div>
            </div>
        </div>
    </div>

    <!-- Button trigger modal(select-location) -->
    @include('modales.mlocalidad')
    <!-- //shop locator (popup) -->

    <!-- modals -->
    <!-- log in -->
    @include('modales.mlogin')
    <!-- register -->
    @include('modales.mregistro')
    <!--Modal de la lista de categorias-->
    @include('modales.mlistadocategorias')
    <!--Cierre de modal de lista de categorias-->
    <!--Modal de compra en tienda-->
    @include('modales.mcompraentienda')
    <!--Cierrre de Modal de compra en tienda-->
    <!-- //modal -->
    <!-- //top-header -->

    <!-- header-bottom-->
    <div class="header-bot">
        <div class="container">
            <div class="row header-bot_inner_wthreeinfo_header_mid">
                <!-- logo -->
                <div class="col-md-3 logo_agile">
                    <h1 class="text-center">
                        <a href="index.html" class="font-weight-bold font-italic">
                            <img src="images/logo2.png" alt=" " class="img-fluid ">Emprende
                        </a>
                    </h1>
                </div>
                <!-- //logo -->
                <!-- header-bot -->
                <div class="col-md-9 header mt-4 mb-md-0 mb-4">
                    <div class="row">
                        <!-- search -->
                        <div class="col-10 agileits_search">
                            <form class="form-inline" action="#" method="post">
                                <input class="form-control mr-sm-2" type="search"
                                    placeholder="Buscar tienda, marca, etc" aria-label="Search" required>
                                <button class="btn my-2 my-sm-0 bg-primary" type="submit">Buscar</button>
                            </form>
                        </div>
                        <!-- //search -->
                        <!-- cart details -->
                        <div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
                            <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                                <form action="#" method="post" class="last">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="display" value="1">
                                    <button class="btn w3view-cart" type="submit" name="submit" value="">
                                        <i class="fas fa-cart-arrow-down "></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!-- //cart details -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop locator (popup) -->
    <!-- //header-bottom -->
    <!-- navigation -->
    <div class="navbar-inner  bg-primary">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!--<div class="agileits-navi_search">
     <form action="#" method="post">
      <select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
       <option value="">Todas las categorías</option>
       <option value="Televisions">Televisions</option>
       <option value="Headphones">Headphones</option>
       <option value="Computers">Computers</option>
       <option value="Appliances">Appliances</option>
       <option value="Mobiles">Mobiles</option>
       <option value="Fruits &amp; Vegetables">Tv &amp; Video</option>
       <option value="iPad & Tablets">iPad & Tablets</option>
       <option value="Cameras & Camcorders">Cameras & Camcorders</option>
       <option value="Home Audio & Theater">Home Audio & Theater</option>
      </select>
     </form>
    </div> -->
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Todas las categorías</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">

                        <option class="dropdown-item" value="Televisions">Televisions</option>
                        <option class="dropdown-item" value="Headphones">Headphones</option>
                        <option class="dropdown-item" value="Computers">Computers</option>
                        <option class="dropdown-item" value="Appliances">Appliances</option>
                        <option class="dropdown-item" value="Mobiles">Mobiles</option>
                        <option class="dropdown-item" value="Fruits &amp; Vegetables">Tv &amp; Video</option>
                        <option class="dropdown-item" value="iPad & Tablets">iPad & Tablets</option>
                        <option class="dropdown-item" value="Cameras & Camcorders">Cameras & Camcorders</option>
                        <option class="dropdown-item" value="Home Audio & Theater">Home Audio & Theater</option>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto text-center mr-xl-5">
                        <!--<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
       <a class="nav-link" href="index.html">Home
        <span class="sr-only">(current)</span>
       </a>
      </li>-->
                        <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                            <a class="nav-link dropdown-toggle" style="color:white;" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tiendas
                            </a>
                            <div class="dropdown-menu">
                                <div class="agile_inner_drop_nav_info p-4">
                                    <h5 class="mb-3">Mobiles, Computers</h5>
                                    <div class="row">
                                        <div class="col-sm-6 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li>
                                                    <a href="product.html">All Mobile Phones</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">All Mobile Accessories</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Cases & Covers</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Screen Protectors</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Power Banks</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">All Certified Refurbished</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Tablets</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Wearable Devices</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Smart Home</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li>
                                                    <a href="product.html">Laptops</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Drives & Storage</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Printers & Ink</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Networking Devices</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Computer Accessories</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Game Zone</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Software</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                            <a class="nav-link dropdown-toggle" style="color:white;" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categorías
                            </a>
                            <div class="dropdown-menu">
                                <div class="agile_inner_drop_nav_info p-4">
                                    <h5 class="mb-3">TV, Appliances, Electronics</h5>
                                    <div class="row">
                                        <div class="col-sm-6 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li>
                                                    <a href="product2.html">Televisores</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Home Entertainment Systems</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Headphones</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Speakers</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">MP3, Media Players & Accessories</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Audio & Video Accessories</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Cameras</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">DSLR Cameras</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Camera Accessories</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li>
                                                    <a href="product2.html">Musical Instruments</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Gaming Consoles</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">All Electronics</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Air Conditioners</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Refrigerators</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Washing Machines</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Kitchen & Home Appliances</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Heating & Cooling Appliances</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">All Appliances</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                            <a class="nav-link" href="portuzona.html" style="color:white;">Por tu zona</a>
                        </li>
                        <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                            <a class="nav-link" href="ofertas.html" style="color:white;">Ofertas</a>
                        </li>
                        <!--
      <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
       <a class="nav-link dropdown-toggle" href="#" style="color:white;" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Pages
       </a>
       <div class="dropdown-menu">
        <a class="dropdown-item" href="product.html">Product 1</a>
        <a class="dropdown-item" href="product2.html">Product 2</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="single.html">Single Product 1</a>
        <a class="dropdown-item" href="single2.html">Single Product 2</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="checkout.html">Checkout Page</a>
        <a class="dropdown-item" href="payment.html">Payment Page</a>
       </div>
      </li>
      -->
                        <li class="nav-item">
                            <a class="nav-link" href="destacados.html" style="color:white;">Destacados</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <!-- //navigation -->

    @yield('contenido')
    <!-- //top products -->

    <!-- middle section -->
    <div class="join-w3l1 py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <div class="row">
                <div class="col-lg-6">
                    <div class="join-agile text-left p-4">
                        <div class="row">
                            <div class="col-sm-7 offer-name">
                                <h6>Publicidad</h6>
                                <h4 class="mt-2 mb-3">Publicidad</h4>
                                <p>Sale up to 25% off all in store</p>
                            </div>
                            <div class="col-sm-5 offerimg-w3l">
                                <img src="images/off1.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <div class="join-agile text-left p-4">
                        <div class="row ">
                            <div class="col-sm-7 offer-name">
                                <h6>Publicidad</h6>
                                <h4 class="mt-2 mb-3">Publicidad</h4>
                                <p>Free shipping order over $100</p>
                            </div>
                            <div class="col-sm-5 offerimg-w3l">
                                <img src="images/off2.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- middle section -->

    <!-- footer -->
    <footer>
        <div class="footer-top-first">
            <div class="container py-md-5 py-sm-4 py-3">
                <!-- footer first section -->
                <h2 class="footer-top-head-w3l font-weight-bold mb-2">Conoce sobre EmprendeVende:</h2>
                <p class="footer-main mb-4" style="font-size: xx-small;">
                    EmprendeVende es una nueva plataforma online enfocada en reunir marcas y tiendas, bajo el concepto
                    de un Marketplace para todos. Agrupamos en un solo sitio a tus tiendas y marcas favoritas, cada una
                    bajo el formato de Shop-in-Shop (tienda propia con su buscador propio) dentro de nuestra plataforma
                    online. De este modo, acercamos las marcas más importantes a nuestros clientes en un canal
                    complementario y adicional de ventas por internet. ¿Qué es EmprendeVende? Es un mall o centro
                    comercial, que abre tiendas de marcas, llevado al internet: EmprendeVende.com es un mall online o
                    marketplace online.

                    En EmprendeVende vive la nueva experiencia de realizar compras por internet en el Mall online de las
                    mejores marcas y retailers. Aquí encontrarás tiendas con productos sobre audífonos, belleza, cámaras
                    fotográficas, celulares, cervezas, colchones, computadoras, cuidado personal, perfumes, deportes,
                    electrodomésticos, hogar,

                    instrumentos musicales, jardín, joyería, juguetes, lentes, libros, maletas y mochilas, moda hombre,
                    moda mujer, motores, productos para bebés, relojes, salud, supermercado, tablets, TV, útiles
                    escolares, consolas y videojuegos, licores, vitaminas y suplementos, parrillas, cajas chinas y mucho
                    más.

                    Contamos con muchas marcas importantes dentro de EmprendeVende como: Amphora, ANACAPRI, Artesco,
                    Babiators, Baby Infanti, Bioderma, Blacksheep, Boaonda, Bosch, Casa Rosselló, CaseMania, Casio,
                    Castrol, Club Hogar, Crep Protect, Crepier, D´Sala, Dauss, DC Shoes, Dell, Dewalt, Dickies, Dockers,
                    Dove, Drimer, Duraplast, Electrolux, Enfabebé, Epson, Estilos, Everlast, Far West, Funko, Game
                    Center, Germaine de Capuccini, Giant, Goliat, Grill Store, Groomers, Herschel, Hoseg, Imaco,
                    Indurama, Joaquim Miro, K'allma, Karcher, Kawasaki, Kidsmadehere,

                    KitchenAid, Klimatic, Komfort, LA Girl, La Peca, La Rochelli, LAB Nutrition, Laguna Pai, Lego,
                    Levi's, LG, Loginstore, Lumberjack, M.bö, Mabe, Maraná, Massimom, Maternelle, Maui And Sons, Michael
                    Kors, Monark, Motorola, Mr. Grill, Musa Grill, My Sign, Mágico, National Geographic, Nautica
                    Watches, Nikon, Nillkin, Northwest, Nutripoint, NutriShop, O'Neill, Oakley, Ogio, Oster, Ovalo 24,
                    Oxford Bikes, Passarela, Peru Game, Philips, Pierre Cardin, Pioneer, Practika, Quality Products,
                    Quiksilver, Reef, Rip Curl, Rosatel, Roxy, Runa Store, RVCA, Sabz Swimwear, Sacco, Scosche,
                    Sicurezza, Similac3, Skullcandy, Smartphones Perú, Soda Jeans, Solé, Sport Fitness, Spy, Stanley,
                    Swiss Gear, Taurus, Tigre, Timberland, Totto, Tramontina, Van Heusen, Victorinox, Volcom, Want, We
                    The Lion, Wenger, Winsor, Xiaomi, Yamaha, YAQUA, Ziol y muchas tiendas más.

                    En EmprendeVende, uno de nuestros objetivos respecto a las marcas es trabajar juntos y crecer juntos
                    con nuestros socios (Merchant Partners) en el canal online. Con respecto a los usuarios, nuestro
                    objetivo es que puedas experimentar la mejor experiencia de compras por internet, de una forma más
                    rápida y segura. Por eso, contamos con una amplia variedad de métodos de pago.

                    EmprendeVende cuenta con métodos de pagos seguros y rápidos, entre ellos contamos con: Pago con
                    tarjeta de crédito, pago con tarjeta de débito, Pago Efectivo, Safety Pay, pago contra entrega y
                    store pickup (compra online y recoge en tienda). Visita nuestras redes sociales: Facebook, Twitter y
                    Youtube y encuentra novedades, promociones, descuentos y mucho más.</p>
                <!-- //footer first section -->
                <!-- footer second section -->
                <div class="row w3l-grids-footer border-top border-bottom py-sm-4 py-3">
                    <div class="col-md-4 offer-footer">
                        <div class="row">
                            <div class="col-4 icon-fot">
                                <i class="fas fa-dolly"></i>
                            </div>
                            <div class="col-8 text-form-footer">
                                <h3>Free Shipping</h3>
                                <p>on orders over $100</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 offer-footer my-md-0 my-4">
                        <div class="row">
                            <div class="col-4 icon-fot">
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                            <div class="col-8 text-form-footer">
                                <h3>Fast Delivery</h3>
                                <p>World Wide</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 offer-footer">
                        <div class="row">
                            <div class="col-4 icon-fot">
                                <i class="far fa-thumbs-up"></i>
                            </div>
                            <div class="col-8 text-form-footer">
                                <h3>Big Choice</h3>
                                <p>of Products</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //footer second section -->
            </div>
        </div>
        <!-- footer third section -->
        <div class="w3l-middlefooter-sec">
            <div class="container py-md-5 py-sm-4 py-3">
                <div class="row footer-info w3-agileits-info">
                    <!-- footer categories -->
                    <div class="col-md-3 col-sm-6 footer-grids">
                        <h3 class="text-white font-weight-bold mb-3">Mi cuenta</h3>
                        <ul>
                            <li class="mb-3">
                                <a href="product.html">Registrate </a>
                            </li>
                            <li class="mb-3">
                                <a href="product.html">Vende con nosotros</a>
                            </li>
                            <!--<li class="mb-3">
        <a href="product.html">TV, Audio</a>
       </li>
       <li class="mb-3">
        <a href="product2.html">Smartphones</a>
       </li>
       <li class="mb-3">
        <a href="product.html">Washing Machines</a>
       </li>
       <li>
        <a href="product2.html">Refrigerators</a>
       </li>-->
                        </ul>
                    </div>
                    <!-- //footer categories -->
                    <!-- quick links -->
                    <div class="col-md-3 col-sm-6 footer-grids mt-sm-0 mt-4">
                        <h3 class="text-white font-weight-bold mb-3">Servicio al Cliente</h3>
                        <ul>
                            <li class="mb-3">
                                <a href="about.html">Nosotros</a>
                            </li>
                            <li class="mb-3">
                                <a href="contact.html">Preguntas frecuentes</a>
                            </li>
                            <li class="mb-3">
                                <a href="help.html">Términos y condiciones</a>
                            </li>
                            <li class="mb-3">
                                <a href="faqs.html">Tiendas</a>
                            </li>
                            <li class="mb-3">
                                <a href="terms.html">Categorías</a>
                            </li>
                            <li>
                                <a href="privacy.html">Política de privacidad</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-grids mt-md-0 mt-4">
                        <h3 class="text-white font-weight-bold mb-3">Contáctanos</h3>
                        <ul>
                            <!--<li class="mb-3">
        <i class="fas fa-map-marker"></i> 123 Sebastian, USA.</li>
       <li class="mb-3">
        <i class="fas fa-mobile"></i> 333 222 3333 </li>-->
                            <li class="mb-3">
                                <i class="fas fa-phone"></i> +222 11 4444
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-envelope-open"></i>
                                <a href="mailto:example@mail.com"> mail 1@example.com</a>
                            </li>
                            <li>
                                <i class="fas fa-envelope-open"></i>
                                <a href="mailto:example@mail.com"> mail 2@example.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-grids w3l-agileits mt-md-0 mt-4">
                        <!-- newsletter -->
                        <h3 class="text-white font-weight-bold mb-3">Está al tanto</h3>
                        <p class="mb-3">Entérate de todo!</p>
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Correo electrónico" name="email"
                                    required="">
                                <input type="submit" value="Ir">
                            </div>
                        </form>
                        <!-- //newsletter -->
                        <!-- social icons -->
                        <div class="footer-grids  w3l-socialmk mt-3">
                            <h3 class="text-white font-weight-bold mb-3">Síguenos</h3>
                            <div class="social">
                                <ul>
                                    <li>
                                        <a class="icon fb" href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="icon tw" href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="icon gp" href="#">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- //social icons -->
                    </div>
                </div>
                <!-- //quick links -->
            </div>
        </div>
        <!-- //footer third section -->

        <!-- footer fourth section -->
        <div class="agile-sometext py-md-5 py-sm-4 py-3">
            <div class="container">

                <!-- payment -->
                <div class="sub-some child-momu mt-4">
                    <h5 class="font-weight-bold mb-3">Métodos de pago</h5>
                    <ul>
                        <li>
                            <img src="images/pay2.png" alt="">
                        </li>
                        <li>
                            <img src="images/pay5.png" alt="">
                        </li>
                        <li>
                            <img src="images/pay1.png" alt="">
                        </li>
                        <li>
                            <img src="images/pay4.png" alt="">
                        </li>
                        <li>
                            <img src="images/pay6.png" alt="">
                        </li>
                        <li>
                            <img src="images/pay3.png" alt="">
                        </li>
                        <li>
                            <img src="images/pay7.png" alt="">
                        </li>
                        <li>
                            <img src="images/pay8.png" alt="">
                        </li>
                        <li>
                            <img src="images/pay9.png" alt="">
                        </li>
                    </ul>
                </div>
                <!-- //payment -->
            </div>
            @include('sweetalert::alert')

        </div>
        <!-- //footer fourth section (text) -->
    </footer>
    <!-- //footer -->
    <!-- copyright -->
    <div class="copy-right py-3">
        <div class="container">
            <p class="text-center text-white">© 2020 EmprendeVende. Todos los derechos reservados
            </p>
        </div>
    </div>
    <!-- //copyright -->

    <!-- js-files -->
    <!-- jquery -->
    <script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
    <!-- //jquery -->

    <!-- nav smooth scroll -->
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });

    </script>
    <!-- //nav smooth scroll -->

    <!-- popup modal (for location)-->
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });

    </script>
    <!-- //popup modal (for location)-->

    <!-- cart-js -->
    <script src="{{ asset('js/minicart.js') }}"></script>
    <script>
        paypals.minicarts
        .render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

        paypals.minicarts.cart.on('checkout', function(evt) {
            var items = this.items(),
                len = items.length,
                total = 0,
                i;

            // Count the number of each item in the cart
            for (i = 0; i < len; i++) {
                total += items[i].get('quantity');
            }

            if (total < 3) {
                alert(
                    'The minimum order quantity is 3. Please add more to your shopping cart before checking out');
                evt.preventDefault();
            }
        });

    </script>
    <!-- //cart-js -->

    <!-- password-script -->
    <script>
        window.onload = function() {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }

    </script>
    <!-- //password-script -->

    <!-- scroll seller -->
    <script src="{{ asset('js/scroll.js') }}"></script>
    <!-- //scroll seller -->

    <!-- smoothscroll -->
    <script src="{{ asset('js/SmoothScroll.min.js') }}"></script>
    <!-- //smoothscroll -->

    <!-- start-smooth-scrolling -->
    <script src="{{ asset('js/move-top.js') }}"></script>
    <script src="{{ asset('js/easing.js') }}"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });

    </script>
    <!-- //end-smooth-scrolling -->

    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function() {
            /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear' 
            };
            */
            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });

    </script>
    <!-- //smooth-scrolling-of-move-up -->

    <!-- for bootstrap working -->
    @yield('scripts')
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
  crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
  integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
  crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
  integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
  crossorigin="anonymous"></script>-->
    <!-- //for bootstrap working -->
    <!-- //js-files -->

</body>

</html>
