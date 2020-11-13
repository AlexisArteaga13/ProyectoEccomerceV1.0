@extends('plantillas.ptienda')
@section('titulo', 'Bienvenido a EmprendeVende')
@section('contenido')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <!-- Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item item1 active">
                <div class="container">
                    <div class="w3l-space-banner">
                        <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                            <p>Get flat
                                <span>10%</span> Cashback
                            </p>
                            <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">The
                                <span>Big</span>
                                Sale
                            </h3>
                            <a class="button2" href="{{route('inicio')}}">Compra ahora </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item2">
                <div class="container">
                    <div class="w3l-space-banner">
                        <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                            <p>advanced
                                <span>Wireless</span> earbuds
                            </p>
                            <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Best
                                <span>Headphone</span>
                            </h3>
                            <a class="button2" href="{{route('inicio')}}">Compra ahora </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item3">
                <div class="container">
                    <div class="w3l-space-banner">
                        <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                            <p>Get flat
                                <span>10%</span> Cashback
                            </p>
                            <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">New
                                <span>Standard</span>
                            </h3>
                            <a class="button2" href="{{route('inicio')}}">Compra ahora </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item4">
                <div class="container">
                    <div class="w3l-space-banner">
                        <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                            <p>Get Now
                                <span>40%</span> Discount
                            </p>
                            <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Today
                                <span>Discount</span>
                            </h3>
                            <a class="button2" href="{{route('inicio')}}">Compra ahora </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <hr>
            </div>
            <div ALIGN=center class="col-md-4">
                <span class="letras">Productos Destacados</span>
            </div>
            <div class="col-md-4">
                <hr>
            </div>
        </div>
    </div>

    <div class="container"
        style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQrdbVmqpo0UcVyVpR01Ez_Nn7I7w8L2lFulA&usqp=CAU);">
        <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <br>
                    <div class="row">
                        @foreach ($destacados as $key => $value)
                            @if ($key + 1 <= 2)
                                <div class="col-xs-12 col-md-6">
                                    <div class="card mb-3" style="max-width: 540px;">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                                <img src="{{ asset('../storage/app/' . $value->imagen_f) }}"
                                                    class="img-fluid" alt="{{ $value->nombreProducto }}">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $value->nombreProducto }}</h5>
                                                    <p class="card-text">{{ $value->marca }}</p>
                                                    <p class="card-text"><small
                                                            class="text-muted">{{ $value->descripcion }}</small></p>
                                                 <!--  <a href="{{ route('vitrina') }}" class="btn btn-primary">Ver producto</a> -->
                                                    <form action="{{ route('descripcion', $value->idPRODUCTO) }}" method="get">
                                                         <button type="submit" class="btn btn-primary">Ver Producto</button>
                                                        
                                                      </form>
                                                    
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                        <!-- <div class="col-xs-12 col-md-6">
                                                        <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row no-gutters">
                                                                <div class="col-md-4">
                                                                    <img src="images/off2.png" class="card-img" alt="img-fluid">
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">Primera Publicidad</h5>
                                                                        <p class="card-text">Publicidad primera.</p>
                                                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                                                ago</small></p>
                                                                        <a href="single.html" class="btn btn-primary">Ver producto</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->

                    </div>

                </div>


                @foreach ($destacados as $key => $value)
                    @if ($key + 1 >= 3)
                        @if (($key + 1) % 2 != 0)
                            <div class="carousel-item">
                                <br>
                                <div class="row">
                                    <br>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row no-gutters">
                                                <div class="col-md-4">
                                                    <img src="{{ asset('../storage/app/' . $value->imagen_f) }}"
                                                        class="img-fluid" alt="{{ $value->nombreProducto }}">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $value->nombreProducto }}</h5>
                                                        <p class="card-text">{{ $value->marca }}</p>
                                                        <p class="card-text"><small
                                                                class="text-muted">{{ $value->descripcion }}
                                                            </small></p>
                                                        <a href="single.html" class="btn btn-primary">Ver producto</a>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                @else
                                    <div class="col-xs-12 col-md-6">
                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row no-gutters">
                                                <div class="col-md-4">
                                                    <img src="{{ asset('../storage/app/' . $value->imagen_f) }}"
                                                        class="img-fluid" alt="{{ $value->nombreProducto }}">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $value->nombreProducto }}</h5>
                                                        <p class="card-text">{{ $value->marca }}</p>
                                                        <p class="card-text"><small
                                                                class="text-muted">{{ $value->descripcion }}
                                                            </small></p>
                                                        <a href="single.html" class="btn btn-primary">Ver producto</a>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>






                        @endif
                    @endif



                @endforeach


            </div>
        </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    </div>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <hr>
            </div>
            <div ALIGN=center class="col-md-4">
                <span class="letras">Vendedores Destacados</span>
            </div>
            <div class="col-md-4">
                <hr>
            </div>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <div class="row">

                        <div class="col-2"></div>
                        @foreach ($vendedores as $key => $value)
                            @if ($key + 1 <= 8)
                                <div class="col-1"><a href=""><img
                                            src="{{ asset('../storage/app/' . $value->logo_img_empresa) }}"
                                            class="d-block w-100 img-fluid"></a>
                                </div>

                            @endif
                        @endforeach
                        <div class="col-2"></div>
                    </div>

                </div>
                @php
                $datos = [];
                @endphp
                @foreach ($vendedores as $key => $value)
                    @if ($key + 1 >= 9)
                        @php
                        array_push($datos,["orden"
                        =>($key+1),"id"=>$value->idEmpresa,"nombre"=>$value->nombreEmpresa,'img'=>$value->logo_img_empresa]);
                        if(count($datos)==8 || $key!== end($keys)){
                        echo '
                        <div class="carousel-item">
                            <div class="container-xl">
                                <div class="row">
                                    <div class="col-1"></div>';
                                    for($i=0;$i<8;$i++){ echo '
                                <div class="col-md-1 col-sm-10"><a href=""><img src="' .$value->logo_img_empresa.'"
                                        class="d-block w-100 img-fluid">'.$datos[$i]['nombre'].'</a>
                                </div>
                                ';
                                }


                                $datos = [];
                                echo ' <div class="col-1"></div>
                            </div>
                        </div>
            </div>';
            }
            else{
            if ($key === end($keys)) {
            echo '
            <div class="carousel-item">
                <div class="container-xl">
                    <div class="row">
                        <div class="col-1"></div>';
                        for($i=0;$i<sizeof($datos);$i++){ echo '
                                <div class="col-md-1 col-sm-10"><a href=""><img src="images/m1.jpg"
                                            class="d-block w-100 img-fluid">' .$datos[$i]['nombre'].'</a>
                    </div>
                    ';
                    }


                    $datos = [];
                    echo ' <div class="col-1"></div>
                </div>
            </div>
        </div>';
        }
        }
        // print_r($datos);
        //echo count($datos);
        @endphp

        @endif
        @endforeach

    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    </div>
    <br>


    <!-- Publicidad-->
    <!-- third section -->
    <div class="product-sec1 product-sec2 px-sm-5 px-3">
        <div class="row">
            <h3 class="col-md-4 effect-bg">Emprende Vende</h3>
            <p class="w3l-nut-middle">Get Extra 10% Off</p>
            <div class="col-md-8 bg-right-nut">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/auY_IR4UdCk?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- top Products -->
    <hr>
    <div class="ads-grid py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                <span>N</span>uestros

                <span>P</span>roductos
            </h3>
            <!-- //tittle heading -->
            <div class="row">
                <!-- product left -->
                <div class="agileinfo-ads-display col-lg-9">
                    <div class="wrapper">
                        <!-- first section -->
                        <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                            <h3 class="heading-tittle text-center font-italic">Todos</h3>

                            <div class="row">

                                @foreach ($productos as $p)
                                    <div class="col-md-4 product-men mt-5">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item text-center">
                                                <img src="{{ asset('../storage/app/' . $p->imagen_f) }}" class="img-fluid"
                                                    alt="{{ $p->nombreProducto }}">
                                                <div class="men-cart-pro">
                                                    <div class="inner-men-cart-pro">
                                                    <form action="{{ route('descripcion', $p->idPRODUCTO) }}" method="get">
                                                         <button type="submit" class="btn btn-primary">Ver Producto</button>
                                                         
                                                      </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info-product text-center border-top mt-4">
                                                <h4 class="pt-1">
                                                    <a href="single.html">{{ $p->nombreProducto }}</a>
                                                </h4>
                                                <div class="info-product-price my-2">
                                                    <span class="item_price">S/. {{ $p->precio }}</span>

                                                    <!-- <del>$280.00</del> -->
                                                </div>
                                                <span class="badge badge-warning">{{ $p->nombreEmpresa }}</span>
                                                <div
                                                    class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                    <form action="#" method="post">
                                                        <fieldset>
                                                            <input type="hidden" name="cmd" value="_cart" />
                                                            <input type="hidden" name="add" value="1" />
                                                            <input type="hidden" name="business" value=" " />
                                                            <input type="hidden" name="id" value="{{ $p->idPRODUCTO }}" />
                                                            <input type="hidden" name="item_name"
                                                        value="{{ $p->nombreProducto }} - {{ $p->nombreEmpresa }}" />
                                                            <input type="hidden" name="amount" value="{{ $p->precio }}" />
                                                            <input type="hidden" name="discount_amount" value="0.00" />
                                                            <input type="hidden" name="currency_code" value="PEN" />
                                                            <input type="hidden" name="return" value=" " />
                                                            <input type="hidden" name="cancel_return" value=" " />
                                                            <input type="submit" name="submit" value="Añadir a carrito"
                                                                class="button btn" />
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                <!--


                                        <div class="col-md-4 product-men mt-5">
                                         <div class="men-pro-item simpleCart_shelfItem">
                                          <div class="men-thumb-item text-center">
                                           <img src="images/m2.jpg" alt="">
                                           <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                             <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                           </div>
                                           <span class="product-new-top">New</span>

                                          </div>
                                          <div class="item-info-product text-center border-top mt-4">
                                           <h4 class="pt-1">
                                            <a href="single.html">OPPO A37f</a>
                                           </h4>
                                           <div class="info-product-price my-2">
                                            <span class="item_price">$230.00</span>
                                            <del>$250.00</del>
                                           </div>
                                           <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                             <fieldset>
                                              <input type="hidden" name="cmd" value="_cart" />
                                              <input type="hidden" name="add" value="1" />
                                              <input type="hidden" name="business" value=" " />
                                              <input type="hidden" name="item_name" value="OPPO A37f" />
                                              <input type="hidden" name="amount" value="230.00" />
                                              <input type="hidden" name="discount_amount" value="1.00" />
                                              <input type="hidden" name="currency_code" value="USD" />
                                              <input type="hidden" name="return" value=" " />
                                              <input type="hidden" name="cancel_return" value=" " />
                                              <input type="submit" name="submit" value="Add to cart"
                                               class="button btn" />
                                             </fieldset>
                                            </form>
                                           </div>

                                          </div>
                                         </div>
                                        </div>
                                        <div class="col-md-4 product-men mt-5">
                                         <div class="men-pro-item simpleCart_shelfItem">
                                          <div class="men-thumb-item text-center">
                                           <img src="images/m3.jpg" alt="">
                                           <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                             <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                           </div>
                                           <span class="product-new-top">New</span>

                                          </div>
                                          <div class="item-info-product text-center border-top mt-4">
                                           <h4 class="pt-1">
                                            <a href="single.html">Apple iPhone X</a>
                                           </h4>
                                           <div class="info-product-price my-2">
                                            <span class="item_price">$280.00</span>
                                            <del>$300.00</del>
                                           </div>
                                           <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                             <fieldset>
                                              <input type="hidden" name="cmd" value="_cart" />
                                              <input type="hidden" name="add" value="1" />
                                              <input type="hidden" name="business" value=" " />
                                              <input type="hidden" name="item_name" value="Apple iPhone X" />
                                              <input type="hidden" name="amount" value="280.00" />
                                              <input type="hidden" name="discount_amount" value="1.00" />
                                              <input type="hidden" name="currency_code" value="USD" />
                                              <input type="hidden" name="return" value=" " />
                                              <input type="hidden" name="cancel_return" value=" " />
                                              <input type="submit" name="submit" value="Add to cart"
                                               class="button btn" />
                                             </fieldset>
                                            </form>
                                           </div>
                                          </div>
                                         </div>
                                        </div>



                                       </div>
                                       <div class="row">
                                        <div class="col-md-4 product-men mt-5">
                                         <div class="men-pro-item simpleCart_shelfItem">
                                          <div class="men-thumb-item text-center">
                                           <img src="images/m1.jpg" alt="">
                                           <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                             <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                           </div>
                                          </div>
                                          <div class="item-info-product text-center border-top mt-4">
                                           <h4 class="pt-1">
                                            <a href="single.html">Samsung Galaxy J7</a>
                                           </h4>
                                           <div class="info-product-price my-2">
                                            <span class="item_price">$200.00</span>
                                            <del>$280.00</del>
                                           </div>
                                           <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                             <fieldset>
                                              <input type="hidden" name="cmd" value="_cart" />
                                              <input type="hidden" name="add" value="1" />
                                              <input type="hidden" name="business" value=" " />
                                              <input type="hidden" name="item_name"
                                               value="Samsung Galaxy J7" />
                                              <input type="hidden" name="amount" value="200.00" />
                                              <input type="hidden" name="discount_amount" value="1.00" />
                                              <input type="hidden" name="currency_code" value="USD" />
                                              <input type="hidden" name="return" value=" " />
                                              <input type="hidden" name="cancel_return" value=" " />
                                              <input type="submit" name="submit" value="Add to cart"
                                               class="button btn" />
                                             </fieldset>
                                            </form>
                                           </div>
                                          </div>
                                         </div>
                                        </div>
                                        <div class="col-md-4 product-men mt-5">
                                         <div class="men-pro-item simpleCart_shelfItem">
                                          <div class="men-thumb-item text-center">
                                           <img src="images/m2.jpg" alt="">
                                           <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                             <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                           </div>
                                           <span class="product-new-top">New</span>

                                          </div>
                                          <div class="item-info-product text-center border-top mt-4">
                                           <h4 class="pt-1">
                                            <a href="single.html">OPPO A37f</a>
                                           </h4>
                                           <div class="info-product-price my-2">
                                            <span class="item_price">$230.00</span>
                                            <del>$250.00</del>
                                           </div>
                                           <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                             <fieldset>
                                              <input type="hidden" name="cmd" value="_cart" />
                                              <input type="hidden" name="add" value="1" />
                                              <input type="hidden" name="business" value=" " />
                                              <input type="hidden" name="item_name" value="OPPO A37f" />
                                              <input type="hidden" name="amount" value="230.00" />
                                              <input type="hidden" name="discount_amount" value="1.00" />
                                              <input type="hidden" name="currency_code" value="USD" />
                                              <input type="hidden" name="return" value=" " />
                                              <input type="hidden" name="cancel_return" value=" " />
                                              <input type="submit" name="submit" value="Add to cart"
                                               class="button btn" />
                                             </fieldset>
                                            </form>
                                           </div>

                                          </div>
                                         </div>
                                        </div>
                                        <div class="col-md-4 product-men mt-5">
                                         <div class="men-pro-item simpleCart_shelfItem">
                                          <div class="men-thumb-item text-center">
                                           <img src="images/m3.jpg" alt="">
                                           <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                             <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                           </div>
                                           <span class="product-new-top">New</span>

                                          </div>
                                          <div class="item-info-product text-center border-top mt-4">
                                           <h4 class="pt-1">
                                            <a href="single.html">Apple iPhone X</a>
                                           </h4>
                                           <div class="info-product-price my-2">
                                            <span class="item_price">$280.00</span>
                                            <del>$300.00</del>
                                           </div>
                                           <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                             <fieldset>
                                              <input type="hidden" name="cmd" value="_cart" />
                                              <input type="hidden" name="add" value="1" />
                                              <input type="hidden" name="business" value=" " />
                                              <input type="hidden" name="item_name" value="Apple iPhone X" />
                                              <input type="hidden" name="amount" value="280.00" />
                                              <input type="hidden" name="discount_amount" value="1.00" />
                                              <input type="hidden" name="currency_code" value="USD" />
                                              <input type="hidden" name="return" value=" " />
                                              <input type="hidden" name="cancel_return" value=" " />
                                              <input type="submit" name="submit" value="Add to cart"
                                               class="button btn" />
                                             </fieldset>
                                            </form>
                                           </div>
                                          </div>
                                         </div>
                                        </div>



                                       </div>
                                       <div class="row">
                                        <div class="col-md-4 product-men mt-5">
                                         <div class="men-pro-item simpleCart_shelfItem">
                                          <div class="men-thumb-item text-center">
                                           <img src="images/m1.jpg" alt="">
                                           <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                             <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                           </div>
                                          </div>
                                          <div class="item-info-product text-center border-top mt-4">
                                           <h4 class="pt-1">
                                            <a href="single.html">Samsung Galaxy J7</a>
                                           </h4>
                                           <div class="info-product-price my-2">
                                            <span class="item_price">$200.00</span>
                                            <del>$280.00</del>
                                           </div>
                                           <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                             <fieldset>
                                              <input type="hidden" name="cmd" value="_cart" />
                                              <input type="hidden" name="add" value="1" />
                                              <input type="hidden" name="business" value=" " />
                                              <input type="hidden" name="item_name"
                                               value="Samsung Galaxy J7" />
                                              <input type="hidden" name="amount" value="200.00" />
                                              <input type="hidden" name="discount_amount" value="1.00" />
                                              <input type="hidden" name="currency_code" value="USD" />
                                              <input type="hidden" name="return" value=" " />
                                              <input type="hidden" name="cancel_return" value=" " />
                                              <input type="submit" name="submit" value="Add to cart"
                                               class="button btn" />
                                             </fieldset>
                                            </form>
                                           </div>
                                          </div>
                                         </div>
                                        </div>
                                        <div class="col-md-4 product-men mt-5">
                                         <div class="men-pro-item simpleCart_shelfItem">
                                          <div class="men-thumb-item text-center">
                                           <img src="images/m2.jpg" alt="">
                                           <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                             <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                           </div>
                                           <span class="product-new-top">New</span>

                                          </div>
                                          <div class="item-info-product text-center border-top mt-4">
                                           <h4 class="pt-1">
                                            <a href="single.html">OPPO A37f</a>
                                           </h4>
                                           <div class="info-product-price my-2">
                                            <span class="item_price">$230.00</span>
                                            <del>$250.00</del>
                                           </div>
                                           <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                             <fieldset>
                                              <input type="hidden" name="cmd" value="_cart" />
                                              <input type="hidden" name="add" value="1" />
                                              <input type="hidden" name="business" value=" " />
                                              <input type="hidden" name="item_name" value="OPPO A37f" />
                                              <input type="hidden" name="amount" value="230.00" />
                                              <input type="hidden" name="discount_amount" value="1.00" />
                                              <input type="hidden" name="currency_code" value="USD" />
                                              <input type="hidden" name="return" value=" " />
                                              <input type="hidden" name="cancel_return" value=" " />
                                              <input type="submit" name="submit" value="Add to cart"
                                               class="button btn" />
                                             </fieldset>
                                            </form>
                                           </div>

                                          </div>
                                         </div>
                                        </div>
                                        <div class="col-md-4 product-men mt-5">
                                         <div class="men-pro-item simpleCart_shelfItem">
                                          <div class="men-thumb-item text-center">
                                           <img src="images/m3.jpg" alt="">
                                           <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                             <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                           </div>
                                           <span class="product-new-top">New</span>

                                          </div>
                                          <div class="item-info-product text-center border-top mt-4">
                                           <h4 class="pt-1">
                                            <a href="single.html">Apple iPhone X</a>
                                           </h4>
                                           <div class="info-product-price my-2">
                                            <span class="item_price">$280.00</span>
                                            <del>$300.00</del>
                                           </div>
                                           <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                             <fieldset>
                                              <input type="hidden" name="cmd" value="_cart" />
                                              <input type="hidden" name="add" value="1" />
                                              <input type="hidden" name="business" value=" " />
                                              <input type="hidden" name="item_name" value="Apple iPhone X" />
                                              <input type="hidden" name="amount" value="280.00" />
                                              <input type="hidden" name="discount_amount" value="1.00" />
                                              <input type="hidden" name="currency_code" value="USD" />
                                              <input type="hidden" name="return" value=" " />
                                              <input type="hidden" name="cancel_return" value=" " />
                                              <input type="submit" name="submit" value="Add to cart"
                                               class="button btn" />
                                             </fieldset>
                                            </form>
                                           </div>
                                          </div>
                                         </div>
                                        </div>



                                       </div>
                                       <div class="row">
                                        <div class="col-md-4 product-men mt-5">
                                         <div class="men-pro-item simpleCart_shelfItem">
                                          <div class="men-thumb-item text-center">
                                           <img src="images/m1.jpg" alt="">
                                           <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                             <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                           </div>
                                          </div>
                                          <div class="item-info-product text-center border-top mt-4">
                                           <h4 class="pt-1">
                                            <a href="single.html">Samsung Galaxy J7</a>
                                           </h4>
                                           <div class="info-product-price my-2">
                                            <span class="item_price">$200.00</span>
                                            <del>$280.00</del>
                                           </div>
                                           <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                             <fieldset>
                                              <input type="hidden" name="cmd" value="_cart" />
                                              <input type="hidden" name="add" value="1" />
                                              <input type="hidden" name="business" value=" " />
                                              <input type="hidden" name="item_name"
                                               value="Samsung Galaxy J7" />
                                              <input type="hidden" name="amount" value="200.00" />
                                              <input type="hidden" name="discount_amount" value="1.00" />
                                              <input type="hidden" name="currency_code" value="USD" />
                                              <input type="hidden" name="return" value=" " />
                                              <input type="hidden" name="cancel_return" value=" " />
                                              <input type="submit" name="submit" value="Add to cart"
                                               class="button btn" />
                                             </fieldset>
                                            </form>
                                           </div>
                                          </div>
                                         </div>
                                        </div>
                                        <div class="col-md-4 product-men mt-5">
                                         <div class="men-pro-item simpleCart_shelfItem">
                                          <div class="men-thumb-item text-center">
                                           <img src="images/m2.jpg" alt="">
                                           <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                             <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                           </div>
                                           <span class="product-new-top">New</span>

                                          </div>
                                          <div class="item-info-product text-center border-top mt-4">
                                           <h4 class="pt-1">
                                            <a href="single.html">OPPO A37f</a>
                                           </h4>
                                           <div class="info-product-price my-2">
                                            <span class="item_price">$230.00</span>
                                            <del>$250.00</del>
                                           </div>
                                           <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                             <fieldset>
                                              <input type="hidden" name="cmd" value="_cart" />
                                              <input type="hidden" name="add" value="1" />
                                              <input type="hidden" name="business" value=" " />
                                              <input type="hidden" name="item_name" value="OPPO A37f" />
                                              <input type="hidden" name="amount" value="230.00" />
                                              <input type="hidden" name="discount_amount" value="1.00" />
                                              <input type="hidden" name="currency_code" value="USD" />
                                              <input type="hidden" name="return" value=" " />
                                              <input type="hidden" name="cancel_return" value=" " />
                                              <input type="submit" name="submit" value="Add to cart"
                                               class="button btn" />
                                             </fieldset>
                                            </form>
                                           </div>

                                          </div>
                                         </div>
                                        </div>
                                        <div class="col-md-4 product-men mt-5">
                                         <div class="men-pro-item simpleCart_shelfItem">
                                          <div class="men-thumb-item text-center">
                                           <img src="images/m3.jpg" alt="">
                                           <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                             <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                           </div>
                                           <span class="product-new-top">New</span>

                                          </div>
                                          <div class="item-info-product text-center border-top mt-4">
                                           <h4 class="pt-1">
                                            <a href="single.html">Apple iPhone X</a>
                                           </h4>
                                           <div class="info-product-price my-2">
                                            <span class="item_price">$280.00</span>
                                            <del>$300.00</del>
                                           </div>
                                           <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                             <fieldset>
                                              <input type="hidden" name="cmd" value="_cart" />
                                              <input type="hidden" name="add" value="1" />
                                              <input type="hidden" name="business" value=" " />
                                              <input type="hidden" name="item_name" value="Apple iPhone X" />
                                              <input type="hidden" name="amount" value="280.00" />
                                              <input type="hidden" name="discount_amount" value="1.00" />
                                              <input type="hidden" name="currency_code" value="USD" />
                                              <input type="hidden" name="return" value=" " />
                                              <input type="hidden" name="cancel_return" value=" " />
                                              <input type="submit" name="submit" value="Add to cart"
                                               class="button btn" />
                                             </fieldset>
                                            </form>
                                           </div>
                                          </div>
                                         </div>
                                        </div>



                                       </div>
                                       <div class="row">
                                        <div class="col-md-4 product-men mt-5">
                                         <div class="men-pro-item simpleCart_shelfItem">
                                          <div class="men-thumb-item text-center">
                                           <img src="images/m1.jpg" alt="">
                                           <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                             <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                           </div>
                                          </div>
                                          <div class="item-info-product text-center border-top mt-4">
                                           <h4 class="pt-1">
                                            <a href="single.html">Samsung Galaxy J7</a>
                                           </h4>
                                           <div class="info-product-price my-2">
                                            <span class="item_price">$200.00</span>
                                            <del>$280.00</del>
                                           </div>
                                           <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                             <fieldset>
                                              <input type="hidden" name="cmd" value="_cart" />
                                              <input type="hidden" name="add" value="1" />
                                              <input type="hidden" name="business" value=" " />
                                              <input type="hidden" name="item_name"
                                               value="Samsung Galaxy J7" />
                                              <input type="hidden" name="amount" value="200.00" />
                                              <input type="hidden" name="discount_amount" value="1.00" />
                                              <input type="hidden" name="currency_code" value="USD" />
                                              <input type="hidden" name="return" value=" " />
                                              <input type="hidden" name="cancel_return" value=" " />
                                              <input type="submit" name="submit" value="Add to cart"
                                               class="button btn" />
                                             </fieldset>
                                            </form>
                                           </div>
                                          </div>
                                         </div>
                                        </div>
                                        <div class="col-md-4 product-men mt-5">
                                         <div class="men-pro-item simpleCart_shelfItem">
                                          <div class="men-thumb-item text-center">
                                           <img src="images/m2.jpg" alt="">
                                           <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                             <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                           </div>
                                           <span class="product-new-top">New</span>

                                          </div>
                                          <div class="item-info-product text-center border-top mt-4">
                                           <h4 class="pt-1">
                                            <a href="single.html">OPPO A37f</a>
                                           </h4>
                                           <div class="info-product-price my-2">
                                            <span class="item_price">$230.00</span>
                                            <del>$250.00</del>
                                           </div>
                                           <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                             <fieldset>
                                              <input type="hidden" name="cmd" value="_cart" />
                                              <input type="hidden" name="add" value="1" />
                                              <input type="hidden" name="business" value=" " />
                                              <input type="hidden" name="item_name" value="OPPO A37f" />
                                              <input type="hidden" name="amount" value="230.00" />
                                              <input type="hidden" name="discount_amount" value="1.00" />
                                              <input type="hidden" name="currency_code" value="USD" />
                                              <input type="hidden" name="return" value=" " />
                                              <input type="hidden" name="cancel_return" value=" " />
                                              <input type="submit" name="submit" value="Add to cart"
                                               class="button btn" />
                                             </fieldset>
                                            </form>
                                           </div>

                                          </div>
                                         </div>
                                        </div>
                                        <div class="col-md-4 product-men mt-5">
                                         <div class="men-pro-item simpleCart_shelfItem">
                                          <div class="men-thumb-item text-center">
                                           <img src="images/m3.jpg" alt="">
                                           <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                             <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                           </div>
                                           <span class="product-new-top">New</span>

                                          </div>
                                          <div class="item-info-product text-center border-top mt-4">
                                           <h4 class="pt-1">
                                            <a href="single.html">Apple iPhone X</a>
                                           </h4>
                                           <div class="info-product-price my-2">
                                            <span class="item_price">$280.00</span>
                                            <del>$300.00</del>
                                           </div>
                                           <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                             <fieldset>
                                              <input type="hidden" name="cmd" value="_cart" />
                                              <input type="hidden" name="add" value="1" />
                                              <input type="hidden" name="business" value=" " />
                                              <input type="hidden" name="item_name" value="Apple iPhone X" />
                                              <input type="hidden" name="amount" value="280.00" />
                                              <input type="hidden" name="discount_amount" value="1.00" />
                                              <input type="hidden" name="currency_code" value="USD" />
                                              <input type="hidden" name="return" value=" " />
                                              <input type="hidden" name="cancel_return" value=" " />
                                              <input type="submit" name="submit" value="Add to cart"
                                               class="button btn" />
                                             </fieldset>
                                            </form>
                                           </div>
                                          </div>
                                         </div>
                                        </div>
                                       -->
                                <div class="container row justify-content-center h-100">
                                    <nav aria-label="Page navigation example">
                                        <br>
                                        <ul class="pagination">

                                            <!--
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                    </a>
                                                </li>-->
                                            {{ $productos->links() }}
                                        </ul>
                                    </nav>

                                </div>

                            </div>
                        </div>
                        <!-- //first section -->
                        <!-- second section -->
                        <!--
                                      <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                                       <h3 class="heading-tittle text-center font-italic">Tv & Audio</h3>
                                       <div class="row">
                                        <div class="col-md-4 product-men mt-5">
                                         <div class="men-pro-item simpleCart_shelfItem">
                                          <div class="men-thumb-item text-center">
                                           <img src="images/m4.jpg" alt="">
                                           <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                             <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                           </div>
                                          </div>
                                          <div class="item-info-product text-center border-top mt-4">
                                           <h4 class="pt-1">
                                            <a href="single.html">Sony 80 cm (32 inches)</a>
                                           </h4>
                                           <div class="info-product-price my-2">
                                            <span class="item_price">$320.00</span>
                                            <del>$340.00</del>
                                           </div>
                                           <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                             <fieldset>
                                              <input type="hidden" name="cmd" value="_cart" />
                                              <input type="hidden" name="add" value="1" />
                                              <input type="hidden" name="business" value=" " />
                                              <input type="hidden" name="item_name"
                                               value="Sony 80 cm (32 inches)" />
                                              <input type="hidden" name="amount" value="320.00" />
                                              <input type="hidden" name="discount_amount" value="1.00" />
                                              <input type="hidden" name="currency_code" value="USD" />
                                              <input type="hidden" name="return" value=" " />
                                              <input type="hidden" name="cancel_return" value=" " />
                                              <input type="submit" name="submit" value="Add to cart"
                                               class="button btn" />
                                             </fieldset>
                                            </form>
                                           </div>
                                          </div>
                                         </div>
                                        </div>
                                        <div class="col-md-4 product-men mt-5">
                                         <div class="men-pro-item simpleCart_shelfItem">
                                          <div class="men-thumb-item text-center">
                                           <img src="images/m5.jpg" alt="">
                                           <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                             <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                           </div>
                                           <span class="product-new-top">New</span>

                                          </div>
                                          <div class="item-info-product text-center border-top mt-4">
                                           <h4 class="pt-1">
                                            <a href="single.html">Artis Speaker</a>
                                           </h4>
                                           <div class="info-product-price my-2">
                                            <span class="item_price">$349.00</span>
                                            <del>$399.00</del>
                                           </div>
                                           <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                             <fieldset>
                                              <input type="hidden" name="cmd" value="_cart" />
                                              <input type="hidden" name="add" value="1" />
                                              <input type="hidden" name="business" value=" " />
                                              <input type="hidden" name="item_name" value="Artis Speaker" />
                                              <input type="hidden" name="amount" value="349.00" />
                                              <input type="hidden" name="discount_amount" value="1.00" />
                                              <input type="hidden" name="currency_code" value="USD" />
                                              <input type="hidden" name="return" value=" " />
                                              <input type="hidden" name="cancel_return" value=" " />
                                              <input type="submit" name="submit" value="Add to cart"
                                               class="button btn" />
                                             </fieldset>
                                            </form>
                                           </div>

                                          </div>
                                         </div>
                                        </div>
                                        <div class="col-md-4 product-men mt-5">
                                         <div class="men-pro-item simpleCart_shelfItem">
                                          <div class="men-thumb-item text-center">
                                           <img src="images/m6.jpg" alt="">
                                           <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                             <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                           </div>
                                          </div>
                                          <div class="item-info-product text-center border-top mt-4">
                                           <h4 class="pt-1">
                                            <a href="single.html">Philips Speakers</a>
                                           </h4>
                                           <div class="info-product-price my-2">
                                            <span class="item_price">$249.00</span>
                                            <del>$300.00</del>
                                           </div>
                                           <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                             <fieldset>
                                              <input type="hidden" name="cmd" value="_cart" />
                                              <input type="hidden" name="add" value="1" />
                                              <input type="hidden" name="business" value=" " />
                                              <input type="hidden" name="item_name"
                                               value="Philips Speakers" />
                                              <input type="hidden" name="amount" value="249.00" />
                                              <input type="hidden" name="discount_amount" value="1.00" />
                                              <input type="hidden" name="currency_code" value="USD" />
                                              <input type="hidden" name="return" value=" " />
                                              <input type="hidden" name="cancel_return" value=" " />
                                              <input type="submit" name="submit" value="Add to cart"
                                               class="button btn" />
                                             </fieldset>
                                            </form>
                                           </div>
                                          </div>
                                         </div>
                                        </div>
                                       </div>
                                      </div>
                                      -->
                        <!-- //second section -->
                        <!-- third section -->
                        <div class="product-sec1 product-sec2 px-sm-5 px-3">
                            <div class="row">
                                <h3 class="col-md-4 effect-bg">Summer Carnival</h3>
                                <p class="w3l-nut-middle">Get Extra 10% Off</p>
                                <div class="col-md-8 bg-right-nut">
                                    <img src="images/image1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- //third section -->
                        <!-- fourth section -->
                        <!--
                                      <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mt-4">
                                       <h3 class="heading-tittle text-center font-italic">Large Appliances</h3>
                                       <div class="row">
                                        <div class="col-md-4 product-men mt-5">
                                         <div class="men-pro-item simpleCart_shelfItem">
                                          <div class="men-thumb-item text-center">
                                           <img src="images/m7.jpg" alt="">
                                           <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                             <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                           </div>
                                          </div>
                                          <span class="product-new-top">New</span>
                                          <div class="item-info-product text-center border-top mt-4">
                                           <h4 class="pt-1">
                                            <a href="single.html">Whirlpool 245</a>
                                           </h4>
                                           <div class="info-product-price my-2">
                                            <span class="item_price">$230.00</span>
                                            <del>$280.00</del>
                                           </div>
                                           <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                             <fieldset>
                                              <input type="hidden" name="cmd" value="_cart" />
                                              <input type="hidden" name="add" value="1" />
                                              <input type="hidden" name="business" value=" " />
                                              <input type="hidden" name="item_name" value="Whirlpool 245" />
                                              <input type="hidden" name="amount" value="230.00" />
                                              <input type="hidden" name="discount_amount" value="1.00" />
                                              <input type="hidden" name="currency_code" value="USD" />
                                              <input type="hidden" name="return" value=" " />
                                              <input type="hidden" name="cancel_return" value=" " />
                                              <input type="submit" name="submit" value="Add to cart"
                                               class="button btn" />
                                             </fieldset>
                                            </form>
                                           </div>

                                          </div>
                                         </div>
                                        </div>
                                        <div class="col-md-4 product-men mt-5">
                                         <div class="men-pro-item simpleCart_shelfItem">
                                          <div class="men-thumb-item text-center">
                                           <img src="images/m8.jpg" alt="">
                                           <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                             <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                           </div>
                                          </div>
                                          <div class="item-info-product text-center border-top mt-4">
                                           <h4 class="pt-1">
                                            <a href="single.html">BPL Washing Machine</a>
                                           </h4>
                                           <div class="info-product-price my-2">
                                            <span class="item_price">$180.00</span>
                                            <del>$200.00</del>
                                           </div>
                                           <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                             <fieldset>
                                              <input type="hidden" name="cmd" value="_cart" />
                                              <input type="hidden" name="add" value="1" />
                                              <input type="hidden" name="business" value=" " />
                                              <input type="hidden" name="item_name"
                                               value="BPL Washing Machine" />
                                              <input type="hidden" name="amount" value="180.00" />
                                              <input type="hidden" name="discount_amount" value="1.00" />
                                              <input type="hidden" name="currency_code" value="USD" />
                                              <input type="hidden" name="return" value=" " />
                                              <input type="hidden" name="cancel_return" value=" " />
                                              <input type="submit" name="submit" value="Add to cart"
                                               class="button btn" />
                                             </fieldset>
                                            </form>
                                           </div>

                                          </div>
                                         </div>
                                        </div>
                                        <div class="col-md-4 product-men mt-5">
                                         <div class="men-pro-item simpleCart_shelfItem">
                                          <div class="men-thumb-item text-center">
                                           <img src="images/m9.jpg" alt="">
                                           <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                             <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                           </div>
                                          </div>
                                          <div class="item-info-product text-center border-top mt-4">
                                           <h4 class="pt-1">
                                            <a href="single.html">Microwave Oven</a>
                                           </h4>
                                           <div class="info-product-price my-2">
                                            <span class="item_price">$199.00</span>
                                            <del>$299.00</del>
                                           </div>
                                           <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                             <fieldset>
                                              <input type="hidden" name="cmd" value="_cart" />
                                              <input type="hidden" name="add" value="1" />
                                              <input type="hidden" name="business" value=" " />
                                              <input type="hidden" name="item_name" value="Microwave Oven" />
                                              <input type="hidden" name="amount" value="199.00" />
                                              <input type="hidden" name="discount_amount" value="1.00" />
                                              <input type="hidden" name="currency_code" value="USD" />
                                              <input type="hidden" name="return" value=" " />
                                              <input type="hidden" name="cancel_return" value=" " />
                                              <input type="submit" name="submit" value="Add to cart"
                                               class="button btn" />
                                             </fieldset>
                                            </form>
                                           </div>
                                          </div>
                                         </div>
                                        </div>
                                       </div>
                                      </div>-->
                        <!-- //fourth section -->
                    </div>
                </div>
                <!-- //product left -->

                <!-- product right -->
                <div class="col-lg-3 mt-lg-0 mt-4 p-lg-0 ">
                    <div class="side-bar p-sm-4 p-3">
                        <div class="search-hotel border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Buscar aquí..</h3>
                            <form action="#" method="post">
                                <input type="search" placeholder="Nombre de producto..." name="search" required="">
                                <input type="submit" value=" ">
                            </form>
                        </div>
                        <!-- price -->
                        <div class="range border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Precio</h3>
                            <div class="w3l-range">
                                <ul>
                                    <li>
                                        <a href="#">Debajo S/. 10.00</a>
                                    </li>
                                    <li class="my-1">
                                        <a href="#">S/. 10.00 - S/. 50.00</a>
                                    </li>
                                    <li>
                                        <a href="#">S/. 50.00 - S/. 100.00</a>
                                    </li>
                                    <li class="my-1">
                                        <a href="#">S/. 100.00 - S/. 200.00</a>
                                    </li>
                                    <li>
                                        <a href="#">S/. 200.00 - S/. 350.00</a>
                                    </li>
                                    <li class="mt-1">
                                        <a href="#">Más de S/. 350.00</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- //price -->
                        <!-- discounts -->
                        <div class="left-side border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Descuento</h3>
                            <ul>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">5% o Más</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">10% o Más</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">20% o Más</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">30% o Más</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">50% o Más</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">60% o Más</span>
                                </li>
                            </ul>
                        </div>
                        <!-- //discounts -->
                        <!-- reviews -->
                        <div class="customer-rev border-bottom left-side py-2">
                            <h3 class="agileits-sear-head mb-3">Puntuación de vendedor</h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>5.0</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>4.0</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half"></i>
                                        <span>3.5</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>3.0</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half"></i>
                                        <span>2.5</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- //reviews -->
                        <!-- electronics -->
                        <div class="left-side border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Categorías</h3>
                            <a href="#" class="badge badge-primary">Primary</a>
                            <a href="#" class="badge badge-secondary">Secondary</a>
                            <a href="#" class="badge badge-success">Success</a>
                            <a href="#" class="badge badge-danger">Danger</a>
                            <a href="#" class="badge badge-warning">Warning</a>
                            <a href="#" class="badge badge-info">Info</a>
                            <a href="#" class="badge badge-light">Light</a>
                            <a href="#" class="badge badge-dark">Dark</a>
                        </div>
                        <!-- //electronics -->
                        <!-- delivery -->
                        <!--
                                      <div class="left-side border-bottom py-2">
                                       <h3 class="agileits-sear-head mb-3">Cash On Delivery</h3>
                                       <ul>
                                        <li>
                                         <input type="checkbox" class="checked">
                                         <span class="span">Eligible for Cash On Delivery</span>
                                        </li>
                                       </ul>
                                      </div>-->
                        <!-- //delivery -->
                        <!-- arrivals -->
                        <div class="left-side border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Nuevas llegadas</h3>
                            <ul>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">Últimos 30 días</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">Últimos 90 días</span>
                                </li>
                            </ul>
                        </div>
                        <!-- //arrivals -->
                        <!-- best seller -->
                        <div class="f-grid py-2">
                            <h3 class="agileits-sear-head mb-3">Mejor Vendido</h3>
                            <div class="box-scroll">
                                <div class="scroll">
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-2 col-3 left-mar">
                                            <img src="images/k1.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                                            <a href="">Samsung Galaxy On7 Prime (Gold, 4GB RAM + 64GB Memory)</a>
                                            <a href="" class="price-mar mt-2">$12,990.00</a>
                                        </div>
                                    </div>
                                    <div class="row my-4">
                                        <div class="col-lg-3 col-sm-2 col-3 left-mar">
                                            <img src="images/k2.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                                            <a href="">Haier 195 L 4 Star Direct-Cool Single Door Refrigerator</a>
                                            <a href="" class="price-mar mt-2">$12,499.00</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-2 col-3 left-mar">
                                            <img src="images/k3.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                                            <a href="">Ambrane 13000 mAh Power Bank (P-1310 Premium)</a>
                                            <a href="" class="price-mar mt-2">$1,199.00 </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- //best seller -->
                    </div>
                    <!-- //product right -->
                </div>
            </div>
        </div>
    </div>

@endsection
