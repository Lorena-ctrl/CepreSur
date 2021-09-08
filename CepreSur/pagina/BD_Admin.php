<?php 
    session_start();
    $usuario = $_SESSION['usuario'];
    if(isset($_SESSION['usuario'])){
?>
<?php
    include("conexion.php");
?>
<?php

        $query = mysqli_query($conn,"SELECT * FROM administrador WHERE DNIAdmin = ".$usuario." ");
        $num_adm= mysqli_num_rows($query);
        $row = mysqli_fetch_array($query);
        $nomAdmin=$row['Nombre'];
        //La condicional

?>

<?php
    }else{
        header("location: pagina/index.php");
        exit();
    }
?>