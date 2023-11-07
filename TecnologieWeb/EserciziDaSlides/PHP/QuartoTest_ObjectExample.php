<?php
class Persona {
    private $nome;
    public $cognome;

    public function __construct($nome, $cognome) {
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    public function presentati() {
        echo "Sono " . $this->nome . " " . $this->cognome . "\n";
    }
}

$gino = new Persona("Gino", "Pino");

// My name is Gino Pino
$gino->presentati();

// echo $gino->nome; -> fatal error

// prints out Pino
echo $gino->cognome; 

