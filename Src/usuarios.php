<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD']=== 'POST'){
    $nombre = $_POST ['nombre'];
    $email = $_POST ['email'];
    $conexion->query(query:"INSERT INTO usuarios (nombre,email) VALUES ('$nombre','$email')");
    header(header: "Location: index.php");
}
?>

<h1>agregar usuarios</h1>
<form method="POST">
    <input type="text" name="nombre" placeholder="Nombre"required><br>
    <input type="email" name="email" placeholder="email"required><br>
    <button type="submit">Guardar</button>
  

</form>