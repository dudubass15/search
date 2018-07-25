<?php

include_once('banco.php');
include_once('controller.php');
include_once('banco.php');

$search = addslashes($_POST['campobusca']);
$string = "$search";

	if(isset($string) & !empty($string)){

		$sql = "SELECT * FROM moradores WHERE nome_morador = '$string' ";
		$qry = $conect->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}else{
			echo "Nenhuma informação encontrada"; 
			exit;
		}

		return $array;
	}

?>