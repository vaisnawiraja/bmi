<?php
include 'connection.php';
include 'pengesahan.php';

if (isset($_POST['Update'])) {
	$IDPELAJAR=$_POST['IDPELAJAR'];
	$NAMA=$_POST['NAMA'];
	$JANTINA=$_POST['JANTINA'];

	$update="UPDATE tblpelajar SET IDPELAJAR='$IDPELAJAR',NAMA='$NAMA',JANTINA='$JANTINA' WHERE IDPELAJAR='$IDPELAJAR'";

	if (mysqli_query($conn,$update)) {
		echo '<script> alert("Mengemaskini maklumat berjaya"); </script>';
		echo "<script> window.location='senarai_semua_pelajar.php' </script>";
	}
	else{
		echo "Data tidak berjaya direkod";
	}
}
else 
echo "Butang Update tidak ditekan";
?>