<?php

// Include the DatabaseHelper class
require_once("db/database.php");

/**
 * Create a new instance of the DatabaseHelper class.
 * @param string $servername - The server name, in this case, localhost.
 * @param string $username - The username for the database, in this case, root.
 * @param string $password - The password for the database, in this case, an empty string.
 * @param string $dbname - The name of the database, in this case, blogtw.
 * @param int $port - The port number for the database, in this case, 3306.
 */
$dbh = new DatabaseHelper("localhost", "root", "", "blogtw", 3306);

// Define a constant for the upload directory
define("UPLOAD_DIR", "./upload");
