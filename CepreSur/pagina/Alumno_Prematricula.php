<!DOCTYPE html>
<html lang="en">

<?php
    include("head.php");
    include ('bd_Alumno.php');
?>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <?php
            include("Alumno_Sidebar.php");
            pintar_sidebar("alumno-prematricula",$nomAlu);
        ?>
        <!-- END MENU SIDEBAR-->
        
        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <?php
                include("header_aside.php");
            ?>
            <!-- END HEADER DESKTOP-->

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">Tu estas aqui:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">Prematricula</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->
            <!-- STATISTIC-->
            <section class="statistic">
                <div class="section__content section__content--p30">
                    <div class="row justify-content-center">
                    <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading">Atención!</h4>
                                    <p>Cuando realiza la reserva de matricula, tiene un plazo máximo de 1 día para realizar la cancelación en nuestro local.</p>
                                    <hr>
                                    <p class="mb-0">Acercarse al local con codigo de alumno y el respectivo pago.</p>
                                </div>
                        <div class="au-card m-b-30">
                        
                            <div class="au-card-inner">
                                <h3 class="title-2 m-b-40">Prematricula</h3>
                                
                                <?php
                                    $query6 = mysqli_query($conn,"SELECT * FROM ciclo");
                                    $nr_ciclo= mysqli_num_rows($query6);
                                    
                                    $fechaIni='---';
                                    $fechaFin='---';
                                    $habilitado='false';  
                                    $mensaje='false';

                                    $query9 = mysqli_query($conn,"SELECT * FROM prematricula where DNIAlumno=".$row['DNIAlumno']."");
                                    $nr_preA= mysqli_num_rows($query9);

                                    if ($nr_ciclo==0 || $nr_preA>=1){
                                        echo '
                                        <div class="alert alert-danger" role="alert">
                                            Prematricula inhabilitada!
                                        </div>
                                        ';
                                        if($nr_preA>=1){
                                            $mensaje='true';
                                        }
                                    }else{
                                        date_default_timezone_set("America/Lima");
                                        $fechaActual= date("Y-m-d");
                                        $horaActual=date("H:i:s");

                                        for($i=0;$i<$nr_ciclo;$i++){
                                            $row6 = mysqli_fetch_array($query6);
                                            $fechaIni=$row6['fechaInicio'];
                                            $fechaFin=$row6['fechaFin'];

                                            if ($fechaIni>= $fechaActual && $horaActual<=$fechaFin ){
                                                $habilitado='true';
                                            }
                                        }
                                        if ($habilitado=='true'){
                                            echo '
                                            <div class="alert alert-primary" role="alert">
                                                Prematricula Habilitada!
                                            </div>
                                            ';
                                        }else{
                                            echo '
                                            <div class="alert alert-danger" role="alert">
                                                Prematricula inhabilitada!
                                            </div>
                                            ';
                                        }
                                    }
                                    
                                ?>
                                <div class="au-card au-card--bg-dark au-card-top-countries m-b-30 bg-dark">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                    <tr>
                                                        <td>Inicio de matricula:</td>
                                                        <td class="text-right"><?php echo $fechaIni;?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fin de matricula:</td>
                                                        <td class="text-right"><?php echo $fechaFin;?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    if ($habilitado=='false'){
                                        echo '<button type="button" disabled class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#mediumModal">Reservar matricula</button>';
                                    }else{
                                        echo '<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#mediumModal">Reservar matricula</button>';
                                    }
                                    if($mensaje=='true'){
                                        echo '  <br>
                                        <div class="alert alert-primary" role="alert">
                                            Felicidades <b> ya reservaste </b> tu matrícula, <br> acercate 
                                            a la sede mas cercana para  <br> terminar el proceso
                                        </div>
                                        ';
                                    }
                                ?>
                                

                            </div>
                            <br>
                        </div>
                        
                    </div>
                    
                </div>
                
            </section>
            <!-- END STATISTIC-->
            <!-- modal medium -->
			<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">Prematricula</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <form action="DB_Alumno_Prematricula.php" method="post"  id="reservar" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label">Codigo</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <p class="form-control-static"><?php echo $row['codigo'];?></p>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="select" class=" form-control-label">Sede</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select name="sede" id="sede" class="form-control">
                                                    <option value="0">-----</option>
                                                    <option value="1">Villa María del Triunfo</option>
                                                    <option value="2">San Juan de Miraflores</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="select" class=" form-control-label">Ciclo</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select name="ciclo" id="ciclo" class="form-control">
                                                    <option value="">-----</option>
                                                    <option value="Semianual">Semianual</option>
                                                    <option value="Semestral">Semestral</option>
                                                    <option value="Sabatino">Sabatino</option>
                                                    <option value="Reforzamiento">Reforzamiento</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="select" class=" form-control-label">Aula</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select name="aula" id="aula" class="form-control">
                                                    <option value="0">-----</option>
                                                    <option value="1">235</option>
                                                    <option value="1">654</option>
                                                    <option value="1">965</option>
                                                    <option value="1">624</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer justify-content-end">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Confirmar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>
			<!-- end modal medium -->
                                    
            <?php
        include("footer_pag.php");
    ?>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <?php
    include("footer.php");
    ?>
</body>

</html>