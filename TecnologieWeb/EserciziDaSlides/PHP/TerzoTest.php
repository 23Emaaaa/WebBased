<?php

include_once "dbtw-mysql.php";

$host = "localhost";
$user = "silvia";
$pass = "techweb";
$database = "TW";

// DBMS connection
$myconn = mysqli_connect($host, $user, $pass) or die('Errore...');

// Connection DB database
mysqli_select_db($database, $myconn) or die('Errore...');


// EOF