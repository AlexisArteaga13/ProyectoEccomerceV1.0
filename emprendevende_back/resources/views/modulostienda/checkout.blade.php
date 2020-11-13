	<!-- page -->
	@extends('plantillas.ptienda')
    @section('titulo', 'La vitrina')
    @section('contenido')
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
					<a href="{{route('inicio')}}">Inicio</a>
						<i>|</i>
					</li>
					<li>Carrito</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- checkout page -->
	<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>C</span>heckout
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<h4 class="mb-sm-4 mb-3">Tu carrito de compras contiene:
					<span>
					@php
						$conteo = 0;
					
					foreach ($productosSelecionados as $key=>$value){
						$conteo ++;
					}
						
					
					
					echo($conteo) 
					@endphp
					Productos</span>
				</h4>
				<div class="table-responsive">
				<form action="{{route('payment')}}" method="POST">
					@csrf
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Producto</th>
								<th>Cantidad</th>
								<th>Nombre de Producto</th>

								<th>Precio</th>
								<th>Quitar</th>
							</tr>
						</thead>
						<tbody>
						@foreach ($cadena_id as $key => $id)
						@foreach ($cadena_cantidad as $key2 => $cantidad)
						@if ($key == $key2)
						@foreach ($productosSelecionados as $value)
						@if ($id == $value->idPRODUCTO)
							<tr class="rem{{ $key + 1 }}">
								<td class="invert">{{ $key + 1 }}</td>
							<input type="hidden" name="id.{{$key+1}}" value="{{$value->idPRODUCTO}}">
								<td class="invert-image">
								<a href="{{route('descripcion',$value->idPRODUCTO)}}">
										<img src="{{ asset('../storage/app/' . $value->imagen_f) }}" alt=" " class="img-responsive">
									</a>
								</td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<!--<div class="entry value-minus">&nbsp;</div>-->
											<div class="entry value">
											<input type="hidden" name="cantidad.{{$key+1}}" value="{{$cantidad}}">
												<span>{{ $cantidad}}</span>
											</div>
											<!--<div class="entry value-plus active">&nbsp;</div>-->
										</div>
									</div>
								</td>
								
								<td class="invert">{{ $value->nombreProducto }}</td>
								<td class="invert">S/.{{ $value->precio }}</td>
								<td class="invert">
									<div class="rem">
										<div class="close{{ $key + 1 }}"> </div>
									</div>
								</td>
							</tr>
							@endif
							@endforeach
							@endif
							@endforeach
							@endforeach
							<!--<tr class="rem2">
								<td class="invert">2</td>
								<td class="invert-image">
									<a href="single2.html">
										<img src="images/a4.jpg" alt=" " class="img-responsive">
									</a>
								</td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value">
												<span>1</span>
											</div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</td>
								<td class="invert">Cordless Trimmer</td>
								<td class="invert">$1,999</td>
								<td class="invert">
									<div class="rem">
										<div class="close2"> </div>
									</div>
								</td>
							</tr>
							<tr class="rem3">
								<td class="invert">3</td>
								<td class="invert-image">
									<a href="single.html">
										<img src="images/a3.jpg" alt=" " class="img-responsive">
									</a>
								</td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value">
												<span>1</span>
											</div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</td>
								<td class="invert">Nikon Camera</td>
								<td class="invert">$37,490</td>
								<td class="invert">
									<div class="rem">
										<div class="close3"> </div>
									</div>
								</td>
							</tr>-->
						</tbody>
					</table>
				</div>
				<h3>Paga por PAYPAL</h3>
				<div id="tab4" class="tab-grid" style="display: block;">
					<div class="row">
						<div class="col-md-6 pay-forms">
							<img class="pp-img" src="images/paypal.png" alt="Image Alternative text" title="Image Title">
							<p>
								Importante: Será redirigido al sitio web de PayPal para completar su pago de forma segura..</p>
							<a class="btn btn-primary">Pago a traves de Paypal</a>
						</div>
						<div class="col-md-6 number-paymk">
							<form action="#" method="post" class="creditly-card-form-2 shopf-sear-headinfo_form">
								<section class="creditly-wrapper payf_wrapper">
									<div class="credit-card-wrapper">
										<div class="first-row form-group">
											<div class="controls">
												<label class="control-label">Nombre de la Tarjeta</label>
												<input class="billing-address-name form-control" type="text" name="nombre_tarjeta" value="" placeholder="John Smith" required>
											</div>
											<div class="paymntf_card_number_grids my-2">
												<div class="fpay_card_number_grid_left">
													<div class="controls">
														<label class="control-label">Numero de serie de la tarjeta</label>
														<input class="number credit-card-number-2 form-control" type="text" name="numero_tarjeta" inputmode="numeric" autocomplete="cc-number"
															autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="•••• •••• •••• ••••" required>
													</div>
												</div>
												<div class="fpay_card_number_grid_right mt-2">
													<div class="controls">
														<label class="control-label">CVV</label>
														<input class="security-code-2 form-control" Â·="" inputmode="numeric" type="text" name="security-code" placeholder="•••" required>
													</div>
												</div>
												<div class="clear"> </div>
											</div>
											<div class="controls">
												<label class="control-label">Fecha de Validacion</label>
												<input class="expiration-month-and-year-2 form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY" required>
											</div>
										</div>
										<input class="submit" type="submit" value="Realizar Pago">
									</div>
								</section>
							</form>
						</div>
					</div>
				</div>
				
				</form>
			</div>
			<div class="checkout-left">
				<div class="address_form_agile mt-sm-5 mt-4">
					<h4 class="mb-sm-4 mb-3">Add a new Details</h4>
					<form action="payment.html" method="post" class="creditly-card-form agileinfo_form">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls form-group">
										<input class="billing-address-name form-control" type="text" name="name" placeholder="Full Name" required="">
									</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left form-group">
											<div class="controls">
												<input type="text" class="form-control" placeholder="Mobile Number" name="number" required="">
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right form-group">
											<div class="controls">
												<input type="text" class="form-control" placeholder="Landmark" name="landmark" required="">
											</div>
										</div>
									</div>
									<div class="controls form-group">
										<input type="text" class="form-control" placeholder="Town/City" name="city" required="">
									</div>
									<div class="controls form-group">
										<select class="option-w3ls">
											<option>Select Address type</option>
											<option>Office</option>
											<option>Home</option>
											<option>Commercial</option>

										</select>
									</div>
								</div>
								<button class="submit check_out btn">Delivery to this Address</button>
							</div>
						</div>
					</form>
					<!--
					<div class="checkout-right-basket">
					<a href="{{route('payment')}}">Ir a Pagar
							<span class="far fa-hand-point-right"></span>
						</a>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<!-- //checkout page -->

	<!-- middle section -->
	<div class="join-w3l1 py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<div class="row">
				<div class="col-lg-6">
					<div class="join-agile text-left p-4">
						<div class="row">
							<div class="col-sm-7 offer-name">
								<h6>Smooth, Rich & Loud Audio</h6>
								<h4 class="mt-2 mb-3">Branded Headphones</h4>
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
								<h6>A Bigger Phone</h6>
								<h4 class="mt-2 mb-3">Smart Phones 5</h4>
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
@endsection
@section('scripts')
<script>
	$(document).ready(function () {
		$(".dropdown").hover(
			function () {
				$('.dropdown-menu', this).stop(true, true).slideDown("fast");
				$(this).toggleClass('open');
			},
			function () {
				$('.dropdown-menu', this).stop(true, true).slideUp("fast");
				$(this).toggleClass('open');
			}
		);
	});
