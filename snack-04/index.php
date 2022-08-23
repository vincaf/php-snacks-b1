<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi.  -->
<!-- Ogni punto un nuovo paragrafo. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Split Paragraph</title>
</head>
<body>
    <?php 
    
    $paragraph = "Nei miei anni più giovani e vulnerabili mio padre mi diede un consiglio che non ho mai smesso di considerare.
    «Ogni volta che ti sentirai di criticare qualcuno», mi disse, «ricordati che non tutti a questo mondo hanno avuto i tuoi stessi vantaggi».
    Non aggiunse altro, ma nel nostro riserbo siamo sempre stati sorprendentemente comunicativi e compresi che voleva sottintendere molto di più. 
    Di conseguenza, sono incline a sospendere ogni giudizio, abitudine che mi ha aperto a un gran numero di persone strane e mi ha inoltre reso vittima di non pochi seccatori consumati. 
    Una mente degenerata è lesta a riconoscere una simile caratteristica e ad attaccarvisi quando si manifesta in una persona normale, e fu così che al college mi ritrovai a torto accusato di essere un intrigante perché ero al corrente delle pene nascoste di uomini sregolati e misteriosi. 
    La gran parte delle confidenze non erano cercate; ho spesso finto d’essere assonnato o assorto in altri pensieri o ho ostentato una frivolezza ostile non appena scorgevo agitarsi all’orizzonte il segno inconfondibile di una rivelazione intima; giacché le rivelazioni intime dei giovani, o perlomeno i termini nei quali i giovani le esprimono, sono di solito contraffatte e alterate da palesi omissioni.
    La sospensione del giudizio presuppone una speranza infinita.
    Ancora adesso temo che perderei qualcosa qualora mi dimenticassi che, come mio padre snobisticamente asseriva e io snobisticamente ripeto, il senso della basilare decenza viene distribuito in misura iniqua alla nascita.
    E, dopo essermi tanto gloriato per la mia tolleranza, giungo ad ammettere che essa ha un limite.
    La condotta può reggersi sulla dura roccia o affondare in paludi melmose, ma oltre un certo punto non mi interessa più su cosa si basa. Quando tornai dall’Est, lo scorso autunno, avvertivo il bisogno di un mondo in uniforme e, per così dire, sempre moralmente sull’attenti; non volevo più saperne di debosciate digressioni condite di fuggevoli sbirciate nel cuore umano. 
    Soltanto Gatsby, l’uomo che dà il nome a questo libro, era esente da questa mia reazione. 
    Gatsby, che rappresentava tutto quello per cui nutro un disprezzo spontaneo.";

    $splitparagraph = explode(".", $paragraph);

    var_dump($paragraph);
    var_dump($splitparagraph);

    ?>
    
</body>
</html>