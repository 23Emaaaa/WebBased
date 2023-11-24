<?php
// Include the bootstrap file
require_once("bootstrap.php");

// Set the title of the page
$templateparams["titolo"] = "Blog TW - Home";

// Set the name of the template to be used
$templateparams["nome"] = "lista-articoli.php";

// Get 2 random posts from the database
$templateparams["articolicasuali"] = $dbh->getRandomPosts(2);

// Get all categories from the database
$templateparams["categorie"] = $dbh->getCategories();

// Get the latest 2 posts from the database
$templateparams["articoli"] = $dbh->getPosts(2);

// Include the base template
require("template/base.php");
