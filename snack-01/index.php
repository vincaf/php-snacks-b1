<!-- Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.  -->
<!-- Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.  -->
<!-- Stampiamo a schermo tutte le partite con questo schema. -->
<!-- Olimpia Milano - Cantù | 55-60 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basket Match</title>
</head>
<body>
    <h1>BASKET MATCH</h1>
    <h3>Giornata 1</h3>

    <?php 
        $matches = [
            [
                "teamHome" => "Olimpia Milano",
                "teamAway" => "Cantù",
                "pointsHome" => 55,
                "pointsAway" => 60,
            ],
            [
                "teamHome" => "Virtus Bologna",
                "teamAway" => "Reyer Venezia Mestre",
                "pointsHome" => 75,
                "pointsAway" => 20,
            ],
            [
                "teamHome" => "Victoria Libertas",
                "teamAway" => "New Basket Brindisi",
                "pointsHome" => 54,
                "pointsAway" => 87,
            ],
            [
                "teamHome" => "De Longhi Treviso",
                "teamAway" => "Fortitudo Bologna",
                "pointsHome" => 34,
                "pointsAway" => 58,
            ],
        ];
    ?>

    <?php for ($i=0; $i < count($matches); $i++) { ?>
        <h4>
            <?php 
                echo $matches[$i]['teamHome'] . ' - ' . $matches[$i]['teamAway']. ' - ' . $matches[$i]['pointsHome']. '-' . $matches[$i]['pointsAway'];
            ?>
        </h4>
    <?php } ?>
</body>
</html>