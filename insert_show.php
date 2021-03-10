<?php
require_once("sessioncheck.php");

require_once('./header.php');
require_once('./footer.php');
require_once('./shows/show.php');


$show = new show();
$show->setShowTitle($_POST["show_title"]);
//echo "" . $_POST["show_title"];

$show->setShowRating($_POST["show_rating"]);
//echo "" . $_POST["show_rating"];

$show->setShowDescription($_POST["show_description"]);
//echo "" . $_POST["show_description"];

$show->createShow();

?>

<!-- <h1>Show has been Created</h1> -->