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
                                    <img src="{{ asset('../storage/app/' . $value->imagen_f) }}"
                                    data-imagezoom="true"    class="img-fluid" alt="">
                                    </div>
                                </li>
                                <li data-thumb="images/si2.jpg">
                                    <div class="thumb-image">
                                    <img src="{{ asset('../storage/app/' . $value->imagen_p) }}"
                                    data-imagezoom="true"         class="img-fluid" alt="">
                                    </div>
                                </li>
                                <li data-thumb="images/si3.jpg">
                                    <div class="thumb-image">
                                    <img src="{{ asset('../storage/app/' . $value->imagen_iz) }}"
                                    data-imagezoom="true"       class="img-fluid" alt="">
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
                    <a href="faqs.html">
                        <h6 class="mb-3">
                        @foreach ($productos as $key => $value)
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
                            <li class="mb-3">
                                EMIs from $655/month.
                            </li>
                            <li class="mb-3">
                                Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C
                            </li>
                        </ul>
                    </div>
                    <div class="product-single-w3l">
                        <p class="my-3">
                            <i class="far fa-hand-point-right mr-2"></i>
                            <label>1 Year</label>Manufacturer Warranty
                        </p>
                        <ul>
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
                        </ul>
                        <p class="my-sm-4 my-3">
                            <i class="fas fa-retweet mr-3"></i>Net banking & Credit/ Debit/ ATM card
                        </p>
                    </div>
                    <div class="occasion-cart">
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                            <form action="#" method="post">
                                <fieldset>
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="business" value=" " />
                                    <input type="hidden" name="item_name" value="Samsung Galaxy J7 Prime" />
                                    <input type="hidden" name="amount" value="200.00" />
                                    <input type="hidden" name="discount_amount" value="1.00" />
                                    <input type="hidden" name="currency_code" value="USD" />
                                    <input type="hidden" name="return" value=" " />
                                    <input type="hidden" name="cancel_return" value=" " />
                                    <input type="submit" name="submit" value="Añadir al carrito" class="button" />
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   


@endsection
@section('scripts')
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
                'The minimum order quantity is 3. Please add more to your shopping cart before checking out'
            );
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
<script type="text/javascript">
    window.CSRF_TOKEN = '{{ csrf_token() }}';
</script>
<!-- for bootstrap working -->
@yield('scripts')
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

@endsection