<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Emprende Vende</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->
	<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Custom-Files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
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
							<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
								<i class="fas fa-truck mr-2"></i>Abre tu tienda</a>
						</li>
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
								<i class="fas fa-sign-in-alt mr-2"></i> Mi cuenta </a>
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
	<div id="small-dialog1" class="mfp-hide">
		<div class="select-city">
			<h3>
				<i class="fas fa-map-marker"></i> Selecciona tu localidad</h3>
			<select class="list_of_cities">
				<optgroup label="Popular Cities">
					<option selected style="display:none;color:#eee;">Select Ciudad</option>
					<option>Birmingham</option>
					<option>Anchorage</option>
					<option>Phoenix</option>
					<option>Little Rock</option>
					<option>Los Angeles</option>
					<option>Denver</option>
					<option>Bridgeport</option>
					<option>Wilmington</option>
					<option>Jacksonville</option>
					<option>Atlanta</option>
					<option>Honolulu</option>
					<option>Boise</option>
					<option>Chicago</option>
					<option>Indianapolis</option>
				</optgroup>
				<optgroup label="Alabama">
					<option>Birmingham</option>
					<option>Montgomery</option>
					<option>Mobile</option>
					<option>Huntsville</option>
					<option>Tuscaloosa</option>
				</optgroup>
				<optgroup label="Alaska">
					<option>Anchorage</option>
					<option>Fairbanks</option>
					<option>Juneau</option>
					<option>Sitka</option>
					<option>Ketchikan</option>
				</optgroup>
				<optgroup label="Arizona">
					<option>Phoenix</option>
					<option>Tucson</option>
					<option>Mesa</option>
					<option>Chandler</option>
					<option>Glendale</option>
				</optgroup>
				<optgroup label="Arkansas">
					<option>Little Rock</option>
					<option>Fort Smith</option>
					<option>Fayetteville</option>
					<option>Springdale</option>
					<option>Jonesboro</option>
				</optgroup>
				<optgroup label="California">
					<option>Los Angeles</option>
					<option>San Diego</option>
					<option>San Jose</option>
					<option>San Francisco</option>
					<option>Fresno</option>
				</optgroup>
				<optgroup label="Colorado">
					<option>Denver</option>
					<option>Colorado</option>
					<option>Aurora</option>
					<option>Fort Collins</option>
					<option>Lakewood</option>
				</optgroup>
				<optgroup label="Connecticut">
					<option>Bridgeport</option>
					<option>New Haven</option>
					<option>Hartford</option>
					<option>Stamford</option>
					<option>Waterbury</option>
				</optgroup>
				<optgroup label="Delaware">
					<option>Wilmington</option>
					<option>Dover</option>
					<option>Newark</option>
					<option>Bear</option>
					<option>Middletown</option>
				</optgroup>
				<optgroup label="Florida">
					<option>Jacksonville</option>
					<option>Miami</option>
					<option>Tampa</option>
					<option>St. Petersburg</option>
					<option>Orlando</option>
				</optgroup>
				<optgroup label="Georgia">
					<option>Atlanta</option>
					<option>Augusta</option>
					<option>Columbus</option>
					<option>Savannah</option>
					<option>Athens</option>
				</optgroup>
				<optgroup label="Hawaii">
					<option>Honolulu</option>
					<option>Pearl City</option>
					<option>Hilo</option>
					<option>Kailua</option>
					<option>Waipahu</option>
				</optgroup>
				<optgroup label="Idaho">
					<option>Boise</option>
					<option>Nampa</option>
					<option>Meridian</option>
					<option>Idaho Falls</option>
					<option>Pocatello</option>
				</optgroup>
				<optgroup label="Illinois">
					<option>Chicago</option>
					<option>Aurora</option>
					<option>Rockford</option>
					<option>Joliet</option>
					<option>Naperville</option>
				</optgroup>
				<optgroup label="Indiana">
					<option>Indianapolis</option>
					<option>Fort Wayne</option>
					<option>Evansville</option>
					<option>South Bend</option>
					<option>Hammond</option>
				</optgroup>
				<optgroup label="Iowa">
					<option>Des Moines</option>
					<option>Cedar Rapids</option>
					<option>Davenport</option>
					<option>Sioux City</option>
					<option>Waterloo</option>
				</optgroup>
				<optgroup label="Kansas">
					<option>Wichita</option>
					<option>Overland Park</option>
					<option>Kansas City</option>
					<option>Topeka</option>
					<option>Olathe </option>
				</optgroup>
				<optgroup label="Kentucky">
					<option>Louisville</option>
					<option>Lexington</option>
					<option>Bowling Green</option>
					<option>Owensboro</option>
					<option>Covington</option>
				</optgroup>
				<optgroup label="Louisiana">
					<option>New Orleans</option>
					<option>Baton Rouge</option>
					<option>Shreveport</option>
					<option>Metairie</option>
					<option>Lafayette</option>
				</optgroup>
				<optgroup label="Maine">
					<option>Portland</option>
					<option>Lewiston</option>
					<option>Bangor</option>
					<option>South Portland</option>
					<option>Auburn</option>
				</optgroup>
				<optgroup label="Maryland">
					<option>Baltimore</option>
					<option>Frederick</option>
					<option>Rockville</option>
					<option>Gaithersburg</option>
					<option>Bowie</option>
				</optgroup>
				<optgroup label="Massachusetts">
					<option>Boston</option>
					<option>Worcester</option>
					<option>Springfield</option>
					<option>Lowell</option>
					<option>Cambridge</option>
				</optgroup>
				<optgroup label="Michigan">
					<option>Detroit</option>
					<option>Grand Rapids</option>
					<option>Warren</option>
					<option>Sterling Heights</option>
					<option>Lansing</option>
				</optgroup>
				<optgroup label="Minnesota">
					<option>Minneapolis</option>
					<option>St. Paul</option>
					<option>Rochester</option>
					<option>Duluth</option>
					<option>Bloomington</option>
				</optgroup>
				<optgroup label="Mississippi">
					<option>Jackson</option>
					<option>Gulfport</option>
					<option>Southaven</option>
					<option>Hattiesburg</option>
					<option>Biloxi</option>
				</optgroup>
				<optgroup label="Missouri">
					<option>Kansas City</option>
					<option>St. Louis</option>
					<option>Springfield</option>
					<option>Independence</option>
					<option>Columbia</option>
				</optgroup>
				<optgroup label="Montana">
					<option>Billings</option>
					<option>Missoula</option>
					<option>Great Falls</option>
					<option>Bozeman</option>
					<option>Butte-Silver Bow</option>
				</optgroup>
				<optgroup label="Nebraska">
					<option>Omaha</option>
					<option>Lincoln</option>
					<option>Bellevue</option>
					<option>Grand Island</option>
					<option>Kearney</option>
				</optgroup>
				<optgroup label="Nevada">
					<option>Las Vegas</option>
					<option>Henderson</option>
					<option>North Las Vegas</option>
					<option>Reno</option>
					<option>Sunrise Manor</option>
				</optgroup>
				<optgroup label="New Hampshire">
					<option>Manchesters</option>
					<option>Nashua</option>
					<option>Concord</option>
					<option>Dover</option>
					<option>Rochester</option>
				</optgroup>
				<optgroup label="New Jersey">
					<option>Newark</option>
					<option>Jersey City</option>
					<option>Paterson</option>
					<option>Elizabeth</option>
					<option>Edison</option>
				</optgroup>
				<optgroup label="New Mexico">
					<option>Albuquerque</option>
					<option>Las Cruces</option>
					<option>Rio Rancho</option>
					<option>Santa Fe</option>
					<option>Roswell</option>
				</optgroup>
				<optgroup label="New York">
					<option>New York</option>
					<option>Buffalo</option>
					<option>Rochester</option>
					<option>Yonkers</option>
					<option>Syracuse</option>
				</optgroup>
				<optgroup label="North Carolina">
					<option>Charlotte</option>
					<option>Raleigh</option>
					<option>Greensboro</option>
					<option>Winston-Salem</option>
					<option>Durham</option>
				</optgroup>
				<optgroup label="North Dakota">
					<option>Fargo</option>
					<option>Bismarck</option>
					<option>Grand Forks</option>
					<option>Minot</option>
					<option>West Fargo</option>
				</optgroup>
				<optgroup label="Ohio">
					<option>Columbus</option>
					<option>Cleveland</option>
					<option>Cincinnati</option>
					<option>Toledo</option>
					<option>Akron</option>
				</optgroup>
				<optgroup label="Oklahoma">
					<option>Oklahoma City</option>
					<option>Tulsa</option>
					<option>Norman</option>
					<option>Broken Arrow</option>
					<option>Lawton</option>
				</optgroup>
				<optgroup label="Oregon">
					<option>Portland</option>
					<option>Eugene</option>
					<option>Salem</option>
					<option>Gresham</option>
					<option>Hillsboro</option>
				</optgroup>
				<optgroup label="Pennsylvania">
					<option>Philadelphia</option>
					<option>Pittsburgh</option>
					<option>Allentown</option>
					<option>Erie</option>
					<option>Reading</option>
				</optgroup>
				<optgroup label="Rhode Island">
					<option>Providence</option>
					<option>Warwick</option>
					<option>Cranston</option>
					<option>Pawtucket</option>
					<option>East Providence</option>
				</optgroup>
				<optgroup label="South Carolina">
					<option>Columbia</option>
					<option>Charleston</option>
					<option>North Charleston</option>
					<option>Mount Pleasant</option>
					<option>Rock Hill</option>
				</optgroup>
				<optgroup label="South Dakota">
					<option>Sioux Falls</option>
					<option>Rapid City</option>
					<option>Aberdeen</option>
					<option>Brookings</option>
					<option>Watertown</option>
				</optgroup>
				<optgroup label="Tennessee">
					<option>Memphis</option>
					<option>Nashville</option>
					<option>Knoxville</option>
					<option>Chattanooga</option>
					<option>Clarksville</option>
				</optgroup>
				<optgroup label="Texas">
					<option>Houston</option>
					<option>San Antonio</option>
					<option>Dallas</option>
					<option>Austin</option>
					<option>Fort Worth</option>
				</optgroup>
				<optgroup label="Utah">
					<option>Salt Lake City</option>
					<option>West Valley City</option>
					<option>Provo</option>
					<option>West Jordan</option>
					<option>Orem</option>
				</optgroup>
				<optgroup label="Vermont">
					<option>Burlington</option>
					<option>Essex</option>
					<option>South Burlington</option>
					<option>Colchester</option>
					<option>Rutland</option>
				</optgroup>
				<optgroup label="Virginia">
					<option>Virginia Beach</option>
					<option>Norfolk</option>
					<option>Chesapeake</option>
					<option>Arlington</option>
					<option>Richmond</option>
				</optgroup>
				<optgroup label="Washington">
					<option>Seattle</option>
					<option>Spokane</option>
					<option>Tacoma</option>
					<option>Vancouver</option>
					<option>Bellevue</option>
				</optgroup>
				<optgroup label="West Virginia">
					<option>Charleston</option>
					<option>Huntington</option>
					<option>Parkersburg</option>
					<option>Morgantown</option>
					<option>Wheeling</option>
				</optgroup>
				<optgroup label="Wisconsin">
					<option>Milwaukee</option>
					<option>Madison</option>
					<option>Green Bay</option>
					<option>Kenosha</option>
					<option>Racine</option>
				</optgroup>
				<optgroup label="Wyoming">
					<option>Cheyenne</option>
					<option>Casper</option>
					<option>Laramie</option>
					<option>Gillette</option>
					<option>Rock Springs</option>
				</optgroup>
			</select>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //shop locator (popup) -->
	<!-- modals -->
	<!-- log in -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">Iniciar sesión</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" method="post">
						<div class="form-group">
							<label class="col-form-label">Usuario</label>
							<input type="text" class="form-control" placeholder="Usuario" name="Name" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder="Contraseña" name="Password" required="">
						</div>
						<div class="right-w3l">
							<!--<input type="submit" class="form-control" value="Iniciar sesión">-->
							<button class="form-control bg-primary" style="color: white;" onclick="window.location.href='/ProyectoEccomerce/bs-siminta-admin'">Iniciar sesión</button>
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
								<label class="custom-control-label" for="customControlAutosizing">Recordarme?</label>
							</div>
						</div>
						<p class="text-center dont-do mt-3">No tienes una cuenta?
							<a href="#" data-toggle="modal" data-target="#exampleModal2">
								Registrar ahora</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- register -->
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Registrate</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" method="post">
						<div class="form-group">
							<label class="col-form-label">Tu nombre</label>
							<input type="text" class="form-control" placeholder=" " name="Name" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Correo electrónico</label>
							<input type="email" class="form-control" placeholder=" " name="Email" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Contraseña</label>
							<input type="password" class="form-control" placeholder=" " name="Password" id="password1"
								required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Confirmar contraseña</label>
							<input type="password" class="form-control" placeholder=" " name="Confirm Password"
								id="password2" required="">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
								<label class="custom-control-label" for="customControlAutosizing2">Yo acepto términos y condiciones</label>
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing3">
								<label class="custom-control-label" for="customControlAutosizing3">Acepto el uso de mi información para fines promocionales</label>
							
							</div>
						</div>
						<hr>
						<p style="font-size: small;" ALIGN="text-center">Tambien puedes registrarte con alguna de estas redes sociales.</p>
						<div class="row " ALIGN=center>
							<div class="col-12 col-md-6">
								<button type="button" class="btn btn-sm btn-fb"><i class="fab fa-facebook-f pr-1"></i> Facebook</button>
							</div>
							<div class="col-12 col-md-6">
						
								<button type="button" class="btn btn-sm btn-fb"><i class="fab fa-google pr-1"></i> Google</button>
							</div>
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Registrar">
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--Modal de la lista de categorias-->
	<div class="modal fade" id="ModalCategoria" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header badge-primary">
					<h5 class="modal-title" style="color: white;"> Listado de Categorías </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<ul class="list-group list-group-flush">
					<div class="row">	
						<div class="col-xs-6">
							<li class="list-group-item"><a href="./about.html">Electronica</a></li>
							<li class="list-group-item"><a href="./about.html">Fruta</a></li>
					
						</div>
						<div class="col-xs-6">
							<li class="list-group-item"><a href="./about.html">Electronica</a></li>
							<li class="list-group-item"><a href="./about.html">Fruta</a></li>
					
						</div>
						<div class="col-xs-6">
							<li class="list-group-item"><a href="./about.html">Electronica</a></li>
							<li class="list-group-item"><a href="./about.html">Fruta</a></li>
					
						</div>
						<div class="col-xs-6">
							<li class="list-group-item"><a href="./about.html">Electronica</a></li>
							<li class="list-group-item"><a href="./about.html">Fruta</a></li>
					
						</div>
						<div class="col-xs-6">
							<li class="list-group-item"><a href="./about.html">Electronica</a></li>
							<li class="list-group-item"><a href="./about.html">Fruta</a></li>
					
						</div>
						<div class="col-xs-6">
							<li class="list-group-item"><a href="./about.html">Electronica</a></li>
							<li class="list-group-item"><a href="./about.html">Fruta</a></li>
					
						</div>
						<div class="col-xs-6">
							<li class="list-group-item"><a href="./about.html">Medicinal</a></li>
							<li class="list-group-item"><a href="./about.html">Comida de Animales</a></li>
					
						</div>
						<div class="col-xs-6">
							<li class="list-group-item"><a href="./about.html">Medicinal</a></li>
							<li class="list-group-item"><a href="./about.html">Comida de Animales</a></li>
					
						</div>
						<div class="col-xs-6">
							<li class="list-group-item"><a href="./about.html">Medicinal</a></li>
							<li class="list-group-item"><a href="./about.html">Comida de Animales</a></li>
					
						</div>

					</div>					
					  </ul>
				</div>
			</div>
		</div>
	</div>
	<!--Cierre de modal de lista de categorias-->
	<!--Modal de compra en tienda-->
	<div class="modal fade" id="ModalCompraEnTienda" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header badge-primary">
					<h5 class="modal-title" style="color: white;"> Compra por tienda </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<ul class="list-group list-group-flush">
					<div class="row">	
						<div class="col-xs-6">
							<li class="list-group-item"><a href="./faqs.html"><img src="images/logo2.png" alt="img-fluid" class="rounded"></a></li>
							<li class="list-group-item"><a href="./faqs.html"><img src="images/logo2.png" alt="img-fluid" class="rounded"></a></li>
					
						</div>
						<div class="col-xs-6">
							<li class="list-group-item"><a href="./faqs.html"><img src="images/logo2.png" alt="img-fluid" class="rounded"></a></li>
							<li class="list-group-item"><a href="./faqs.html"><img src="images/logo2.png" alt="img-fluid" class="rounded"></a></li>
					
					
						</div>
						<div class="col-xs-6">
							<li class="list-group-item"><a href="./faqs.html"><img src="images/logo2.png" alt="img-fluid" class="rounded"></a></li>
							<li class="list-group-item"><a href="./faqs.html"><img src="images/logo2.png" alt="img-fluid" class="rounded"></a></li>
					
					
						</div>
						<div class="col-xs-6">
							<li class="list-group-item"><a href="./about.html"><img src="images/logo2.png" alt="img-fluid" class="rounded"></a></li>
							<li class="list-group-item"><a href="./about.html"><img src="images/logo2.png" alt="img-fluid" class="rounded"></a></li>
					
					
						</div>
						<div class="col-xs-6">
							<li class="list-group-item"><a href="./about.html"><img src="images/logo2.png" alt="img-fluid" class="rounded"></a></li>
							<li class="list-group-item"><a href="./about.html"><img src="images/logo2.png" alt="img-fluid" class="rounded"></a></li>
					
					
						</div>
						<div class="col-xs-6">
							<li class="list-group-item"><a href="./about.html"><img src="images/logo2.png" alt="img-fluid" class="rounded"></a></li>
							<li class="list-group-item"><a href="./about.html"><img src="images/logo2.png" alt="img-fluid" class="rounded"></a></li>
					
					
						</div>
						<div class="col-xs-6">
							<li class="list-group-item"><a href="./about.html"><img src="images/logo2.png" alt="img-fluid" class="rounded"></a></li>
							<li class="list-group-item"><a href="./about.html"><img src="images/logo2.png" alt="img-fluid" class="rounded"></a></li>
							
					</div>
						<div class="col-xs-6">
							<li class="list-group-item"><a href="./about.html"><img src="images/logo2.png" alt="img-fluid" class="rounded"></a></li>
							<li class="list-group-item"><a href="./about.html"><img src="images/logo2.png" alt="img-fluid" class="rounded"></a></li>
					
					
						</div>
						<div class="col-xs-6">
							<li class="list-group-item"><a href="./about.html"><img src="images/logo2.png" alt="img-fluid" class="rounded"></a></li>
							<li class="list-group-item"><a href="./about.html"><img src="images/logo2.png" alt="img-fluid" class="rounded"></a></li>
					
						</div>

					</div>
					
					  </ul>
				</div>
			</div>
		</div>
	</div>

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
							<a class="nav-link" active href="ofertas.html" style="color:white;">Ofertas</a>
						</li>
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
						<li class="nav-item">
							<a class="nav-link" href="destacados.html" style="color:white;">Destacados</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->
	<!-- banner -->
	<!-- //banner -->
	<!--<div class="div carousel slide">
		<div class="row">
			<div class="card col-xs-12 col-md-2">
				<br>
				<div class="men-thumb-item text-center">
					<img src="images/m1.jpg" class="img-fluid" alt="Responsive image">
					<div class="men-cart-pro">
						<div class="inner-men-cart-pro">
							<a href="single.html" class="link-product-add-cart">Quick View</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-2">
				<div class="men-thumb-item text-center">
					<img src="images/m1.jpg" class="img-fluid" alt="Responsive image">
					<div class="men-cart-pro">
						<div class="inner-men-cart-pro">
							<a href="single.html" class="link-product-add-cart">Quick View</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<div class="col-xs-12 col-md-2">
		<div class="men-thumb-item text-center">
			<img src="images/m1.jpg"class="img-fluid" alt="Responsive image">
			<div class="men-cart-pro">
				<div class="inner-men-cart-pro">
					<a href="single.html" class="link-product-add-cart">Quick View</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-md-2">
		<div class="men-thumb-item text-center">
			<img src="images/m1.jpg"class="img-fluid" alt="Responsive image">
			<div class="men-cart-pro">
				<div class="inner-men-cart-pro">
					<a href="single.html" class="link-product-add-cart">Quick View</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-md-2">
		<div class="men-thumb-item text-center">
			<img src="images/m1.jpg"class="img-fluid" alt="Responsive image">
			<div class="men-cart-pro">
				<div class="inner-men-cart-pro">
					<a href="single.html" class="link-product-add-cart">Quick View</a>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xs-12 col-md-2">
		<div class="men-thumb-item text-center">
			<img src="images/m1.jpg"class="img-fluid" alt="Responsive image">
			<div class="men-cart-pro">
				<div class="inner-men-cart-pro">
					<a href="single.html" class="link-product-add-cart">Quick View</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>-->
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
						<a href="index.html">INICIO</a>
						<i> | </i>
					</li>
					<li>RESUMEN</li>
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
				<div class="alert alert-info" role="alert">
					<span>R</span>ESUMEN
				  </div>
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<blockquote class="blockquote text-center">
					<p class="text-body mb-lg-0">CARRITO DE COMPRAS</p>
				</blockquote>
				<div class="table-responsive">
					<table class="table table-striped table-hover border border-secondary">
						<thead>
							<tr>
								<th>N° ORDEN</th>
								<th>PRODUCTO</th>
								<th>CANTIDAD</th>
								<th>NOMBRE DEL PRODUCTO</th>
								<th>PRECIO</th>
								<th>ELIMINAR</th>
							</tr>
						</thead>
						<tbody>
							<tr class="rem1">
								<td class="invert">1</td>
								<td class="invert-image">
									<a href="single.html">
										<img src="images/a.jpg" alt=" " class="img-responsive">
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
								<td class="invert">Back Cover</td>
								<td class="invert">$259</td>
								<td class="invert">
									<div class="rem">
										<button type="button" class="close" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
								</td>
							</tr>
							<tr class="rem2">
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
										<button type="button" class="close" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
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
										<button type="button" class="close" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="checkout-left">
				<div class="address_form_agile mt-sm-5 mt-4">
					<h1 class="mb-sm-4 mb-3">TUS DATOS <span class="badge badge-secondary"></span></h1>
					<form action="payment.html" method="post" class="creditly-card-form agileinfo_form">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls form-group">
										<input class="billing-address-name form-control" type="text" name="name" placeholder="Nombre Completo" required="">
									</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left form-group">
											<div class="controls">
												<input type="text" class="form-control" placeholder="Numero de Telefono" name="number" required="">
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right form-group">
											<div class="controls">
												<input type="text" class="form-control" placeholder="Referencia" name="landmark" required="">
											</div>
										</div>
									</div>
									<div class="controls form-group">
										<input type="text" class="form-control" placeholder="Ciudad/Provincia" name="city" required="">
									</div>
									<div class="controls form-group">
										<select class="option-w3ls">
											<option>Seleccione su dirección</option>
											<option>Oficina</option>
											<option>Inicio</option>
											<option>Commercial</option>

										</select>
									</div>
								</div>
								<button class="submit check_out btn">Entrega a esta Dirección</button>
							</div>
						</div>
					</form>
					<div class="checkout-right-basket">
						<a href="payment.html">Realizar el Pago
							<span class="far fa-hand-point-right"></span>
						</a>
					</div>
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

