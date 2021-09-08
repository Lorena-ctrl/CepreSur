<!DOCTYPE html>
<html lang="en">

<?php
    include("head.php");
    include("bd_Alumno.php");
?>
<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <?php
            include("Alumno_Sidebar.php");
            pintar_sidebar("alumno-simulacro-notas",$nomAlu);
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
                                                <a href="#">Simulacro / Notas</a>
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
                <div class="section__content section__content--p30 justify-content-center">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card border border-success">
                                <div class="card-header">
                                    <strong class="card-title">Mis notas</strong>
                                </div>
                                <div class="card-body">
                                    <canvas id="sales-chart"></canvas>
                                </div>
                            </div>
                        </div>
                        <?php
                            $query6 = mysqli_query($conn,"SELECT * FROM simulacro WHERE IdCiclo = ".$row2['IdCiclo']." ");
                            $num_simulacro1= mysqli_num_rows($query6);
                            if ($num_simulacro1>=1){
                                for ($i=0; $i<$num_simulacro1; $i++) {
                                    $row6 = mysqli_fetch_array($query6);//llamo cada clase
                                    $query7 = mysqli_query($conn,"SELECT * FROM notasimulacro WHERE IdSimulacro = ".$row6['IdSimulacro']." ");
                                    $row7 = mysqli_fetch_array($query7);
                                    $num_notas= mysqli_num_rows($query7);
                                } 
                            }
                            

                            
                        ?>
                        <div class="col-lg-4">
                            <div class="statistic__item">
                                <h2 class="number"><?php echo $num_notas;?></h2>
                                <span class="desc">participantes</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                            </div>
                            <div class="statistic__item">
                                <h2 class="number"><?php echo $row7['valor']; ?></h2>
                                <span class="desc">nota del último simulacro</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

            <!-- STATISTIC-->
            <section>
                <div class="section__content section__content--p30 justify-content-center">
                    <div class="col-lg-12">
                        <div class="table-responsive table--no-card m-b-30">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Fecha</th>
                                        <th>Nota min</th>
                                        <th class="text-right">Nota</th>
                                        <th class="text-right">Nota máx</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query4 = mysqli_query($conn,"SELECT * FROM simulacro WHERE IdCiclo = ".$row2['IdCiclo']." ");
                                        $num_simulacro= mysqli_num_rows($query4);


                                        for ($i=0; $i<$num_simulacro; $i++) {
                                            $row4 = mysqli_fetch_array($query4);//llamo cada clase
                                            $query5 = mysqli_query($conn,"SELECT * FROM notasimulacro WHERE IdSimulacro = ".$row4['IdSimulacro']." ");
                                            $num_notas= mysqli_num_rows($query5);
                                            //echo $num_clase;
                                            if($num_notas > 0) {
                                                //echo 'curso'. $num_curso;
                                                $row5 = mysqli_fetch_array($query5);
                                                    echo '
                                                    <tr>
                                                        <td>'.$row4['nombre'].'</td>
                                                        <td>'.$row4['fecha'].'</td>
                                                        <td>300</td>
                                                        <td class="text-right" >'.$row5['valor'].'</td>
                                                        <td class="text-right text-center">1200</td>
                                                    </tr>';
                                            }
                                        
                                        } 
                                    ?>
                                </tbody>
                            </table>
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