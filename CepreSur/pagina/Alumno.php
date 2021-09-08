<?php
    include("bd_Alumno.php");
?>
<!DOCTYPE html>
<html lang="en">

<?php
    include("head.php");
?>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <?php
            include("Alumno_Sidebar.php");
            pintar_sidebar("alumno",$nomAlu);
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
                                                <a href="#">Mi información</a>
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
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <a class="card-body bg-per bg-perA text-left" href="Alumno_Perfil.php">
                                        <i class="fas fa-female"></i>
                                        <i class="fas fa-male"></i> Mi perfil
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <a class="card-body bg-per bg-perB text-left" href="Alumno_Material.php">
                                    <i class="fas fa-book"></i> Materiales
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <a class="card-body bg-per bg-perC text-left">
                                    <i class="zmdi zmdi-calendar"></i> Mis clases
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-8">
                                <!-- RECENT REPORT 2-->
                                <aside class="profile-nav alt">
                                    <section class="card">
                                        <div class="card-header user-header alt bg-dark">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h3 class="text-light display-6">Último mes matriculado</h3>
                                                    <p>Información del aula</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="card-body">
                                            <div class="row form-group">
                                                <div class="col col-lg-6">
                                                    <strong>Ciclo: </strong> <?php echo $nomCiclo;?>
                                                </div>
                                                <div class="col col col-md-6">
                                                    <strong>Aula: </strong> <?php echo $nAula;?>
                                                </div>
                                                <div class="col col-md-6">
                                                    <strong>Fecha de inicio: </strong> <?php echo $fechaI;?>
                                                </div>
                                                <div class="col col-md-6">
                                                    <strong>Fecha de fin: </strong><?php echo $fechaF;?>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <strong>Frecuencia: </strong><?php echo $frecuencia;?>
                                                </div>
                                                <div class="col col-md-6">
                                                    <strong>Nro.Cursos: </strong>8
                                                </div>
                                                <div class="col col-md-6">
                                                    <strong>Nro.Sesiones: </strong><?php echo $nSesion;?>
                                                </div>
                                            </div>
                                        </div>

                                    </section>
                                </aside>
                                <!-- END RECENT REPORT 2             -->

                                <!-- RECENT REPORT 2-->
                                <aside class="profile-nav alt">
                                    <section class="card">
                                        <div class="card-header user-header alt bg-dark">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h3 class="text-light display-6">Notas de tus simulacros</h3>
                                                    <p>Información de tu progreso en tus simulacros</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <canvas id="team-chart"></canvas>
                                        </div>

                                    </section>
                                </aside>
                                <!-- END RECENT REPORT 2             -->
                            </div>
                            <div class="col-xl-4">
                                <!-- TASK PROGRESS-->
                                <div class="card">
                                    <div class="card-header bg-secondary">
                                        <strong class="card-title text-light">Proximos ciclos</strong>
                                    </div>
                                    <div class="card-body text-white bg-warning">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                    <tr>
                                                        <td><strong>Ciclo</strong></td>
                                                        <td class="text-right"><strong>Fecha de inicio</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Semianual</td>
                                                        <td class="text-right">01/08/2021</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Semestral</td>
                                                        <td class="text-right">01/08/2021</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sabatino</td>
                                                        <td class="text-right">01/08/2021</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <button type="button" class="btn btn-outline-secondary btn-lg">Reservar Matricula</button>
                                    </div>
                                </div>
                                <!-- END TASK PROGRESS-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
<!-- end document-->
