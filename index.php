<?php
require_once("config.php");

$root = new Usuario();

$root->loadByID(5);
echo $root;

?>