</script>
<!-- //nav smooth scroll -->

<!-- popup modal (for location)-->
<script src="js/jquery.magnific-popup.js"></script>
<script>
	$(document).ready(function () {
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
<script src="js/minicart.js"></script>
<script>
	paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

	paypals.minicarts.cart.on('checkout', function (evt) {
		var items = this.items(),
			len = items.length,
			total = 0,
			i;
		
		// Count the number of each item in the cart
		for (i = 0; i < len; i++) {
			total += items[i].get('quantity');
		}

		if (total < 3 ) {
			alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
			evt.preventDefault();
		}
	});
</script>
<!-- //cart-js -->

<!-- password-script -->
<script>
	window.onload = function () {
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

<!-- quantity -->
<script>
	$('.value-plus').on('click', function () {
		var divUpd = $(this).parent().find('.value'),
			newVal = parseInt(divUpd.text(), 10) + 1;
		divUpd.text(newVal);
	});

	$('.value-minus').on('click', function () {
		var divUpd = $(this).parent().find('.value'),
			newVal = parseInt(divUpd.text(), 10) - 1;
		if (newVal >= 1) divUpd.text(newVal);
	});
</script>
<!--quantity-->
<script>
	$(document).ready(function (c) {
		$('.close1').on('click', function (c) {
			$('.rem1').fadeOut('slow', function (c) {
				$('.rem1').remove();
			});
		});
	});
</script>
<script>
	$(document).ready(function (c) {
		$('.close2').on('click', function (c) {
			$('.rem2').fadeOut('slow', function (c) {
				$('.rem2').remove();
			});
		});
	});
</script>
<script>
	$(document).ready(function (c) {
		$('.close3').on('click', function (c) {
			$('.rem3').fadeOut('slow', function (c) {
				$('.rem3').remove();
			});
		});
	});
</script>
<script>
	$(document).ready(function (c) {
		$('.close4').on('click', function (c) {
			$('.rem4').fadeOut('slow', function (c) {
				$('.rem4').remove();
			});
		});
	});
</script>
<script>
	$(document).ready(function (c) {
		$('.close5').on('click', function (c) {
			$('.rem5').fadeOut('slow', function (c) {
				$('.rem5').remove();
			});
		});
	});
</script>
<script>
	$(document).ready(function (c) {
		$('.close6').on('click', function (c) {
			$('.rem6').fadeOut('slow', function (c) {
				$('.rem6').remove();
			});
		});
	});
</script>
<script>
	$(document).ready(function (c) {
		$('.close7').on('click', function (c) {
			$('.rem7').fadeOut('slow', function (c) {
				$('.rem7').remove();
			});
		});
	});
</script>
<script>
	$(document).ready(function (c) {
		$('.close8').on('click', function (c) {
			$('.rem8').fadeOut('slow', function (c) {
				$('.rem8').remove();
			});
		});
	});
</script>
<script>
	$(document).ready(function (c) {
		$('.close9').on('click', function (c) {
			$('.rem9').fadeOut('slow', function (c) {
				$('.rem9').remove();
			});
		});
	});
</script>
<script>
	$(document).ready(function (c) {
		$('.close10').on('click', function (c) {
			$('.rem10').fadeOut('slow', function (c) {
				$('.rem10').remove();
			});
		});
	});
</script>
<script>
	$(document).ready(function (c) {
		$('.close11').on('click', function (c) {
			$('.rem11').fadeOut('slow', function (c) {
				$('.rem11').remove();
			});
		});
	});
</script>
<script>
	$(document).ready(function (c) {
		$('.close12').on('click', function (c) {
			$('.rem12').fadeOut('slow', function (c) {
				$('.rem12').remove();
			});
		});
	});
</script>
<script>
	$(document).ready(function (c) {
		$('.close13').on('click', function (c) {
			$('.rem13').fadeOut('slow', function (c) {
				$('.rem13').remove();
			});
		});
	});
</script>
<script>
	$(document).ready(function (c) {
		$('.close14').on('click', function (c) {
			$('.rem14').fadeOut('slow', function (c) {
				$('.rem14').remove();
			});
		});
	});
</script>
<script>
	$(document).ready(function (c) {
		$('.close15').on('click', function (c) {
			$('.rem15').fadeOut('slow', function (c) {
				$('.rem15').remove();
			});
		});
	});
</script>
<script>
	$(document).ready(function (c) {
		$('.close16').on('click', function (c) {
			$('.rem16').fadeOut('slow', function (c) {
				$('.rem16').remove();
			});
		});
	});
</script>
<script>
	$(document).ready(function (c) {
		$('.close17').on('click', function (c) {
			$('.rem17').fadeOut('slow', function (c) {
				$('.rem17').remove();
			});
		});
	});
</script>
<script>
	$(document).ready(function (c) {
		$('.close18').on('click', function (c) {
			$('.rem18').fadeOut('slow', function (c) {
				$('.rem18').remove();
			});
		});
	});
</script>
<script>
	$(document).ready(function (c) {
		$('.close19').on('click', function (c) {
			$('.rem19').fadeOut('slow', function (c) {
				$('.rem19').remove();
			});
		});
	});
</script>
<script>
	$(document).ready(function (c) {
		$('.close20').on('click', function (c) {
			$('.rem20').fadeOut('slow', function (c) {
				$('.rem20').remove();
			});
		});
	});
</script>
<script>
	$(document).ready(function (c) {
		$('.close21').on('click', function (c) {
			$('.rem21').fadeOut('slow', function (c) {
				$('.rem21').remove();
			});
		});
	});
</script>
<script>
	$(document).ready(function (c) {
		$('.close22').on('click', function (c) {
			$('.rem22').fadeOut('slow', function (c) {
				$('.rem22').remove();
			});
		});
	});
</script>
<script>
	$(document).ready(function (c) {
		$('.close23').on('click', function (c) {
			$('.rem23').fadeOut('slow', function (c) {
				$('.rem23').remove();
			});
		});
	});
</script>
<script>
	$(document).ready(function (c) {
		$('.close24').on('click', function (c) {
			$('.rem24').fadeOut('slow', function (c) {
				$('.rem24').remove();
			});
		});
	});
</script>
<script>
	$(document).ready(function (c) {
		$('.close25').on('click', function (c) {
			$('.rem25').fadeOut('slow', function (c) {
				$('.rem25').remove();
			});
		});
	});
</script>
<script>
	$(document).ready(function (c) {
		$('.close26').on('click', function (c) {
			$('.rem26').fadeOut('slow', function (c) {
				$('.rem26').remove();
			});
		});
	});
</script>
<script>
	$(document).ready(function (c) {
		$('.close27').on('click', function (c) {
			$('.rem27').fadeOut('slow', function (c) {
				$('.rem27').remove();
			});
		});
	});
</script>
<script>
	$(document).ready(function (c) {
		$('.close28').on('click', function (c) {
			$('.rem28').fadeOut('slow', function (c) {
				$('.rem28').remove();
			});
		});
	});
</script>
<script>
	$(document).ready(function (c) {
		$('.close29').on('click', function (c) {
			$('.rem29').fadeOut('slow', function (c) {
				$('.rem29').remove();
			});
		});
	});
</script>
<script>
	$(document).ready(function (c) {
		$('.close30').on('click', function (c) {
			$('.rem30').fadeOut('slow', function (c) {
				$('.rem30').remove();
			});
		});
	});
</script>
<!-- //quantity -->

<!-- smoothscroll -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smoothscroll -->

<!-- start-smooth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script>
	jQuery(document).ready(function ($) {
		$(".scroll").click(function (event) {
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
	$(document).ready(function () {
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
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- //js-files -->

@endsection