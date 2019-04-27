<?php

	$server   = "104.250.105.51";
	$username = "root";
	$password = "";
	$database = "fishione_fishionery";

	$sambungan= mysqli_connect($server, $username, $password, $database);

	if ($sambungan)
	{
		// echo "Sambungan berhasil";
	}
	else
	{
		echo "Sambungan Gagal";
	}
?>
