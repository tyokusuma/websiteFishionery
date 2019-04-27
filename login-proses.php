<?php

	include 'conector.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT *FROM admin WHERE username = '$username' AND password = '$password'";
	$que = mysqli_query($sambungan, $sql);
	$cek = mysqli_num_rows($que);//menghitung seluruh data

	if ($cek>0)//jika data orang yang login ketemu
	{
		session_start();
		while ($data=mysqli_fetch_array($que))
		{
			//var bebas          //database
			$_SESSION['admin'] = $data['id_admin'];
		}

		echo
		"
			<script>
				alert('Selamat Datang...');
				window.location='view/Dashboard.php';
			</script>
		";
	}
	else //jika tidak ketemu
	{
		echo
		"
			<script>
				alert('Maaf, anda tidak bisa masuk');
				window.location='index.php';
			</script>
		";
	}

?>
