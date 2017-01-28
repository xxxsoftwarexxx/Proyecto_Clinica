<!DOCTYPE html>
<html>
<head>
<title>Clinica UNSAAC</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Infirmary Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">

<script>
		window.Laravel = <?php echo json_encode([
				'csrfToken' => csrf_token(),
		]); ?>
</script>
<!-- //js -->


<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>

	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->

<!--start-date-piker-->
	<script src="js/jquery-ui.js"></script>
		<script>
			$(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
			});
		</script>
<!--/End-date-piker-->
	<script src="js/responsiveslides.min.js"></script>
			<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<body>
<!-- header -->
<div class="header wow zoomIn">
	<div class="container">
		<div class="header_left" data-wow-duration="2s" data-wow-delay="0.5s">
			<ul>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+123 456 7890</li>
				<li><a href="correo@unsaac.edu.pe"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>clinica@unsaac.edu.pe</a></li>
			</ul>
		</div>
		<div class="header_right">
			<div class="login">
				<ul>


					@if (Auth::guest())
							<li><a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-user" 		aria-hidden="true"></span>Iniciar sesión</a></li>

					@else

							<li class="dropdown">

									<a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
											{{$user_name}} <span class="caret"></span>
									</a>

									<ul class="dropdown-menu" role="menu">
											<li>
													<a href="{{ url('/logout') }}"
															onclick="event.preventDefault();
																			 document.getElementById('logout-form').submit();">
															Logout
													</a>

													<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
															{{ csrf_field() }}
													</form>
											</li>

									</ul>
							</li>
							<li>
									<a href="{{ url('/logout') }}"
											onclick="event.preventDefault();
															 document.getElementById('logout-form').submit();">
											Logout
									</a>

									<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
											{{ csrf_field() }}
									</form>
							</li>
					@endif

				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header2 -->
@if(!Auth::guest())
	@if(Auth::user()->tipo=='Paciente')
		
<div class="header wow zoomIn">
	<div class="container">
		<div class="header_right">
			<div class="login">
				<ul>
					<li><a id="Cargar_Datos"> Perfil</a></li>
					<li><a href="#book">Reservar cita</a></li>
					<li><a href="">Reportes</a></li>
		<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
	@endif

@endif

<!-- //header -->
<div class="header-bottom ">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo grid">
						<div class="grid__item color-3">
							<h1><a class="link link--nukun" href="index"><i></i>CLI<span>N</span>ICA</a></h1>
						</div>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--horatio">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="home" class="menu__link">Inicio</a></li>
							<li class="menu__item"><a href="rtabout" class="menu__link">Sobre nosotros</a></li>
							<li class="menu__item"><a href="rtspec" class="menu__link">Especialedades</a></li>
							<li class="menu__item"><a href="rtgallery" class="menu__link">Galería</a></li>
							<li class="menu__item"><a href="rtcontact" class="menu__link">Contactanos</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>

<!-- banner -->

<div class="banner">

				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
				</script>
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider3">
				<li>
					<div class="banner2">
						<div class="container">
							<div class="banner-info">
								<h3>Para Adultos,Jovenes y Adolecentes<span> Planificación Familiar </span>Visítanos </h3>
								<p>Contamos con psicologos expertos, que te guiaran en el tema,
								responderan tus dudas y aconsejaran.</p>
								<a href="#book" class="hvr-outline-out button2 scroll">Ver Mas</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner1">
						<div class="container">
							<div class="banner-info2 text-center">
								<h3>Nuestro Local <span>Visítanos</span></h3>
								<p>Non encontramos en el campus de la universidad,
								nacional de San Antonio Abad del Cuso.
								Av de la Cultura</p>
								<a href="#book" class="hvr-outline-out button2 scroll">Ver</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner2">
						<div class="container">
							<div class="banner-info">
							<h3>Para Adultos,Jovenes y Adolecentes<span> Planificación Familiar </span>Visítanos </h3>
							<p>Contamos con psicologos expertos, que te guiaran en el tema,
							responderan tus dudas y aconsejaran.</p>
							<a href="#book" class="hvr-outline-out button2 scroll">Ver Mas</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner1">
						<div class="container">
							<div class="banner-info2 text-center">
							<h3>Nuestro Local <span>Visítanos</span></h3>
							<p>Non encontramos en el campus de la universidad,
							nacional de San Antonio Abad del Cuso.
							 Av de la Cultura</p>
							<a href="#book" class="hvr-outline-out button2 scroll">Ver</a>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="clearfix"></div>
