<?php
    $db = new SQLite3('agenda.db');

    $resultado = $db->query('SELECT * from personas;');

    $table = "<table class='table table-dark'>
            <tr>
                <th>Nombre</th>
                <th>Primer apellido</th>
            </tr>";

    print($table);

    while ($row = $resultado->fetchArray()) {
        print("<tr>");
        print("<td>".$row['nombre']."</td>");
        print("<td>".$row['primer_apellido']."</td>");
        print("</tr>");
    }
    print("</table>")
?>