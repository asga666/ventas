<?php
    require '../conexion.php';
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $bd = $conexion->query("select correo from usuarios where correo = '".$_POST['correo']."'");
    $conexion->close();
    if ($bd->num_rows==1):
        $atrapar_dato = $bd->fetch_assoc();
        include 'enviar_codigo.php';
        echo json_encode(array('error'=>false));
        // header('location:../../Codig-verfi.php');
    else:
        echo json_encode(array('error'=>true));
            // print 'Correo invalido, no se encuentra registrado<br>
            // <a href="..//..correo-veri.php">Volver</a>';
    endif;
?>