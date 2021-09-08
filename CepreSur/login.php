<?php
    include("pagina/conexion.php");
?>
<?php
    session_start();
    $mensaje='true';
    if(strlen($_POST['usuario']) >= 1 && strlen($_POST['clave']) >= 1 ){
        

        $nombre = $_POST["usuario"];
        $pass = $_POST["clave"];
        //$query = mysqli_query($conn,"SELECT * FROM persona WHERE usuario = '".$nombre."' and clave = '".$pass."'");
        
        $query1 = mysqli_query($conn,"SELECT * FROM administrador WHERE DNIAdmin = ".$nombre." ");
        $query2 = mysqli_query($conn,"SELECT * FROM profesor WHERE DNIProfesor = ".$nombre." ");
        $query3 = mysqli_query($conn,"SELECT * FROM alumno WHERE DNIAlumno = ".$nombre." ");
         

        $nr1 = mysqli_num_rows($query1);
        $row1 = mysqli_fetch_array($query1);

        $nr2 = mysqli_num_rows($query2);
        $row2 = mysqli_fetch_array($query2);

        $nr3 = mysqli_num_rows($query3);
        $row3 = mysqli_fetch_array($query3);
        //La condicional

        if($nr1 == 1){
            //strcmp($row["clave"],$pass) == 0
            if(strcmp($row1["Clave"],$pass) == 0){
                $_SESSION['usuario'] = $nombre;
                header("location:pagina\admi_panel.php");
                
            }else{
                ?> 
                    <p>¡Datos incorrecto!*  </p> 
                <?php
                echo("fass es $pass  y row es ");
                echo($row1["clave"]);
            }
            
        }else if($nr2 == 1){
            if(strcmp($row2["clave"],$pass) == 0){
                $_SESSION['usuario'] = $nombre;
                header("location:pagina\Profesor.php");
                
            }else{
                ?> 
                    <p>¡Datos incorrecto!*  </p> 
                <?php
                echo("fass es $pass  y row es ");
                echo($row2["clave"]);
            }
        }else if($nr3 == 1){
            if(strcmp($row3["clave"],$pass) == 0){
                $_SESSION['usuario'] = $nombre;
                header("location:pagina\Alumno.php");
                
            }else{
                $mensaje='contraseña';
                echo("fass es $pass  y row es ");
                echo($row2["clave"]);
            }
        }else{
                $mensaje='noReg';
        }
    }else{
            
            $mensaje='false';
    }
?>