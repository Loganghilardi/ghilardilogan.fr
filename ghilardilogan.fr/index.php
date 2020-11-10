<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Logan Ghilardi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container-flex">
    <header>
        <nav class="navbar navbar-light bg-dark">
            <a class="navbar-brand" href="#">Logan Ghilardi</a>
        </nav>
    </header>
    <h5>Bienvenue sur mon site</h5>
    <?php
    date_default_timezone_set('Europe/Paris');
    echo 'Nous sommes le ' . date('d-m-Y') . ' Il est ' . date('H:i:s');
    ?>
    <p>Comment ça va ?</p>
</div>
</body>
</html>
