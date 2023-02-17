<?php 
// PARAGRAFO DI PARTENZA
$paragrafo = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Ipsam incidunt fuga consectetur ducimus amet dolores illo perferendis alias minima in.';

// PAROLA DA CENSURARE INSERITA DALL'UTENTE
$parolaDaCensurare = $_GET['badword'];

// PARAGRAFO CENSURATO
$paragrafoModificato = str_replace($parolaDaCensurare, '***', $paragrafo);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Badwords</title>
    </head>
    <body>
        <!-- STAMPO IL PARAGRAFO ORIGINALE E LA SUA LUNGHEZZA -->
        <p>
            Paragrafo originale: <?php  echo $paragrafo ?> 
        <br>
            Lunghezza del paragrafo: <?php  echo strlen($paragrafo) ?>
        </p>
        <!-- FORM PER RICHIEDRE ALL'UTENTE LA PAROLA DA CENSURARE -->
        <form action="" method="GET">
            <input type="text" name="badword" placeholder="inserisci una parola da censurare">
            <button>
                INVIA
            </button>
        </form>

        <!-- STAMPO IN PAGINA IL PARAGRAFO CENSURATO E LA SUA LUNGHEZZA -->
        <!-- <p>
            Hai inserito la parola: <?php echo $parolaDaCensurare; ?>
        </p> -->
        <p>
            Paragrafo modificato: <?php echo $paragrafoModificato; ?>
            <br>
            Lunghezza del paragrafo: <?php  echo strlen($paragrafoModificato) ?>
        </p>
             
    </body>
</html>