<!-- footer -->
<footer>
	<div class="footer-top-first">
		<div class="container py-md-5 py-sm-4 py-3">
			<!-- footer first section -->
			<h2 class="footer-top-head-w3l font-weight-bold mb-2">Conoce sobre EmprendeVende:</h2>
			<p class="footer-main mb-4" style="font-size: xx-small;">
				EmprendeVende es una nueva plataforma online enfocada en reunir marcas y tiendas, bajo el concepto de un Marketplace para todos. Agrupamos en un solo sitio a tus tiendas y marcas favoritas, cada una bajo el formato de Shop-in-Shop (tienda propia con su buscador propio) dentro de nuestra plataforma online. De este modo, acercamos las marcas más importantes a nuestros clientes en un canal complementario y adicional de ventas por internet. ¿Qué es EmprendeVende? Es un mall o centro comercial, que abre tiendas de marcas, llevado al internet: EmprendeVende.com es un mall online o marketplace online.

En EmprendeVende, vive la nueva experiencia de realizar compras por internet en el Mall online de las mejores marcas y retailers. Aquí encontrarás tiendas con productos sobre audífonos, belleza, cámaras fotográficas, celulares, cervezas, colchones, computadoras, cuidado personal, perfumes, deportes, electrodomésticos, hogar,

