<?
include('../header.php');
include('../Models/Posts.php');


Posts::createPost($_SESSION['userId']);
?>