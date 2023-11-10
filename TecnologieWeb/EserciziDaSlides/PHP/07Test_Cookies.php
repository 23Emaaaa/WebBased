<?php

// Salviamo all'interno del cookie il numero di volte in cui l'utente ha visitato il sito web

$nome_cookie = "numero_accessi";
// Elimino il cookie se già esiste (per fare in modo che il cookie venga settato nuovamente)
setcookie($nome_cookie, "", time() - 100, "/");
echo "Cookie '" . $nome_cookie . "' eliminato!";

// Se il cookie è settato, incremento il valore
if (!isset($_COOKIE[$nome_cookie])) {
    echo "Cookie '" . $nome_cookie . "' non settato! Lo setto adesso!";

    // Prima volta che l'utente visita il sito
    $valore_cookie = 1;
    // Setto il cookie per 84600 secondi (1 giorno)
    setcookie($nome_cookie, $valore_cookie, time() + (60 * 60 * 24 * 30), "/");
} else {
    echo "Cookie '" . $nome_cookie . "' settato!<br>";
    // Incremento il valore del cookie di 1 (corrisponde ad una visita in più)
    $num_visite = $_COOKIE[$nome_cookie] + 1;
    // Setto il cookie per 84600 secondi (1 giorno)
    setcookie($nome_cookie, $num_visite, time() + (60 * 60 * 24 * 30), "/");
    echo "Il sito è stato visitato: " . $num_visite . " volte!";
}
