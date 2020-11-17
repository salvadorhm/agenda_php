<?php
    $nombre = $_GET['nombre'];
    $primer_apellido = $_GET['primer_apellido'];

    $db = new SQLite3('../../agenda.db');
    $db->exec("INSERT INTO personas (nombre,primer_apellido) VALUES ('$nombre', '$primer_apellido');");
    header("Location: ../index.php");

?>