</div>
<!-- //banner -->
<!-- content -->
<div class="content">
	<div class="container">
		<div class="col-md-4 content_right wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
			<img class="img-responsive" src="images/pic1.jpg" alt=" " />
		</div>
		<div class="col-md-4 content_left wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.2s">
			<div class="welcome">
				<h3>Bienevnido a la clinica UNSAAC</h3>
				<ul>
				<h5>Ofresemos atencion de alta calidad a
				estudiantes universitarios como a personas
				externas; contamos personal altamente
				calificado</h5>
				</ul>
			</div>
		</div>
		@if(!Auth::guest())
		@if(Auth::user()->tipo=='Paciente'||Auth::user()->tipo=='Admi')
		<div name="book" id="book" class="col-md-4 content_middle wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.3s">
			<h3>Reservar una cita</h3>
			<form method="post" action="/reservas/horario">
				  <input type="hidden" name="_token" value="{{csrf_token()}}">
				<select id="Especialidad" name="Especialidad" placeholder="Especialidad"  class="frm-field required sect">
									<option value="null">Seleccionar Especialedad</option>
					@foreach($especialidades as $especialidad)
									<option value="{{$especialidad->codigo}} " name ="Especialidad">{{$especialidad->nombre}}</option>
					@endforeach
				</select>

				<input type="submit" value="Reserver">

			</form>
		</div>
		@endif
		@endif
		<div class="clearfix"></div>
	</div>
</div>
<!-- //content -->
<!-- services -->
<div class="services">
	<div class="container">
		<div class="col-md-4 services_left wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0s">
			<h3>Our Best Services</h3>
			<p class="ser-para" >Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
				sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
			<a href="about.html" class="hvr-outline-out button2">See More About Us</a>
				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider4").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
				</script>
			<div  class="callbacks_container">
				<ul class="rslides" id="slider4">
					<li>
						<div class="ser-bottom">
							<h5>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
							sed quia consequuntur magni dolores eos qui </h5>
							<p>- Alia Smith</p>
						</div>
					</li>
					<li>
						<div class="ser-bottom">
							<h5>Voluptas sit aspernatur aut odit aut fugit,sed quia consequuntur magni dolores
							eos qui ratione voluptatem sequi nesciunt</h5>
							<p>- Thompson</p>
						</div>
					</li>
					<li>
						<div class="ser-bottom">
							<h5>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
							sed quia consequuntur magni dolores eos qui </h5>
							<p>- Federic</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-8 services_right ">
			<div class="list-left text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				<h4>Voluptatem</h4>
				<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
					sed quia consequuntur magni dolores eos qui</p>
			</div>
			<div class="list-left text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
				<span class="glyphicon glyphicon-scissors" aria-hidden="true"></span>
				<h4>Voluptatem</h4>
				<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
					sed quia consequuntur magni dolores eos qui</p>
			</div>
			<div class="list-left text-center no_marg wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.3s">
				<span class="glyphicon glyphicon-apple" aria-hidden="true"></span>
				<h4>Voluptatem</h4>
				<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
					sed quia consequuntur magni dolores eos qui</p>
			</div>
			<div class="list-left text-center no_marg wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.4s">
				<span class="glyphicon glyphicon-education" aria-hidden="true"></span>
				<h4>Voluptatem</h4>
				<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
					sed quia consequuntur magni dolores eos qui</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //services -->
<!-- team -->
<div class="ind-team">
	<div class="container">
		<h3>Profesionales</h3>
		<div class="col-md-4 ind-gds text-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
			<div class="team-img">
				<img class="img-responsive" src="images/pic4.jpg" alt=" "/>
				<div class="team-info">
					<ul>
						<li class="hvr-rectangle-out"><a class="eco1" href="#"></a></li>
						<li class="hvr-rectangle-out"><a class="eco2" href="#"></a></li>
						<li class="hvr-rectangle-out"><a class="eco3" href="#"></a></li>
						<li class="hvr-rectangle-out"><a class="eco4" href="#"></a></li>
						<li class="hvr-rectangle-out"><a class="eco5" href="#"></a></li>
					</ul>
				</div>
			</div>
			<h4>Dr. Federica</h4>
			<p>Dental Surgeon</p>
		</div>
		<div class="col-md-4 ind-gds text-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
			<div class="team-img">
				<img class="img-responsive" src="images/pic5.jpg" alt=" "/>
				<div class="team-info">
					<ul>
						<li class="hvr-rectangle-out"><a class="eco1" href="#"></a></li>
						<li class="hvr-rectangle-out"><a class="eco2" href="#"></a></li>
						<li class="hvr-rectangle-out"><a class="eco3" href="#"></a></li>
						<li class="hvr-rectangle-out"><a class="eco4" href="#"></a></li>
						<li class="hvr-rectangle-out"><a class="eco5" href="#"></a></li>
					</ul>
				</div>
			</div>
			<h4>Dr. Thompson</h4>
			<p>Cardiology</p>

		</div>
		<div class="col-md-4 ind-gds text-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
			<div class="team-img">
				<img class="img-responsive" src="images/pic6.jpg" alt=" "/>
				<div class="team-info">
					<ul>
						<li class="hvr-rectangle-out"><a class="eco1" href="#"></a></li>
						<li class="hvr-rectangle-out"><a class="eco2" href="#"></a></li>
						<li class="hvr-rectangle-out"><a class="eco3" href="#"></a></li>
						<li class="hvr-rectangle-out"><a class="eco4" href="#"></a></li>
						<li class="hvr-rectangle-out"><a class="eco5" href="#"></a></li>
					</ul>
				</div>
			</div>
			<h4>Dr. Victoria</h4>
			<p>Neurology</p>
		</div>

		<div class="clearfix"></div>
	</div>
