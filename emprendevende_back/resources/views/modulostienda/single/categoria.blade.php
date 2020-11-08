@extends('plantillas.ptienda')
@section('titulo', 'La vitrina')
@section('contenido')
    <div class="page-head_agile_info_w3l page-head_agile_info_w3l-2">

    </div>
    <div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">
            <div class="container">
                <ul class="w3_short">
                    <li>
                        <a href="{{ route('inicio') }}">Inicio</a>
                        <i>|</i>
                    </li>
                    <li>{{ $catselect->nombreCategoria }}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="ads-grid  py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                <span>{{ $catselect->nombreCategoria }}</span>
            </h3>
            <!-- //tittle heading -->

            <!--<div class="side-bar p-sm-4 p-3">-->
           
            <div class="row">
                <!-- product left -->
                <div class="agileinfo-ads-display col-lg-9">
                    <div class="wrapper">
                        <!-- first section -->
                        <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mt-4">
                            <div class="row">

                                @foreach ($productos as $p)
                                    <div class="col-md-4 product-men mt-5">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item text-center">
                                                <img src="{{ asset('../storage/app/' . $p->imagen_f) }}" class="img-fluid"
                                                    alt="{{ $p->nombreProducto }}">
                                                <div class="men-cart-pro">
                                                    <div class="inner-men-cart-pro">
                                                        <a href="single.html" class="link-product-add-cart">Ver</a>
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
                                                        @csrf
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


                        <!-- //3rd section -->
                        <!-- fourth section -->



                    </div>
                </div>
                <!-- //product left -->
                <!-- product right -->
                <div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
                    <div class="side-bar p-sm-4 p-3">
                        <div class="search-hotel border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Buscar producto</h3>
                            <form action="{{ route('tienda.categoria', $catselect->idCategoria) }}" method="get">
                                <input type="search" placeholder="Buscar producto..." name="buscador" required="">
                                <input type="submit" value=" ">
                           
                            <div class="left-side py-2">
                                <span class="badge badge-success">Busca tu producto por empresa</span>
                                <ul>
                                    <li>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="empresas" id="opcion1"
                                                value="todo">
                                            <label class="form-check-label" for="inlineRadio1">
                                                Todos</label>
                                        </div>
                                    </li>
                                    @foreach ($empresas as $key => $value)
                                        <li>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="empresas" id="opcion1"
                                                    value="{{ $value->idEmpresa }}">
                                                <label class="form-check-label" for="inlineRadio1">
                                                    {{ $value->nombreEmpresa }}</label>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="range border-bottom py-2">
                                <h3 class="agileits-sear-head mb-3">Precio</h3>
                                <div class="w3l-range">
                                    <ul>
                                        <li>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="precios" id="opcion1"
                                                    value="todo">
                                                <label class="form-check-label" for="inlineRadio1">
                                                    Menor a 10</label>
                                            </div>
                                        </li>
                                        <li class="my-1">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="precios" id="opcion1"
                                                    value="todo">
                                                <label class="form-check-label" for="inlineRadio1">
                                                    Menor a 50</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="precios" id="opcion1"
                                                    value="todo">
                                                <label class="form-check-label" for="inlineRadio1">
                                                    Menor a 100</label>
                                            </div>
                                        </li>
                                        <li class="my-1">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="precios" id="opcion1"
                                                    value="todo">
                                                <label class="form-check-label" for="inlineRadio1">
                                                    Menor a 200</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="precios" id="opcion1"
                                                    value="todo">
                                                <label class="form-check-label" for="inlineRadio1">
                                                    Menor a 350</label>
                                            </div>
                                        </li>
                                        <li class="mt-1">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="precios" id="opcion1"
                                                    value="todo">
                                                <label class="form-check-label" for="inlineRadio1">
                                                    Mayor a 350</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="search-hotel border-bottom py-2">
                             
                                    <span class="agileits-sear-head mb-3">Ordenar por </span>
                                    <select name="selector" id="">
                                        <option selected="select" disabled> -- Seleccione -- </option>
                                        <option value="asc">Precio: Menor a Mayor</option>
                                        <option value="desc">Precio: Mayor a Menor</option>
                                    </select>
                                    <br>
                                    <button class="btn btn-success"> Buscar</button>
                                </form>
                            </div>
                        </div>
                        <!-- reviews -->
                        <!--
                        <div class="customer-rev border-bottom left-side py-2">
                            <h3 class="agileits-sear-head mb-3">Puntuación de vendedor</h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span>5.0</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <span>4.0</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <span>3.5</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <span>3.0</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <span>2.5</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    -->
                        <!-- //reviews -->
                        <!-- price -->
                        
                        <!-- //price -->
                        <!-- discounts
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
                            </div> -->
                        <!-- //discounts -->
                        <!-- offers -->
                        <!--
                        <div class="left-side border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Ofertas</h3>
                            <ul>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span"></span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span"></span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span"></span>
                                </li>
                            </ul>
                        </div>
                    -->
                        <!-- //offers -->
                        <!-- delivery -->
                        <!--
                            <div class="left-side border-bottom py-2">
                                <h3 class="agileits-sear-head mb-3">Color</h3>
                                <ul>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">Blanco</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">Negro</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">Gris</span>
                                    </li>
                                </ul>
                            </div> -->
                        <!-- //delivery -->
                        <!-- arrivals -->
                        <!--
                        <div class="left-side border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Los mas Nuevos</h3>
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
                    -->
                        <!-- //arrivals -->
                        <!-- Availability -->
                        <!--
                        <div class="left-side py-2">
                            <h3 class="agileits-sear-head mb-3">Disponibilidad</h3>
                            <ul>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">Excluir Agotados</span>
                                </li>
                            </ul>
                        </div>-->
                        <!-- //Availability -->
                    </div>
                </div>
                <!-- //product right -->
            </div>
        </div>
    </div>
@endsection
