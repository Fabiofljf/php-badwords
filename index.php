<!-- 
    Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
Buon divertimento e che la forza sia con voi  
-->

<?php
$variabile = "Hey ciao Php, sei nuovo e già ti odio"; // - Creare una variabile con un paragrafo di testo a vostra scelta.

$lunghezza = strlen($variabile);

echo $variabile . ' ' . $lunghezza; // - Stampare a schermo il paragrafo e la sua lunghezza.


$parolaDaCensurare = ($_GET['sostantivo']); // - Una parola da censurare viene passata dall'utente tramite parametro GET.

$nuovaVariabile = str_replace($parolaDaCensurare, '*****', $variabile);

echo $nuovaVariabile;

$lunghezza_nuova = strlen ($nuovaVariabile);

echo $lunghezza_nuova;


?>