</div>
<!-- team -->
<!-- capabilities -->
<div class="capacity">
	<div class="container">
		<h3>Capabilities</h3>
		<div class="col-md-3 capabil_grid1 wow fadeInDownBig animated animated text-center" data-wow-delay="0.4s">
			<div class="capil_text">
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='5700' data-delay='.5' data-increment="100">5700</div>
				<p>Happy Patients</p>
			</div>
		</div>
		<div class="col-md-3 capabil_grid2 wow fadeInUpBig animated animated text-center" data-wow-delay="0.4s">
			<div class="capil_text">
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1700' data-delay='.5' data-increment="5">1700</div>
				<p>Our Staff</p>
			</div>
		</div>
		<div class="col-md-3 capabil_grid3 wow fadeInDownBig animated animated text-center" data-wow-delay="0.4s">
			<div class="capil_text">
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='0021' data-delay='.5' data-increment="100">0021</div>
				<p>Foundation</p>
			</div>
		</div>
		<div class="col-md-3 capabil_grid4 wow fadeInUpBig animated animated text-center" data-wow-delay="0.4s">
			<div class="capil_text">
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='2500' data-delay='.5' data-increment="1">2500</div>
				<p>Clients</p>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //capabilities -->
<!-- contact -->
<div class="contact">
	<div class="container">

		<div class="col-md-6 contact-right wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
			<h3>Contactanos</h3>
			<div class="strip"></div>
			<ul class="con-icons">
				<li><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>+123 456 7890</li>
				<li><a href="mailto:info@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>clinica@unsaac.edu.pe</a></li>
			</ul>
			<ul class="fb_icons">
				<li class="hvr-rectangle-out"><a class="fb" href="#"></a></li>
				<li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
				<li class="hvr-rectangle-out"><a class="goog" href="#"></a></li>
				<li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
				<li class="hvr-rectangle-out"><a class="drib" href="#"></a></li>
			</ul>
			<h3>Newsletter Sign up</h3>
			<div class="strip"></div>
			<form action="#" method="post">
				<input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
				<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
				<input type="submit" value="Submit">
			</form>
		</div>
		<div class="col-md-6 contact-left wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
			<h2>Información</h2>
			<div class="strip"></div>
			<p class="para">At vero eos et accusamus et iusto odio dignissimos
			ducimus qui blanditiis praesentium voluptatum deleniti at
			que corrupti quos dolores et quas molestias excepturi sint
			occaecati cupiditate non provident, similique sunt.</p>
			<p class="copy-right">© 2016 Infirmary. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //contact -->
<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">

									<div class="login-right">
										<h3>Sign in with your account</h3>
										<form method="POST" action="/login">
											<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

											<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
													<label for="text" class="col-md-4 control-label" >Dni</label>

													<div class="col-md-6">
															<input id="email" type="text" class="form-control" maxlength="8" name="dni" value="{{ old('dni') }}" required autofocus>

															@if ($errors->has('email'))
																	<span class="help-block">
																			<strong>{{ $errors->first('email') }}</strong>
																	</span>
															@endif
													</div>
											</div>

											<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
													<label for="password" class="col-md-4 control-label">Password</label>

													<div class="col-md-6">
															<input id="password" type="password" class="form-control" name="password" required>

															@if ($errors->has('password'))
																	<span class="help-block">
																			<strong>{{ $errors->first('password') }}</strong>
																	</span>
															@endif
													</div>
											</div>

											<div class="form-group">
													<label for="tipo" class="col-md-4 control-label">Tipo de Usuario</label>
													<div class="col-md-6">
															<select id="tipo"  class="form-control" name="tipo" required>
																<option value="Paciente">Paciente</option>
																<option value="Medico">Medico</option>
																<option value="Admi">Admi</option>
															</select>
													</div>
											</div>

											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>

								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
