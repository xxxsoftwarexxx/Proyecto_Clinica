<!DOCTYPE html>
<html>
<head>
<title>Clinica UNSAAC</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=devi-width, initial-scale=1">
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
      @yield('opcion')
			<div class="login">
				<ul>
					@if (Auth::guest())
							<li><a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-user" 	aria-hidden="true"></span>Iniciar sesión</a></li>
					@else
							<li><a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
												{{$user_name}}
										</a></li>
							<li><a href="{{ url('/logout') }}"
											onclick="event.preventDefault();
															 document.getElementById('logout-form').submit();">
											Logout
									</a>
									<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
											{{ csrf_field() }}
									</form>
							</li>
							@if(Auth::user()->tipo=='Admi')
								<li><a href="pacientes"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Configuracion</a></li>
							@endif
					@endif
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- //header2 -->
@if(!Auth::guest())
	@if(Auth::user()->tipo=='Medico')
		@include('medicos.sub_menu')
	@endif
	@if(Auth::user()->tipo=='Paciente')
		@yield("Menu")
	@endif
@endif

<!-- //header -->
<div class="header-bottom ">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
				  </button>
					<div class="logo grid">
						<div class="grid__item color-2">
							<div class="row">
							  <div class="col-xs-2 col-md-1"><img src="../images/logo.png" alt=""></div>
								<div class="col-xs-10 col-md-10"><h1><a>CENTRO DE SALUD UNIVERSITARIO UNSAAC</a></h1>
							 </div>
							</div>
						</div>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--horatio">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="inicio" class="menu__link">Inicio</a></li>
							<li class="menu__item"><a href="about" class="menu__link">Sobre nosotros</a></li>
							<li class="menu__item"><a href="gallery" class="menu__link">Especialidades</a></li>
							<li class="menu__item"><a href="contact" class="menu__link">Contactanos</a></li>
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
        @yield('benners')
		<div class="clearfix"></div>
</div>
<!-- //banner -->
@yield('mas')
<!-- content -->
<div class="content">
  <div class="container">
  	@yield('info')
  </div>
</div>
<!-- //content -->
<!-- services -->
<div class="services">
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
        @yield('servicios')
</div>
<!-- //services -->
<!-- team -->
<div class="container">
	<div class="col-sm-4"><img class="img-responsive" src="images/blank.PNG" alt=" " />
</div></div>
<center><azul>Nuestros profesionales</azul></center>
</div>
	<div class="container">
		<div class="col-md-4 ind-gds text-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
			<div class="team-img">
				<img class="img-responsive" src="images/d1.jpg" alt=" "/>
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
			<h4>Dr.Bruno Zanabria Guzman</h4>
			<p>Dentista</p>
		</div>
		<div class="col-md-4 ind-gds text-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
			<div class="team-img">
				<img class="img-responsive" src="images/d2.png" alt=" "/>
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
			<h4>-Dra.Lara Carazas Quispe</h4>
			<p>Psicologia</p>

		</div>
		<div class="col-md-4 ind-gds text-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
			<div class="team-img">
				<img class="img-responsive" src="images/d3.jpg" alt=" "/>
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
			<h4>Dr.Eduardo Chura Huaman</h4>
			<p>Medicina general</p>
		</div>

		<div class="clearfix"></div>
	</div>
</div>
<!-- team -->
<!-- contact -->
<div class="contact">
	<div class="container">

		<div class="col-md-6 contact-right wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
			<bl>Contactanos</bl>
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
			<div class="strip"></div>
		</div>
		<div class="col-md-6 contact-left wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
			<bl>Información</bl>
			<div class="strip"></div>
			<p class="para">Estamos al servicio de los pacientes
      para ofrecer una atencion oportuna y de calidad.</p>
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
										<h9>Ingrese con su cuenta</h9>
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

											<div class="sign-in">
												<input type="submit" value="Iniciar seción" >
											</div>
										</form>
									</div>

								<p>usted esta de acuerdo con nuestros <a href="#">terminos y condiciones</a> and <a href="#">de privacidad</a></p>
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
<!-- //login -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
@yield('scripts')
</body>
</html>
