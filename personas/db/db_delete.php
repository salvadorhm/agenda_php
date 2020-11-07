<?php
    $id_persona = $_GET["id_persona"];

    $db = new SQLite3("../../agenda.db");

    $db->exec("DELETE FROM personas where id_persona='$id_persona';");

    header("Location: ../list.php");
?>