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
    <h1>Form</h1>

    <form action="welcome.php" method="post">
        <input type="text" name="name" placeholder="Inserisci il nome">
        <input type="email" name="email" placeholder="Inserisci la mail">
        <input type="number" name="age" placeholder="Inserisci l'età">

        <button type="submit">Send</button>
    </form>
</body>
</html>