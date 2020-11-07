<?php
    $db = new SQLite3('agenda.db');

    $resultado = $db->query('SELECT * from personas;');

    $table = "<table class='table'>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Primer apellido</th>
                <th>View</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>";

    print($table);

    while ($row = $resultado->fetchArray()) {
        print("<tr>");
        print("<td>".$row['id_persona']."</td>");
        print("<td>".$row['nombre']."</td>");
        print("<td>".$row['primer_apellido']."</td>");
        print("<td><a href='view.php?id_persona=".$row['id_persona']."'>View</a></td>");
        print("<td><a href='update.php?id_persona=".$row['id_persona']."'>Update</a></td>");
        print("<td><a href='delete.php?id_persona=".$row['id_persona']."'>Delete</a></td>");
        print("</tr>");
    }
    print("</table>")
?>