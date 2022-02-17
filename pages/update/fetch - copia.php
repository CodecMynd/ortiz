<?php
//fetch.php

if(isset($_POST['action']))
{
	$connect = new PDO("mysql:host=localhost;dbname=db_ortiz", "root", "");
	//$connect = new PDO('mysql:host=den1.mysql6.gear.host;dbname=dbortiz', 'dbortiz', 'Tv4O~77K-R7j');
	$output = '';

	if($_POST["action"] == 'country')
	{
		$query = "SELECT state FROM country_state_city WHERE country = :country GROUP BY state";
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
		$query = "SELECT city FROM country_state_city WHERE state = :state";
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