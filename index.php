<?php 

require_once("config.php");

// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios2");

// echo json_encode($usuarios);

$manuel = new Usuario();

$manuel->loadById(4);

echo $manuel;


 ?>