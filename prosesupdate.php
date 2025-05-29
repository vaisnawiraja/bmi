<?php
include ('connection.php');
if (isset($_POST['submit'])) {
	$IDBMI= $_POST['IDBMI'];
	$IDPELAJAR = $_POST['IDPELAJAR'];
	$BERAT= $_POST['BERAT'];
 	$TINGGI =$_POST['TINGGI'];
 	$TARIKH=$_POST['TARIKH'];
 	$IDGURU = $_POST['IDGURU'];
 
 	
 	$update="UPDATE tblbmi SET IDBMI='$IDBMI',IDPELAJAR='$IDPELAJAR' ,BERAT='$BERAT',TINGGI='$TINGGI',TARIKH='$TARIKH',IDGURU='$IDGURU' WHERE IDBMI='$IDBMI'";

 	if (mysqli_query($conn,$update)) {
 		header('location:dashboard.php');
 		echo "DATA BERJAYA DIKEMASKINI";
 	}
 	else 
 		echo "DATA TIDAK BERJAYA DIKEMASKINI";
	// code...
}
?>