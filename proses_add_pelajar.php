<?php
include 'connection.php'; //sambung ke pangkalan data
include 'pengesahan.php'; //check user


if(isset($_POST['submit']))
{
	//pembolehubah untuk memegang data yang dihantar
	$IDPELAJAR = $_POST['IDPELAJAR'];
	$JANTINA  = $_POST['JANTINA'];
	$NAMA = $_POST['NAMA'];


	//kemaskini dengan rekod baru
	$query = "INSERT INTO tblpelajar (IDPELAJAR,NAMA,JANTINA) VALUES ('$IDPELAJAR','$NAMA','$JANTINA')";

	//semak connection dan query
		if (mysqli_query($conn,$query))
		{

			//header('Location:paparMaklumat.php');
			//papar mesej jika rekod sudah diupdate
				echo '<script> 	alert("Pendaftaran maklumat berjaya");  </script>';
    			echo "<script> 	window.location='senarai_semua_pelajar.php'  </script>";
			}	

			else {
			echo "data tidak berjaya direkod";	
			}
	
}else
 echo "Butang Update tidak ditekan";


?>