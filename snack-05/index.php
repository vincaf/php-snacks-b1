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
                "vote" => 5,
            ],
            [
                "name" => "Gianni",
                "lastName" => "Verdi",
                "vote" => 9,
            ],
            [
                "name" => "Giuseppe",
                "lastName" => "Blu",
                "vote" => 6,
            ],
            [
                "name" => "Salvatore",
                "lastName" => "Esposito",
                "vote" => 7,
            ],
            [
                "name" => "Michele",
                "lastName" => "Bruno",
                "vote" => 2,
            ],
            [
                "name" => "Francesco",
                "lastName" => "Paoli",
                "vote" => 4,
            ],
        ];

        $sumVote = 0;
        
        for($i=0; $i < count($students); $i++) { 
            $sumVote = $sumVote + $students[$i]['vote'];
        }

        $averageVote = $sumVote / count($students);
        var_dump($students);
        var_dump($sumVote);
        var_dump($averageVote);

    ?>
</body>
</html>