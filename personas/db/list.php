<?php
    $db = new SQLite3('agenda.db');

    $resultado = $db->query('SELECT * from personas;');

    $table = "<table class='table'>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Primer apellido</th>
                <th>Update</th>
            </tr>";

    print($table);

    while ($row = $resultado->fetchArray()) {
        print("<tr>");
        print("<td>".$row['id_persona']."</td>");
        print("<td>".$row['nombre']."</td>");
        print("<td>".$row['primer_apellido']."</td>");
        print("<td><a href='update.php?id_persona=".$row['id_persona']."'>Update</a></td>");
        print("</tr>");
    }
    print("</table>")
?>