<?php

define('HOST', '127.0.0.1');
define('USUARIO', 'univesp');
define('SENHA', '123456');
define('DB', 'pi');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possível conectar');

?>
