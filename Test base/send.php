<?php
include("conexion.php");
if(isset($_POST["send"])){
    if(
        strlen($_POST["nombre"]) >= 1 &&
        strlen($_POST["correo"]) >= 1 &&
        strlen($_POST["mensaje"]) >= 1
    ) {
        $nombre = trim($_POST["nombre"]);
        $correo = trim($_POST["correo"]);
        $mensaje = trim($_POST["mensaje"]);
        $consulta = "INSERT INTO datos(nombre,correo,mensaje)
                     VALUES ('$nombre','$correo','$mensaje')";
        $resultado=mysqli_query($conex,$consulta);
        if($resultado) {
            ?>
                <h3>registro exitoso</h3>
            <?php
    } else {
        ?>  
            <h3>registro no exitoso</h3>
        <?php
        }        
    }
} else {
    ?>
        <h3>registro no exitoso</h3>
    <?php
}
?>