instrumentos musicales, jardín, joyería, juguetes, lentes, libros, maletas y mochilas, moda hombre, moda mujer, motores, productos para bebés, relojes, salud, supermercado, tablets, TV, útiles escolares, consolas y videojuegos, licores, vitaminas y suplementos, parrillas, cajas chinas y mucho más.

Contamos con muchas marcas importantes dentro de EmprendeVende como: Amphora, ANACAPRI, Artesco, Babiators, Baby Infanti, Bioderma, Blacksheep, Boaonda, Bosch, Casa Rosselló, CaseMania, Casio, Castrol, Club Hogar, Crep Protect, Crepier, D´Sala, Dauss, DC Shoes, Dell, Dewalt, Dickies, Dockers, Dove, Drimer, Duraplast, Electrolux, Enfabebé, Epson, Estilos, Everlast, Far West, Funko, Game Center, Germaine de Capuccini, Giant, Goliat, Grill Store, Groomers, Herschel, Hoseg, Imaco, Indurama, Joaquim Miro, K'allma, Karcher, Kawasaki, Kidsmadehere,

KitchenAid, Klimatic, Komfort, LA Girl, La Peca, La Rochelli, LAB Nutrition, Laguna Pai, Lego, Levi's, LG, Loginstore, Lumberjack, M.bö, Mabe, Maraná, Massimom, Maternelle, Maui And Sons, Michael Kors, Monark, Motorola, Mr. Grill, Musa Grill, My Sign, Mágico, National Geographic, Nautica Watches, Nikon, Nillkin, Northwest, Nutripoint, NutriShop, O'Neill, Oakley, Ogio, Oster, Ovalo 24, Oxford Bikes, Passarela, Peru Game, Philips, Pierre Cardin, Pioneer, Practika, Quality Products, Quiksilver, Reef, Rip Curl, Rosatel, Roxy, Runa Store, RVCA, Sabz Swimwear, Sacco, Scosche, Sicurezza, Similac3, Skullcandy, Smartphones Perú, Soda Jeans, Solé, Sport Fitness, Spy, Stanley, Swiss Gear, Taurus, Tigre, Timberland, Totto, Tramontina, Van Heusen, Victorinox, Volcom, Want, We The Lion, Wenger, Winsor, Xiaomi, Yamaha, YAQUA, Ziol y muchas tiendas más.

