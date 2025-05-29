<?php
include 'connection.php';
include 'pengesahan.php';

if (isset($_POST['Delete'])) {
	$IDPELAJAR=$_POST['IDPELAJAR'];

	$DELETE="DELETE FROM tblpelajar WHERE IDPELAJAR='$IDPELAJAR'";

	if (mysqli_query($conn,$DELETE)) {
		echo '<script> alert("Pembuangan maklumat berjaya"); </script>';
		echo "<script> window.location='senarai_semua_pelajar.php' </script>";
	}
	else{
		echo "Data tidak berjaya direkod";
	}
}
else 
echo "Butang Update tidak ditekan";
?>