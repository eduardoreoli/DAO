<?php

use const PHPSTORM_META\ANY_ARGUMENT;

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tbusuarios");

echo json_encode($usuarios);

?>