<!-- login -->
			<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
									<div class="login-bottom">
										<h3>Sign up for free</h3>
										<form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
											<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Dni</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="dni" value="{{ old('dni') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dni') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tipo" class="col-md-4 control-label">tipo</label>

                            <div class="col-md-6">
                              <select name="tipos" id="tipo">
                                <option value="Medico">Medico</option>
                                <option value="Paciente">Paciente</option>
                                <option value="Admi">Admi</option>
                              </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>


									</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>










			<div class="modal fade" id="Mo_Datos_Paciente" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">

									<div class="login-right">
										<form role="form" method="get" action="/reservas_Almacenar" autocomplete="off">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="modal-body">

              <div id="Datos_Reserva">
              <form method="POST" action="/pacientes/{{ $Datos_Paciente->dni }}" autocomplete="off">
          {{csrf_field()}}
          {{method_field('PUT')}}

            <fieldset>

            <div class="text-center"><h2 align="center">Modificar pacientes</h2>
            </div></br>

            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <select onclick="MostrarFormulario()" id="Tipo_pacientes" name="tipo_paciente" placeholder="Tipo pacientes" class="form-control" required>
                        <option value="ESTUDIANTE">ESTUDIANTE</option>
                        <option value="PERSONA EXTERNA" >PERSONA EXTERNA</option>
                      </select>
                  </div>
            </div></br></br>


            <div id='Seccion_Estudiante'>
                <div class="form-group">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                    <div class="col-md-6 col-xs-10">
                        <input id="Codigo" name="codigo" placeholder="Código" class="form-control">
                    </div>
                </div></br></br>

                <div class="form-group">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                    <div class="col-md-6 col-xs-10">
                        <input id="Escuela_Profesional" name="Escuela_Profesional" placeholder="Escuela_Profesional" class="form-control">
                    </div>
                </div></br>
            </div>

            <div id="Seccion_General">
                <div class="form-group">
                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                      <div class="col-md-6 col-xs-10">
                          <input id="dni" name="dni" placeholder="DNI" class="form-control" required>
                      </div>
                </div>
                </div></br></br>

                <div class="form-group">
                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-lock bigicon"></i></span>
                      <div class="col-md-6 col-xs-10">
                          <input id="Password" type="Password" name="contraseña" placeholder="Password" class="form-control" required>
                      </div>
                </div></br></br>

                <div class="form-group">
                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                      <div class="col-md-6 col-xs-10">
                          <input id="Nombres" name="nombres" placeholder="Nombres" class="form-control" required>
                      </div>
                </div></br></br>

                <div class="form-group">
                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                      <div class="col-md-6 col-xs-10">
                          <input id="Apellidos" name="apellidos" placeholder="Apellidos" class="form-control" required>
                      </div>
                </div></br></br>

                <div class="form-group">
                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-calendar bigicon"></i></span>

                      <div class="col-md-6 col-xs-10">
                          <input id="Fecha_Nacimiento" type ="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" class="form-control" required>
                      </div>
                </div></br></br>

               <div class="form-group">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>

                    <div class="col-md-6 col-xs-10">
                        <select class="form-control" id="Sexo" name="sexo">
                          <option>MASCULINO</option>
                          <option>FEMENINO</option>
                        </select>
                    </div>
              </div></br></br>


              <div class="form-group">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-phone bigicon"></i></span>

                    <div class="col-md-6 col-xs-10">
                        <input id="Telefono" name="telefono" placeholder="Teléfono" class="form-control" required>
                    </div>
              </div></br></br>

                 <div class="form-group">
                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>

                      <div class="col-md-6 col-xs-10">
                          <input id="E_mail" name="correo" placeholder="E-Mail" class="form-control" required>
                      </div>
                </div></br></br>


                <div class="form-group">
                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-home bigicon"></i></span>

                      <div class="col-md-6 col-xs-10">
                          <input id="Direccion" name="direccion" placeholder="Dirección" class="form-control" required>
                      </div>
                </div></br></br>

                <div class="form-group">
                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-home bigicon"></i></span>

                      <div class="col-md-6 col-xs-10">
                          <select id="Estado" name="estado" placeholder="Estado" class="form-control">
                              <option>Habilitado</option>
                              <option>Deshabilitado</option>
                          </select>

                      </div>
                </div></br></br>


                <div class="form-group">
                      <div class="col-md-12 text-center">
                          <input type="submit" style="width:80px" class="btn btn-success" align="center" class="form-control" value="Guardar">
                          <button type="reset" style="width:80px" class="btn btn-primary" align="center" class="form-control" >Limpiar</button>

                      </div>
                </div></br></br>
            </div>

            </fieldset>


       </form>

									</div>

								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>

<!-- //login -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

<script>
$("#Cargar_Datos").click(function(event){
      $('#Mo_Datos_Paciente').modal({
      show: 'true'
  });
});
</script>
</body>
</html>
