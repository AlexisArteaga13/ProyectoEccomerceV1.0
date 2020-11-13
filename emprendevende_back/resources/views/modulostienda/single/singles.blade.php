@extends('plantillas.ptienda')
@section('titulo', 'La vitrina2')
@section('contenido')
    <!-- shop locator (popup) -->
    <!-- //header-bottom -->
    <!-- navigation -->

    <!-- //navigation -->

    <!-- banner-2 -->
    <div class="page-head_agile_info_w3l">

    </div>
    <!-- //banner-2 -->
    <!-- page -->
    <div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">
            <div class="container">
                <ul class="w3_short">
                    <li>
                        <a href="{{ route('inicio') }}">Inicio</a>
                        <i>|</i>
                    </li>
                    <li>
                        @foreach ($productos as $key => $value)
                            {{ $value->nombreProducto }}

                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //page -->

    <!-- Single Page -->
    <div class="banner-bootom-w3-agileits py-5">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                <span>S</span>u
                <span>P</span>roducto
            </h3>
            <!-- //tittle heading -->
            <div class="row">
                <div class="col-lg-5 col-md-8 single-right-left ">
                    <div class="grid images_3_of_2">
                        <div class="flexslider">
                            <ul class="slides">
                                <li data-thumb="images/si1.jpg">
                                    <div class="thumb-image">
                                        <img src="{{ asset('../storage/app/' . $value->imagen_f) }}" data-imagezoom="true"
                                            class="img-fluid" alt="">
                                    </div>
                                </li>
                                <li data-thumb="images/si2.jpg">
                                    <div class="thumb-image">
                                        <img src="{{ asset('../storage/app/' . $value->imagen_p) }}" data-imagezoom="true"
                                            class="img-fluid" alt="">
                                    </div>
                                </li>
                                <li data-thumb="images/si3.jpg">
                                    <div class="thumb-image">
                                        <img src="{{ asset('../storage/app/' . $value->imagen_iz) }}" data-imagezoom="true"
                                            class="img-fluid" alt="">
                                    </div>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-7 single-right-left simpleCart_shelfItem">
                    <h3 class="mb-3">
                        @foreach ($productos as $key => $value)
                            {{ $value->nombreProducto }}
                        @endforeach
                    </h3>
                    <span>Vendido por: </span>
                    <br>

                    @foreach ($productos as $key => $value)
                        <a href="{{ route('tienda.tienda', $value->idEmpresa) }}">
                            <h6 class="mb-3">
                                {{ $value->nombreEmpresa }}
                    @endforeach
                    </h6>
                    </a>
                    <div>

                        <i style="color: yellow;" class="fas fa-star"></i>
                        <i style="color: yellow;" class="fas fa-star"></i>
                        <i style="color: yellow;" class="fas fa-star"></i>
                        <i style="color: yellow;" class="fas fa-star"></i>
                        <i style="color: yellow;" class="fas fa-star"></i>
                        <span>5.0</span>

                    </div>

                    <p class="mb-3">
                        <span class="item_price">S/.
                            @foreach ($productos as $key => $value)
                                {{ $value->precio }}
                            @endforeach
                        </span>
                        <!--<del class="mx-2 font-weight-light">$280.00</del>-->
                        <label>Free delivery</label>
                    </p>
                    <div class="single-infoagile">
                        <ul>
                            <li class="mb-3">
                                @foreach ($productos as $key => $value)
                                    {{ $value->marca }}
                                @endforeach
                            </li>
                            <li class="mb-3">
                                @foreach ($productos as $key => $value)
                                    {{ $value->descripcion }}
                                @endforeach
                            </li>
                           <!-- <li class="mb-3">
                                EMIs from $655/month.
                            </li>
                            <li class="mb-3">
                                Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C
                            </li> -->
                        </ul>
                    </div>
                    <div class="product-single-w3l">
                        <p class="my-3">
                            <i class="far fa-hand-point-right mr-2"></i>
                            <label>Com</label>pralo antes que te lo ganen
                        </p>
                       <!-- <ul>
                            <li class="mb-1">
                                3 GB RAM | 16 GB ROM | Expandable Upto 256 GB
                            </li>
                            <li class="mb-1">
                                5.5 inch Full HD Display
                            </li>
                            <li class="mb-1">
                                13MP Rear Camera | 8MP Front Camera
                            </li>
                            <li class="mb-1">
                                3300 mAh Battery
                            </li>
                            <li class="mb-1">
                                Exynos 7870 Octa Core 1.6GHz Processor
                            </li>
                        </ul>-->
                        <p class="my-sm-4 my-3">
                            <i class="fas fa-retweet mr-3"></i>Aceptamos Tarjetas de Crediti &Debito  
                        </p>
                    </div>
                    <div class="occasion-cart">
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                            <form action="#" method="post">
                                <fieldset>
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="business" value=" " />
                                    <input type="hidden" name="id" value="{{ $value->idPRODUCTO }}" />
                                    <input type="hidden" name="item_name"
                                        value="{{ $value->nombreProducto }} - {{ $value->nombreEmpresa }}" />
                                    <input type="hidden" name="amount" value="{{ $value->precio }}" />
                                    <input type="hidden" name="discount_amount" value="0.00" />
                                    <input type="hidden" name="currency_code" value="PEN" />
                                    <input type="hidden" name="return" value=" " />
                                    <input type="hidden" name="cancel_return" value=" " />
                                    <input type="submit" name="submit" value="Añadir a carrito" class="button btn" />
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
