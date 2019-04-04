<?php
if (isset($_POST['usuario']) and isset($_POST['contraseña'])){
    require '../conexion.php';
    sleep(1);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $usuario = mysqli_real_escape_string($conexion ,$_POST['usuario']);
    $contraseña = mysqli_real_escape_string($conexion ,$_POST['contraseña']);
    $bd = $conexion->query("select usuario, Password from usuarios where usuario = '".$usuario."'
    AND Password = '".$contraseña."'");
    $conexion->close();}
    if ($bd->num_rows==1):
        $atrapar_dato = $bd->fetch_assoc();
        echo json_encode(array('error'=>false));
    else:
        echo json_encode(array('error'=>true));
        // <!-- <script type="text/javascript">
        // alert('Usuario o Contraseña incorrectos');
        // location.replace("http://localhost/Happy%20Copy/sesion.php");
        // </script> -->
    endif;
?>