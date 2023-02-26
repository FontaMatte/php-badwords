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
        <h1>
            PHP BADWORDS
        </h1>
        <!-- STAMPO IL PARAGRAFO ORIGINALE E LA SUA LUNGHEZZA -->
        <p>
            PARAGRAFO ORIGINALE: <?php  echo $paragrafo ?> 
        </p>
        <div>
            LUNGHEZZA DEL PARAGRAFO: <?php  echo strlen($paragrafo) ?> caratteri
        </div>

        <br>

        <!-- FORM PER RICHIEDRE ALL'UTENTE LA PAROLA DA CENSURARE -->
        <form action="" method="GET">
            <input type="text" name="badword" placeholder="inserisci una parola da censurare">
            <button>
                INVIA
            </button>
        </form>

        <p>
            PARAGRAFO CENSURATO: <?php echo $paragrafoModificato; ?>
        </p>
        <div>
            LUNGHEZZA DEL PARAGRAFO CENSURATO: <?php  echo strlen($paragrafoModificato) ?> caratteri
        </div>
             
    </body>
</html>