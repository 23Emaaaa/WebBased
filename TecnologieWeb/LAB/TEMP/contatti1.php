<?php

// Include the bootstrap file
require_once("bootstrap.php");

// Set the title of the page - Contatti
$templateParams["titolo"] = "Blog TW - Contatti";

// Set the name of the template to be used
$templateParams["nome"] = "contatti.php";

// Get 2 random posts from the database
$templateParams["articolicasuali"] = $dbh->getRandomPosts(2);

// Get all categories from the database
$templateParams["categorie"] = $dbh->getCategories();

// Get the latest 2 posts from the database
$templateParams["articoli"] = $dbh->getPosts(2);

// Include the base template
require("template/base.php");
