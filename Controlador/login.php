<?php

$u = $_POST['usuario'];
$c = $_POST['clave'];

require_once './conexion.php';
$sql = "SELECT rolid FROM empleados WHERE id='$u' and clave='$c'";
$r = $conn->query($sql);
if ($r->num_rows > 0) {
    if ($d = $r->fetch_assoc()) {
        $conn->close();
        header("location:../menu.php");
    }
} else {
    require_once './mensaje.php';
    Mensajes::info("El usuario o contraseña no son correctos");
}
$conn->close();
?>

