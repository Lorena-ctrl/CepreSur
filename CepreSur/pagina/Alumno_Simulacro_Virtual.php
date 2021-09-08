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
            pintar_sidebar("alumno-simulacro-virtual",$nomAlu);
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
                                                <a href="#">Simulacro / Simulacro Virtual</a>
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
                        <div class="au-card m-b-30">
                            <div class="au-card-inner">
                                <h3 class="title-2 m-b-40">Simulacro virtual</h3>
                                <?php
                                    $query6 = mysqli_query($conn,"SELECT * FROM simulacro WHERE IdCiclo = ".$row2['IdCiclo']." ");
                                    $num_simulacro1= mysqli_num_rows($query6);
                                    $habilitado='false'; 
                                    if ($num_simulacro1>=1){

                                        $row6 = mysqli_fetch_array($query6);
                                        date_default_timezone_set("America/Lima");
                                        $fechaActual= date("Y-m-d");
                                        $horaActual=date("H:i:s");
                                        $fechaSim=$row6['fecha'];
                                        $horaIni=$row6['horaInicio'];
                                        $horaFin=$row6['horaFin'];
                                           

                                        if ($fechaActual==$fechaSim){
                                            if ($horaIni<=$horaActual && $horaActual<=$horaFin){
                                                echo '
                                                <div class="alert alert-primary" role="alert">
                                                    Simulacro Habilitado!
                                                </div>
                                                ';
                                                $habilitado='true'; 
                                            }
                                        }else{
                                            echo '
                                            <div class="alert alert-danger" role="alert">
                                                Simulacro inhabilitado!
                                            </div>
                                            ';
                                        }
                                    }else{
                                        echo '
                                        <div class="alert alert-danger" role="alert">
                                            Simulacro inhabilitado!
                                        </div>
                                        ';
                                    }
                                ?>
                                <div class="au-card au-card--bg-dark au-card-top-countries m-b-30 bg-dark">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                    <tr>
                                                        <td>Nombre:</td>
                                                        <td class="text-right"><?php echo $row6['nombre'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fecha:</td>
                                                        <td class="text-right"><?php echo $fechaSim;?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hora de inicio:</td>
                                                        <td class="text-right"><?php echo $horaIni;?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hora de fin:</td>
                                                        <td class="text-right"><?php echo $horaFin;?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    if ($habilitado=='false'){
                                        echo '<button type="button" disabled class="btn btn-primary btn-lg btn-block">Iniciar Simulacro</button>';
                                    }else{
                                        echo '<button type="button" onclick="location.href="https://docs.google.com/forms/d/e/1FAIpQLScoWYtcGCJif4qOYD-z20Vrqtv9jVcvbcc45hQaEe5dsklW5w/viewform"" class="btn btn-primary btn-lg btn-block">Iniciar Simulacro</button>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

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