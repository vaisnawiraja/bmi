<?php
include 'connection.php'; //sambung ke pangkalan data
include 'pengesahan.php'; //check user



if(isset($_POST['Tambah']))
{
	//pembolehubah untuk memegang data yang dihantar	
	$IDPELAJAR = $_POST['IDPELAJAR'];
	$BERAT  = $_POST['BERAT'];
	$TINGGI  = $_POST['TINGGI'];
	$TARIKH  = $_POST['TARIKH'];
	$IDGURU  = $_POST['IDGURU'];

	//kemaskini dengan rekod baru
	$query = "INSERT INTO tblbmi (IDPELAJAR,BERAT,TINGGI,TARIKH,IDGURU)VALUES ('$IDPELAJAR','$BERAT','$TINGGI','$TARIKH','$IDGURU')";

	//semak connection dan query
		if (mysqli_query($conn,$query))
		{

			//header('Location:paparMaklumat.php');
			//papar mesej jika rekod sudah diupdate
				echo '<script> 	alert("Tambah BMI pelajar berjaya");  </script>';
    			echo "<script> 	window.location='dashboard.php'  </script>";
			}	

			else {
			echo "data tidak berjaya direkod";	
			}
	
}else
 echo "Butang Update tidak ditekan";


?>