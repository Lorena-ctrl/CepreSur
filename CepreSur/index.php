<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>CepreSur</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    </head>
<body class="host_version"> 

	<!-- Modal -->
	<!-- Modal -->
	<?php
        include('ingreso.php');
    ?>
    <!-- LOADER -->
	<!-- END LOADER -->	
	
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html">
					<img src="images/logo.png" alt="" height="70px" width="200px"/>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.php">Inicio</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">Nosotros</a></li>
						<li class="nav-item"><a class="nav-link" href="course-grid-3.php">Ciclos </a></li>
						 
						<li class="nav-item"><a class="nav-link" href="pricing.php">Precios</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Contactanos</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log orange" href="#" data-toggle="modal" data-target="#login"><span>Intranet</span></a></li>
                    </ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('images/slider-01.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									<div class="big-tagline">
										<h2><strong>Cepre Sur </strong> academia preuniversitaria</h2>
										<p class="lead">¡Tu éxito asegurado! </p>
											<a href="contact.php" class="hover-btn-new"><span>Contactanos</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="about.php" class="hover-btn-new"><span>Nosotros</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/slider-02.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-left">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight">Clases Online <strong>100% en vivo</strong></h2>
										<p class="lead" data-animation="animated fadeInLeft">Materiales virtuales teórico y práctico + Plataforma interactiva</p>
                                        <p class="lead" data-animation="animated fadeInLeft">Preparate desde cualquier parte del Perú e ingresa a la universidad</p>
											<a href="contact.php" class="hover-btn-new"><span>Contactar</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="pricing.php" class="hover-btn-new"><span>Saber mas</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/slider-03.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><strong>Docentes de pre San Marcos</strong> Materiales virtuales gratis</h2>
										<p class="lead" data-animation="animated fadeInLeft">Plataforma virtual personalizada con materiales interactivos, 
                                            control de asistencia, simulacros virtuales y mas
                                        </p>
											<a href="contact.php" class="hover-btn-new"><span>Contactar</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="about.php" class="hover-btn-new"><span>Saber mas</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Sobre nosotros</h3>
                    <p class="lead">El Centro Preuniversitario CEPRE SUR es una institución educativa cuya misión es complementar la educación y preparación de los jóvenes postulantes.</p>
                </div>
            </div><!-- end title -->
        
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4>Preparando para la universidad desde 2009</h4>
                        <h2>Bienvenido a Cepre Sur</h2>
                        <p>Contamos con prestigiosos catedráticos de la Universidad Nacional Mayor de San Marcos con amplia experiencia en la enseñanza preuniversitaria para que nuestros estudiantes puedan competir con éxito en los diferentes procesos de admisión.</p>

                        <a href="about.php" class="hover-btn-new orange"><span>Conocenos mas</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/about_02.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
			</div>
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/about_03.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>Plataforma personalizada para el alumno</h2>
                        <h5>- Materiales didacticos virtuales (Teoría y practica)</h5>
                        <h5>- Asistencia controlada</h5>
                        <h5>- Accesos a grabaciones</h5>
                        <h5>- Evaluaciones virtuales semanales</h5>
                        <h5>- Simulacros virtuales</h5>
                        <h5>- Reportes de notas</h5>
                        <h5>- Tareas diarias</h5>
                        <a href="contact.php" class="hover-btn-new orange"><span>Saber mas</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <!-- <section class="section lb page-section">
		<div class="container">
			 <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Our history</h3>
                    <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
                </div>
            </div><!-- end title -->
			<!-- <div class="timeline">
				<div class="timeline__wrap">
					<div class="timeline__items">
						<div class="timeline__item">
							<div class="timeline__content img-bg-01">
								<h2>2018</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-02">
								<h2>2015</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-03">
								<h2>2014</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-04">
								<h2>2012</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-01">
								<h2>2010</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-02">
								<h2>2007</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-03">
								<h2>2004</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-04">
								<h2>2002</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<div class="section cl">
		<div class="container">
			<div class="row text-left stat-wrap">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-study"></i></span>
					<p class="stat_count">12000</p>
					<h3>Students</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-online"></i></span>
					<p class="stat_count">240</p>
					<h3>Courses</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-years"></i></span>
					<p class="stat_count">55</p>
					<h3>Ingresantes</h3>
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->

    <div id="plan" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Ciclos disponibles</h3>
                <p>Te brindamos el conocimiento necesario parea tu ingreso desde el nivel en el que te encuentres</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="message-box">
                        <ul class="nav nav-pills nav-stacked" id="myTabs">
                            <li><a class="active" href="#tab1" data-toggle="pill">Ciclos disponibles</a></li>
                            <li><a href="#tab2" data-toggle="pill">Próximos inicios</a></li>
                        </ul>
                    </div>
                </div><!-- end col -->
            </div>

            <hr class="invis">

            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane active fade show" id="tab1">
                            <div class="row"> 
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="course-item">
                                        <div class="image-blog">
                                            <img src="images/blog_1.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="course-br">
                                            <div class="course-title">
                                                <h2><a href="#" title="">Ciclo Semianual</a></h2>
                                            </div>
                                            <div class="course-desc">
                                                <h5>- Conocimiento desde cero</h5>
                                                <h5>- Desarrollo segun prospecto de UNMSM</h5>
                                                <h5>- 80% Teorico y 20% práctico</h5>
                                                <h5>- Evaluaciones virtuales semanales</h5>
                                                <h5>- Simulacros virtuales</h5>
                                                <h5>- Reportes de notas</h5>
                                                <h5>- Tareas diarias</h5>
                                            </div>
                                            <!-- <div class="course-rating">
                                                4.5
                                                <i class="fa fa-star"></i>	
                                                <i class="fa fa-star"></i>	
                                                <i class="fa fa-star"></i>	
                                                <i class="fa fa-star"></i>	
                                                <i class="fa fa-star-half"></i>								
                                            </div> -->
                                        </div>
                                        <div class="course-meta-bot">
                                            <ul>
                                                <li><i class="fa fa-calendar" aria-hidden="true"></i> 6 meses</li>
                                                <li><i class="fa fa-users" aria-hidden="true"></i> 56 vacantes</li>
                                                <li><i class="fa fa-book" aria-hidden="true"></i> 7 materiales</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="course-item">
                                        <div class="image-blog">
                                            <img src="images/blog_2.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="course-br">
                                            <div class="course-title">
                                                <h2><a href="#" title="">Ciclo Semestral</a></h2>
                                            </div>
                                            <div class="blog-desc">
                                                <h5>- Reforzamiento</h5>
                                                <h5>- Desarrollo segun prospecto de UNMSM</h5>
                                                <h5>- 30% Teorico y 70% práctico</h5>
                                                <h5>- Evaluaciones virtuales semanales</h5>
                                                <h5>- Simulacros virtuales</h5>
                                                <h5>- Reportes de notas</h5>
                                                <h5>- Tareas diarias</h5>
                                            </div>
                                            <!-- <div class="course-rating">
                                                4.5
                                                <i class="fa fa-star"></i>	
                                                <i class="fa fa-star"></i>	
                                                <i class="fa fa-star"></i>	
                                                <i class="fa fa-star"></i>	
                                                <i class="fa fa-star-half"></i>								
                                            </div> -->
                                        </div>
                                        <div class="course-meta-bot">
                                            <ul>
                                                <li><i class="fa fa-calendar" aria-hidden="true"></i> 6 meses</li>
                                                <li><i class="fa fa-users" aria-hidden="true"></i> 56 vacantes</li>
                                                <li><i class="fa fa-book" aria-hidden="true"></i> 7 materiales</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- end col -->	
                                
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="course-item">
                                        <div class="image-blog">
                                            <img src="images/blog_3.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="course-br">
                                            <div class="course-title">
                                                <h2><a href="#" title="">Ciclo sabatino</a></h2>
                                            </div>
                                            <div class="course-desc">
                                                <div class="course-desc">
                                                    <h5>- Conocimiento desde cero</h5>
                                                    <h5>- Desarrollo segun prospecto de UNMSM</h5>
                                                    <h5>- 80% Teorico y 20% práctico</h5>
                                                    <h5>- Simulacros virtuales</h5>
                                                    <h5>- Reportes de notas</h5>
                                                    <h5>- Tareas diarias</h5>
                                                    <h5>- Solo sabados</h5>
                                                </div>
                                            </div>
                                            <!-- <div class="course-rating">
                                                4.5
                                                <i class="fa fa-star"></i>	
                                                <i class="fa fa-star"></i>	
                                                <i class="fa fa-star"></i>	
                                                <i class="fa fa-star"></i>	
                                                <i class="fa fa-star-half"></i>								
                                            </div> -->
                                        </div>
                                        <div class="course-meta-bot">
                                            <ul>
                                                <li><i class="fa fa-calendar" aria-hidden="true"></i> 70 clases</li>
                                                <li><i class="fa fa-users" aria-hidden="true"></i> 56 vacantes</li>
                                                <li><i class="fa fa-book" aria-hidden="true"></i> 7 materiales</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end pane -->

                        <div class="tab-pane fade" id="tab2">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>Semianual</h2>
                                            <h3>01/09/2021</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <h5>- Conocimiento desde cero</h5>
                                            <h5>- Desarrollo segun prospecto de UNMSM</h5>
                                            <h5>- 80% Teorico y 20% práctico</h5>
                                            <h5>- Evaluaciones virtuales semanales</h5>
                                            <h5>- Simulacros virtuales</h5>
                                            <h5>- Reportes de notas</h5>
                                            <h5>- Tareas diarias</h5>  
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="contact.php" class="hover-btn-new orange"><span>Contactar</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>Semestral</h2>
                                            <h3>01/09/2021</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <h5>- Reforzamiento</h5>
                                            <h5>- Desarrollo segun prospecto de UNMSM</h5>
                                            <h5>- 30% Teorico y 70% práctico</h5>
                                            <h5>- Evaluaciones virtuales semanales</h5>
                                            <h5>- Simulacros virtuales</h5>
                                            <h5>- Reportes de notas</h5>
                                            <h5>- Tareas diarias</h5>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="contact.php" class="hover-btn-new orange"><span>Contactar</span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>Sabatino</h2>
                                            <h3>07/09/2021</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <h5>- Conocimiento desde cero</h5>
                                            <h5>- Desarrollo segun prospecto de UNMSM</h5>
                                            <h5>- 80% Teorico y 20% práctico</h5>
                                            <h5>- Simulacros virtuales</h5>
                                            <h5>- Reportes de notas</h5>
                                            <h5>- Tareas diarias</h5>
                                            <h5>- Solo sabados</h5>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="contact.php" class="hover-btn-new orange"><span>Contactar</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end pane -->
                    </div><!-- end content -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="testimonials" class="parallax section db parallax-off" style="background-image:url('images/parallax_04.jpg');">
        <div class="container">
            <div class="section-title text-center">
                <h3>Nuestros Ingresantes</h3>
                <p>Ayudamos a cumplir los sueños de ingresar a la universidad de muchos de nuestros alumnos</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="images/testi_01.png" alt="" class="img-fluid">
                                <h4>James Fernando </h4>
                            </div>
                            <div class="desc">
                                <h3>Medicina general</h3>
                                <p class="lead"><i class="fa fa-quote-left"></i> Los profesores son especialistas en su área y nos ponen muchos ejemplos y nos cuentan anécdotas por lo que recomiendo que la gente venga a estudiar a CepreSur. Creo que es la mejor elección.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="images/testi_02.png" alt="" class="img-fluid">
                                <h4>Jacques Philips </h4>
                            </div>
                            <div class="desc">
                                <h3>Ingeniería de sistemas</h3>
                                <p class="lead"><i class="fa fa-quote-left"></i> Los profesores, además de contar con una impresionante calidad humana y estar disponibles para consultas, son profesionales de la materia que imparten, lo que es un punto fundamental para nosotros.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="images/testi_03.png" alt="" class="img-fluid ">
                                <h4>Venanda Mercy </h4>
                            </div>
                            <div class="desc">
                                <h3>Ingeniería Civil</h3>
                                <p class="lead"><i class="fa fa-quote-left"></i> Siento que aquí te preparan para afrontar cualquier reto que llegaras a tener en el examen de admisión y sentir que uno es capaz de ingresar.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="images/testi_01.png" alt="" class="img-fluid">
                                <h4>James Fernando </h4>
                            </div>
                            <div class="desc">
                                <h3> Ingeniería mecanica</h3>
                                <p class="lead"><i class="fa fa-quote-left"></i> Fueron unos meses muy felices en los que aprendía y me divertía. Además, su sistema de enseñanza me permitia practicar constantemente y conocer el tema que estaba estudiando perfectamente.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="images/testi_02.png" alt="" class="img-fluid">
                                <h4>Jacques Philips </h4>
                            </div>
                            <div class="desc">
                                <h3> Telecomunicaciones</h3>
                                <p class="lead"><i class="fa fa-quote-left"></i> Me lo recomendó un amigo que salió muy contento. Yo también terminé muy satisfecho. Tuve una gran acogida por parte de mis compañeros y de mis profesores (que han demostrado un nivel muy alto).</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="images/testi_03.png" alt="" class="img-fluid">
                                <h4>Venanda Mercy </h4>
                            </div>
                            <div class="desc">
                                <h3> Great & Talented Team!</h3>
                                <p class="lead"><i class="fa fa-quote-left"></i> Estoy muy complacido por todo lo vivido y aprendido dentro de CepreSur, en el que tuvimos la oportunidad de ayudarnos entre compañeros y con ayuda de consultas de profesores.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div><!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    

    <?php 
     include('footer.php');
    ?>

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
	<script src="js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
</body>
</html>