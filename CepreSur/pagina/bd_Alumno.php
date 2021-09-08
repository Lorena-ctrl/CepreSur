<?php 
    session_start();
    $usuario = $_SESSION['usuario'];
    if(isset($_SESSION['usuario'])){
?>
<?php
    include("conexion.php");
?>
<?php

        $query = mysqli_query($conn,"SELECT * FROM alumno WHERE DNIAlumno = ".$usuario." ");

        $num_alum= mysqli_num_rows($query);
        $row = mysqli_fetch_array($query);
        //La condicional
        $query1 = mysqli_query($conn,"SELECT * FROM aula WHERE IdAula = ".$row['IdAula']." ");
        $num_aula= mysqli_num_rows($query1);
        if($num_aula>0){
            $row1 = mysqli_fetch_array($query1);

            $query2 = mysqli_query($conn,"SELECT * FROM ciclo WHERE IdCiclo = ".$row1['IdCiclo']." ");
            $num_ciclo= mysqli_num_rows($query2);
            $row2 = mysqli_fetch_array($query2);
    
            $query3 = mysqli_query($conn,"SELECT * FROM clase WHERE IdAula = ".$row1['IdAula']." ");
            $num_clase= mysqli_num_rows($query3);
    
            
    
            // Datos para perfil
            $nomAlu=$row['nombre'];
            $nomCiclo=$row2['nombre'];
            $nAula=$row1['IdAula'];
            $fechaI=$row2['fechaInicio'];
            $fechaF=$row2['fechaFin'];
            $frecuencia='todos los dias';
            $nSesion=$num_clase;
    
            //Datos aula
            $nAula=$row1['IdAula'];
            $limite=$row1['limite'];
            $cantidad=$row1['cantidad'];
            $vacantes=$limite-$cantidad;
    
            //Datos ciclo
            $fechaI=$row2['fechaInicio'];
            $fechaF=$row2['fechaFin'];
            $precio=$row2['precio'];
    
            $quer = mysqli_query($conn,"SELECT * FROM simulacro WHERE IdCiclo = ".$row2['IdCiclo']." ");
            $num_sim= mysqli_num_rows($quer);
    
            $arrayN=array();
            $nomS=array();
    
            for ($i=0; $i<$num_sim; $i++) {
                $rowS = mysqli_fetch_array($quer);//llamo cada clase
                $querN = mysqli_query($conn,"SELECT * FROM notasimulacro WHERE IdSimulacro = ".$rowS['IdSimulacro']." ");
                $num_not= mysqli_num_rows($querN);
                //echo $num_clase;
                if($num_not > 0) {
                    //echo 'curso'. $num_curso;
                    $rowN = mysqli_fetch_array($querN);
                    $nota=$rowN['valor'];
                    array_push($arrayN,$nota);
                }
                array_push($nomS, $rowS['nombre']);
            
            }
    
        }
        
?>

<?php
    }else{
        header("location: pagina/index.php");
        exit();
    }
?>