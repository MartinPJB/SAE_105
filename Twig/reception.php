<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reception | Test</title>
</head>
<body>
    <?php

    if (isset($_POST)) {
        echo "<h1>Informations reçues dans la méthode POST</h1>";
        foreach ($_POST as $cle => $valeur) {
            echo "<p>$cle: $valeur</p>";
        }
    }

    ?>
</body>
</html>