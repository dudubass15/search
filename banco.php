<?php
// Parâmetro para acesso ao banco

$user = 'root';
$password = '';
$tabela = 'moradores';

// Inicia a conexao com o banco ...
try{

	$conect = new PDO('mysql:host=localhost; dbname=buscador;', $user, $password);
	$conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e) {

    echo 'ERROR: ' . $e->getMessage();
}

?>