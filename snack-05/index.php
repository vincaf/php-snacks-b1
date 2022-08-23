<!-- Creare un array contenente qualche alunno di un'ipotetica classe.  -->
<!-- Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.  -->
<!-- Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classroom</title>
</head>
<body>
<h1>CLASSROOM</h1>
    <h3>Lista alunni</h3>

    <?php 
        $students = [
            [
                "name" => "Mario",
                "lastName" => "Rossi",
                "votes" => [5, 4, 6, 8]
            ],
            [
                "name" => "Gianni",
                "lastName" => "Verdi",
                "votes" => [8, 7, 6, 8]
            ],
            [
                "name" => "Giuseppe",
                "lastName" => "Blu",
                "votes" => [8, 6, 6, 7]
            ],
            [
                "name" => "Salvatore",
                "lastName" => "Esposito",
                "votes" => [7, 8, 9, 8]
            ],
            [
                "name" => "Michele",
                "lastName" => "Bruno",
                "votes" => [8, 4, 6, 6]
            ],
            [
                "name" => "Francesco",
                "lastName" => "Paoli",
                "votes" => [2, 4, 5, 3]
            ],
        ];
    ?>

    <?php for ($i=0; $i < count($students); $i++) { ?>
        <p>
            <?php 
                $averageVote = intval(array_sum($students[$i]['votes']) / count($students[$i]['votes']));

                echo $students[$i]['name'] . ' ' . $students[$i]['lastName'] . ' - media voti: ' . $averageVote;
            ?>
        </p>
    <?php } ?>

</body>
</html>