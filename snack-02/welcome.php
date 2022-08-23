<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page</title>
</head>
<body>
    <?php 
        // var_dump($_POST);
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        if ( (strlen($name) > 3) 
            && (strpos($email, '@') > 0 && strpos($email, '.') > 3)  
            && (is_numeric($age))
        ) {
            echo "Accesso riuscito"; ?>
            <h3>
                Benvenuto <?php echo $name ?>
            </h3>
            <p>
                Mail: <?php echo $email ?>
            </p>
            <p>
                Età: <?php echo $age ?>
            </p>
    <?php
        } else {
            echo "Accesso negato";
        }
    ?>
    
</body>
</html>