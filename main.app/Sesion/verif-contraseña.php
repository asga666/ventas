<?php
    require '../conexion.php';
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $bd = $conexion->query("select Password from usuarios where Password = '".$_POST['contraseña']."'");
    $conexion->close();
    if ($bd->num_rows==1):
        $atrapar_dato = $bd->fetch_assoc();
        echo json_encode(array('error'=>false));
    else:
        echo json_encode(array('error'=>true));
            // print 'Contraseña incorrecta<br>
            // <a href="http://localhost/Happy%20Copy/Codig-verfi.php">Volver</a>';
    endif;
?>