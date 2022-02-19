<?php
//fetch.php

if(isset($_POST['action']))
{
	include '../../config/functionPDO.php';
	$output = '';

	if($_POST["action"] == 'country')
	{
		$query = "SELECT state FROM modulos WHERE country = :country GROUP BY state";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':country'		=>	$_POST["query"]
			)
		);
		$result = $statement->fetchAll();
		$output .= '<option value="">Seleccione un bóton</option>';
		foreach($result as $row)
		{
			$output .= '<option value="'.$row["state"].'">'.$row["state"].'</option>';
		}
	}
	if($_POST["action"] == 'state')
	{
		$query = "SELECT city FROM modulos WHERE state = :state";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':state'		=>	$_POST["query"]
			)
		);
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output .= '<option value="'.$row["city"].'">'.$row["city"].'</option>';
		}


	}
	echo $output;
}

?>