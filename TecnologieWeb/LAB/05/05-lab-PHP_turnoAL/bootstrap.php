<?php

// require the database class
require_once 'db/database.php';

// create a new database helper object and store it in a variable named $dbh
$dbh = new DatabaseHelper("localhost", "root", "", "blogtw", 3306);

// define the upload directory path as a constant named UPLOAD_DIR
define("UPLOAD_DIR", "./upload")

// EOF