En EmprendeVende, uno de nuestros objetivos respecto a las marcas es trabajar juntos y crecer juntos con nuestros socios (Merchant Partners) en el canal online. Con respecto a los usuarios, nuestro objetivo es que puedas experimentar la mejor experiencia de compras por internet, de una forma más rápida y segura. Por eso, contamos con una amplia variedad de métodos de pago.

EmprendeVende cuenta con métodos de pagos seguros y rápidos, entre ellos contamos con: Pago con tarjeta de crédito, pago con tarjeta de débito, Pago Efectivo, Safety Pay, pago contra entrega y store pickup (compra online y recoge en tienda). Visita nuestras redes sociales: Facebook, Twitter y Youtube y encuentra novedades, promociones, descuentos y mucho más.</p>
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
							<i class="fas fa-phone"></i> +222 11 4444 </li>
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
							<input type="email" class="form-control" placeholder="Correo electrónico" name="email" required="">
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
			<!-- brands -->
			<!--
			<div class="sub-some">
				<h5 class="font-weight-bold mb-2">Mobile & Tablets :</h5>
				<ul>
					<li class="m-sm-1">
						<a href="product.html" class="border-right pr-2">Android Phones</a>
					</li>
					<li class="m-sm-1">
						<a href="product.html" class="border-right pr-2">Smartphones</a>
					</li>
					<li class="m-sm-1">
						<a href="product.html" class="border-right pr-2">Feature Phones</a>
					</li>
					<li class="m-sm-1">
						<a href="product.html" class="border-right pr-2">Unboxed Phones</a>
					</li>
					<li class="m-sm-1">
						<a href="product.html" class="border-right pr-2">Refurbished Phones</a>
					</li>
					<li class="m-sm-1">
						<a href="product.html" class="border-right pr-2"> Tablets</a>
					</li>
					<li class="m-sm-1">
						<a href="product.html" class="border-right pr-2">CDMA Phones</a>
					</li>
					<li class="m-sm-1">
						<a href="product.html" class="border-right pr-2">Value Added Services</a>
					</li>
					<li class="m-sm-1">
						<a href="product.html" class="border-right pr-2">Sell Old</a>
					</li>
					<li class="m-sm-1">
						<a href="product.html" class="border-right pr-2">Used Mobiles</a>
					</li>
				</ul>
			</div>
			<div class="sub-some mt-4">
				<h5 class="font-weight-bold mb-2">Computers :</h5>
				<ul>
					<li class="m-sm-1">
						<a href="product.html" class="border-right pr-2">Laptops </a>
					</li>
					<li class="m-sm-1">
						<a href="product.html" class="border-right pr-2">Printers</a>
					</li>
					<li class="m-sm-1">
						<a href="product.html" class="border-right pr-2">Routers</a>
					</li>
					<li class="m-sm-1">
						<a href="product.html" class="border-right pr-2">Ink & Toner Cartridges</a>
					</li>
					<li class="m-sm-1">
						<a href="product.html" class="border-right pr-2">Monitors</a>
					</li>
					<li class="m-sm-1">
						<a href="product.html" class="border-right pr-2">Video Games</a>
					</li>
					<li class="m-sm-1">
						<a href="product.html" class="border-right pr-2">Unboxed & Refurbished Laptops</a>
					</li>
					<li>
						<a href="product.html" class="border-right pr-2">Assembled Desktops</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">Data Cards</a>
					</li>
				</ul>
			</div>
			<div class="sub-some mt-4">
				<h5 class="font-weight-bold mb-2">TV, Audio & Large Appliances :</h5>
				<ul>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">TVs & DTH</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">Home Theatre Systems</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">Hidden Cameras & CCTVs</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">Refrigerators</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">Washing Machines</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2"> Air Conditioners</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">Cameras</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">Speakers</a>
					</li>
				</ul>
			</div>
			<div class="sub-some mt-4">
				<h5 class="font-weight-bold mb-2">Mobile & Laptop Accessories :</h5>
				<ul>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">Headphones</a>
					</li>
					<li class="m-sm-1">
						<a href="product.html" class="border-right pr-2">Power Banks </a>
					</li>
					<li class="m-sm-1">
						<a href="product.html" class="border-right pr-2">Backpacks</a>
					</li>
					<li class="m-sm-1">
						<a href="product.html" class="border-right pr-2">Mobile Cases & Covers</a>
					</li>
					<li class="m-sm-1">
						<a href="product.html" class="border-right pr-2">Pen Drives</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">External Hard Disks</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2"> Mouse</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">Smart Watches & Fitness Bands</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">MicroSD Cards</a>
					</li>
				</ul>
			</div>
			<div class="sub-some mt-4">
				<h5 class="font-weight-bold mb-2">Appliances :</h5>
				<ul>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">Trimmers</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">Hair Dryers</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">Emergency Lights</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">Water Purifiers </a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">Electric Kettles</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">Hair Straighteners</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">Induction Cooktops</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">Sewing Machines</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2"> Geysers</a>
					</li>
				</ul>
			</div>
			<div class="sub-some mt-4">
				<h5 class="font-weight-bold mb-2">Popular on Electro Store</h5>
				<ul>
					<li class="m-sm-1">
						<a href="product.html" class="border-right pr-2">Offers & Coupons</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">Couple Watches</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">Gas Stoves</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2"> Air Coolers</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">Air Purifiers</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">Headphones</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2"> Headsets</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">Pressure Cookers</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">Sandwich Makers</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">Air Friers</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">Irons</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">LED TV</a>
					</li>
					<li class="m-sm-1">
						<a href="product2.html" class="border-right pr-2">Sandwich Makers</a>
					</li>
				</ul>
			</div>-->
			<!-- //brands -->
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
<script src="js/jquery-2.2.3.min.js"></script>
<!-- //jquery -->

<!-- nav smooth scroll -->
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

		if (total < 3) {
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

<!-- scroll seller -->
<script src="js/scroll.js"></script>
<!-- //scroll seller -->

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