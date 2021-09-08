<!DOCTYPE html>
<html lang="en">

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
						<li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">Nosotros</a></li>
						<li class="nav-item"><a class="nav-link" href="course-grid-3.php">Ciclos </a></li>
						 
						<li class="nav-item"><a class="nav-link" href="pricing.php">Precios</a></li>
						<li class="nav-item active"><a class="nav-link" href="contact.php">Contactanos</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log orange" href="#" data-toggle="modal" data-target="#login"><span>Intranet</span></a></li>
                    </ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Contactanos<span class="m_1">Cepre Sur ¡Tu éxito asegurado!</span></h1>
		</div>
	</div>
	
    <div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Necesitas ayuda? seguro que estamos en linea!</h3>
                <p class="lead">Permítanos brindarle más detalles sobre el sitio web de la oferta especial que desea. Por favor, rellene el siguiente formulario.</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-xl-6 col-md-12 col-sm-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="" action="contact.php" name="contactform" method="post">
                            <div class="row row-fluid">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <input type="text" name="name" id="first_name" class="form-control" placeholder="Nombre" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Correo" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Telefono" required="">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Escribe mas detallea.." required=""></textarea>
                                </div>
                                <div class="text-center pd">
                                    <button type="submit" value="SEND" id="submit" name="enviar" class="btn btn-light btn-radius btn-brd grd1 btn-block">Enviar</button>
                                </div>
                            </div>
                        </form>
                        <?php
                            /*if(isset($_POST['enviar']) ){
                                if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['comments'])){
                                    $name=$_POST['name'];
                                    $fono=$_POST['phone'];
                                    $msg=$_POST['comments'];
                                    $email=$_POST['email'];
                                    $header= "From: ". $email . "\r\n";
                                    $header= "Reply-To: ". $email . "\r\n";
                                    $header= "X-Mailer: PHP/" . phpversion();
                                    $mail=@mail("lorena.guevara@unmsm.edu.pe",$msg,$header);
                                    if($mail){
                                        echo "<h4>enviado existosamente!</h4>";
                                    }
                                }
                            }*/
                            $destino='lorena.guevara@unmsm.edu.pe';
                            $name=$_POST['name'];
                            $msg=$_POST['comments'];
                            $fono=$_POST['phone'];
                            $email=$_POST['email'];
                            $to=$destino;
                            $email_subject = "Informacion CEPRESUR $subject";
                            $email_body = "Informes de clientes \n Nombre: $name \n Celular: $fono \n Correo: $email \n Mensaje: \n $msj";
                            $headers= "From: ". $email . "\r\n";
                            mail($to,$email_subject,$email_body, $headers);
                        ?>
                    </div>
                </div><!-- end col -->
				<div class="col-xl-6 col-md-12 col-sm-12">
					<div class="map-box">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243.7648609414935!2d-76.94559539266623!3d-12.16420867993817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b8e6c048c28f%3A0x9853316d9005eabf!2sAv.%20El%20Triunfo%20676%2C%20Cercado%20de%20Lima%2015809!5e0!3m2!1ses-419!2spe!4v1629214857566!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <?php  include('footer.php'); ?>
    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCKjLTXdq6Db3Xit_pW_GK4EXuPRtnod4o"></script>
	<!-- Mapsed JavaScript -->
	<script src="js/mapsed.js"></script>
	<script src="js/01-custom-places-example.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>