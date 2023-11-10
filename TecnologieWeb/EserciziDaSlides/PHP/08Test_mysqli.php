<?php

// Aprire e chiudere una connessione al database

$severname = "localhost";
$username = "username";
$password = "password";
$sql = "CREATE DATABASE dbname";

// Object oriented style per aprire la connessione
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->query($sql) === TRUE;

// Procedural style
/* 
$conn = mysqli_connect($servername, $username, $password);
mysqli_query($conn, $sql) 
*/

// Chiudere la connessione
$conn->close();