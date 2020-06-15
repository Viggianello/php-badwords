<!--Si tratta di un censuratore rudimentale: predisponete una variabile contenente un breve testo, poi tramite le funzioni sulle stringhe di php censurate una "badword" che viene passata in GET con *** (3 simboli di asterico).
Stampate a schermo il testo censurato all'interno di un paragrafo e la lunghezza del paragrafo stesso.
Nome repo: php-badwords (edited) -->
<!-- URL FILE PHP
brainstorming
http://localhost/my_file.php?name=Michele
Ecco quindi un modo per passare dati dal client al server!
$_GET["name"]
//restituirà “Michele” -->

<?php
// echo 'Ciao';
// varibile in get
$p = $_GET['password'];
// predisposta una varibile con breve testo
$testoMinimo = 'hello how are you';
// funzione php sulla stringa :
// str_replace(porzioneDaModificare, conCosa, stringa) - cambierà il valore di una porzione della stringa in un altro
$risultato = str_replace($p, '***', $testoMinimo);
// stampo il risultato
// echo $risultato;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <p> Questo è il paragrafo censurato : <?php echo $risultato; ?></p>

    </body>
</html>
