<?php


if(isset($_POST['country']))
{
	include '../../config/functionPDO.php';
	
 	$query = "INSERT INTO permiso (country, state, city, id_usuario) VALUES(:country, :state, :city, :id_usuario)";
 	$statement = $connect->prepare($query);
 	$statement->execute(
 		array(
 			':country'		=>	$_POST['country'],
 			':state'		=>	$_POST['state'],
 			':city'			=>	$_POST['hidden_city'],
 			':id_usuario'	=> $_POST['id_usuario']
 		)
 	);
 	$result = $statement->fetchAll();

	if(isset($result))
	{
		echo 'done';
	}
 }
