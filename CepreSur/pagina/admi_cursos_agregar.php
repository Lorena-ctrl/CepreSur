<?php
    include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">

<?php
    include("head.php");
    include ('BD_Admin.php');
?>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <?php
            include("admi_sidebar.php");
            pintar_sidebar("Cursos",$nomAdmin);
        ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <?php
                include("admi_header.php");
            ?>
            <!--Por sea caso aqui va el sidebar-->
            <!-- END HEADER DESKTOP-->

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">Te encuentras en:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">Cursos</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <a class="au-btn au-btn-icon au-btn--black2" href="admi_cursos.php">
                                        <i class="fa fa-arrow-left"></i>Regresar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->
            <br><br>
            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <div class="card">
                                    <div class="text-center card-header">Crear Curso</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Curso</h3>
                                        </div>
                                        <hr>
                                        <form action="admi_cursos_agregar.php" method="post" novalidate="novalidate">
                                            <div class="form-group">
                                                <label class="control-label mb-1">Nombre</label>
                                                <input type="text" id="nombre" name="nombre" placeholder="Ingresar Nombre" class="form-control">
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <span id="payment-button-amount">Registrar</span>
                                                </button>
                                            </div>
                                            <?php
                                                if(isset($_POST['nombre'])){
                                                    if(strlen($_POST['nombre'])){
                                                        $nombre = $_POST["nombre"];
                                                        $query = mysqli_query($conn,"SELECT * FROM curso WHERE nombre = '".$nombre."' ");
                                                        $nr = mysqli_num_rows($query);
                                                        if($nr > 0){
                                                            ?>
                                                                <br>
                                                                <div class="text-center alert alert-warning" role="alert">
                                                                    ¡Ya existe el curso!
                                                                </div>
                                                            <?php
                                                        }else{
                                                            $sql ="INSERT INTO curso (nombre) VALUES ('$nombre')";
                                                            $resultado= mysqli_query($conn, $sql);
                                                            if(!$resultado){
                                                                ?>
                                                                    <br>
                                                                    <div class="text-center alert alert-danger" role="alert">
                                                                        ¡No se logro realizar el registro!
                                                                    </div>
                                                                <?php
                                                            }else{
                                                                if(!$resultado){
                                                                    ?>
                                                                        <br>
                                                                        <div class="text-center alert alert-danger" role="alert">
                                                                            ¡No se logro realizar el registro!
                                                                        </div>
                                                                    <?php
                                                                }else{
                                                                    ?> 
                                                                        <br>
                                                                        <div class="text-center alert alert-success" role="alert">
                                                                            ¡Se ha registrado exitosamente!
                                                                        </div>
                                                                    <?php
                                                                }
                                                                
                                                            }
                                                        }
                                                    }else{
                                                        ?> 
                                                            <br>
                                                            <div class="alert alert-warning" role="alert">
                                                                ¡Por favor ingrese los datos!
                                                            </div>
                                                        <?php
                                                    }
                                                }    
                                            ?>
                                        </form>
                                    </div>
                                </div>
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
