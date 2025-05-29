<?php
include ('connection.php');//sambung ke pangkalan data
include 'pengesahan.php';
//jika butang DELETE ditekan
if (isset($_POST['submit'])) {
	//PEMBOLEHUBAH UNTUK MEMEGANG DATA YANG DIHANTAR
	$IDPELAJAR = $_POST['IDPELAJAR'];
	$IDBMI =$_POST['IDBMI'];
 
 // delete dengan rekod	
 	$query="DELETE FROM tblbmi WHERE IDBMI='$IDBMI'";

 	if (mysqli_query($conn,$query)) {
 		//papar mesej jika rekod sudah diupdate
 		echo '<script>
 		alert("Padam maklumat berjaya");
 		</script>';
 		echo "<script>
 		window.location='dashboard.php'
 		</script>";
 		// code...
 	}
 	else 
 		echo "Butang delete tidak ditekan";
	// code...
}
?>