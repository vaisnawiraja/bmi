<?php
include 'connection.php';

if (isset($_POST['submit'])) {
	$IDPELAJAR=$_POST['IDPELAJAR'];
	$BERAT=$_POST['BERAT'];
	$TINGGI=$_POST['TINGGI'];
	$TARIKH=$_POST['TARIKH'];

	$query="INSERT INTO tblbmi (IDPELAJAR,TARIKH,BERAT,TINGGI) VALUES ('$IDPELAJAR','$TARIKH','$BERAT','$TINGGI')";
}
//code

if (mysqli_query($conn,$query)) {
echo"Data berjaya direkod";
header('location:dashboard.php');
}
else{
	echo"data tidak berjaya direkod";
}
?>
