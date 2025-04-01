<?php

require_once '../config/database.php';

//probando bd
$pdo = Connection::getInstance(); //crear la instancia
print_r($pdo->getConnection()); //mirar si fue un exito o no