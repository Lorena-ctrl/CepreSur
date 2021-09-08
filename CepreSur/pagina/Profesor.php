<?php
    include("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">

<?php
    include("head.php");
?>

<?php
    include("bd_Profesor.php");
?>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <?php
            include("Profesor_Sidebar.php");
        ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="../images/logo.png" alt="CepreSur" />
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="account-dropdown__item">
                                    <a class="text-white" href="../index.php">
                                        <i class="zmdi zmdi-power"></i>Cerrar Sesion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <img src="images/icon/logo-white.png" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                        <div class="image img-cir img-120">
                            <img src="images/icon/avatar-big-01.jpg" alt="John Doe" />
                        </div>
                        <h4 class="name"><?php echo $nombre;?></h4>
                        <a href="#">Sign out</a>
                    </div>
                </div>
            </aside>
            <!-- END HEADER DESKTOP-->

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75"></section>
            <!-- END BREADCRUMB-->

            <section>
                <div class="section__content section__content--p30"> 
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Intranet Profesores</strong>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">
                                            Bienvenido al intranet de profesores. 
                                            Aquí podrás ver el curso que enseñas, información personal, agregar y borrar los materiales que subas.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ID Curso</th>
                                                <th>Nombre</th>
                                                <th class="text-right">N° materiales</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> <?php echo $idCur;?> </td>
                                                <td> <?php echo $nomCur;?> </td>
                                                <td> <?php echo $num_mat;?> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> 
                            <div class="col-lg-4">
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                    <tr>
                                                        <td>Nombre</td>
                                                        <td> <?php echo $nombre;?> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Correo</td>
                                                        <td> <?php echo $correo;?> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Telefono</td>
                                                        <td> <?php echo $telefono;?> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Direccion</td>
                                                        <td> <?php echo $direccion;?> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Estado</td>
                                                        <td> <?php echo $estado;?> </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
        </div>
    </div>
    <?php
    include("footer.php");
    ?>
</body>
</html>
<!-- end document-->
