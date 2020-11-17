<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Agenda</title>
</head>

<body>
    <div class="container-fluid">
        <h1>Update</h1>
        <a href="index.php">Lista de personas</a>

        <form action='db/db_update.php' method='GET'>
            <?php include 'db/db_view.php'; ?>
            <button type='submit' class='btn btn-primary'>Update</button>
        </form>

    </div>
</body>

</html>