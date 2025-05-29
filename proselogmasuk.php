<?php

$uUsername=$_POST['username'];
$pPassword=$_POST['PASSWORD'];
include 'connection.php';
$sql="SELECT * from tblguru where NAMAGURU='$uUsername'";
$rs=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>SEMAK LOG MASUK</title>
</head>
<body>
<p>Prosedur semakan log masuk</p>
<?php
//mula semak pengguna
if (mysqli_num_rows($rs)==1) { //jumpa satu pengguna 
	$record=mysqli_fetch_array($rs);
	$dbpPassword=$record['PASSWORD'];//password dari DB
	if ($dbpPassword==$pPassword) {
		//buat compare antara password yang ada pada DB dengan password yang pengguna keyin
		echo "Username dan password sama.<br>";
		echo "hi $uUsername <br>";
		//mula proses register session bagi user
		session_start();
		$_SESSION['sessionid']=session_id();
		$_SESSION['sUsername']=$uUsername;
		header('Location:dashboard.php');
	}
	else
	{
		echo "username dijumpai tetapi password tidak sama<br>";
		echo "<button onclick=kembali()>Masuk Semula";
		echo '<script>
		function kembali()
		{window.history.back()};</script>';
	}
}
	//jika username dan password tidak sama
	else
	{
		echo '<script>
		alert("Username dan Password adalah salah!");
		</script>';
		echo "<button onclick=kembali()>Masuk Semula";
		echo '<script>
		function kembali()
		{window.history.back()};</script>';
	}

?>
</body>
</html>