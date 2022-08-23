<!-- Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Numbers</title>
</head>
<body>
    <!-- Array con numeri casuali -->
    <?php 
        $numbers = [];
        for ($i=0; $i < 15; $i++) { 
            $numbers[] = rand(1,20);
        }

        var_dump($numbers);
    ?>  

    <!-- Array con numeri casuali e condizione per non ripetere lo stesso numero -->
    <?php 
        $numbers2 = [];
        while (count($numbers2) < 15){ 
            $randomNumber = rand(1,100);
            if(!in_array($randomNumber, $numbers2)){
                $numbers2[] = $randomNumber;
            }
        }

        var_dump($numbers2);
    ?>  
</body>
</html>