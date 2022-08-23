<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)  -->
<!-- che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.  -->
<!-- Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Parameters</title>
</head>
<body>

    <?php 
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];

        if ( (strlen($name) > 3) 
            && (strpos($mail, '@') > 0 && strpos($mail, '.') > 3)  
            && (is_numeric($age))
        ) {
            echo "Accesso riuscito";
        } else {
            echo "Accesso negato";
        }
    ?>

</body>
</html>