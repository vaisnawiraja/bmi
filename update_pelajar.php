

<!DOCTYPE html>
<html>
<head>
	<title>KEMASKINI</title>
</head>
<body>

<?php
include 'connection.php'; //sambung ke pangkalan data
include 'pengesahan.php'; //check user
//papar data dalam bentuk form
//ambil ID dari URL

$id = $_GET['kemaskini_id'];

//pilih rekod yang sepadan dalam pangkalan data
$query ="SELECT * from tblpelajar WHERE IDPELAJAR='".$_GET['kemaskini_id']."'";
$result = mysqli_query($conn,$query);
$rs=mysqli_fetch_array($result);
echo "<br>";
echo "Kemaskini rekod untuk: <br>";
echo "No Kad Pengenalan:".$rs["IDPELAJAR"]."<br>";

?>
	 <h1><center>Kemaskini Maklumat Pelajar</center> </h1>
	<fieldset>
		
		<!--Papar borang untuk kemaskini -->
		<form name="borangKemaskini" method="post" action="proses_update_pelajar.php">
			<table>
				<tr>
					<td>ID PELAJAR :   </td>
					<td><input type="text" name="IDPELAJAR" readonly value="<?php echo $rs['IDPELAJAR'];?>"></td>
				</tr>

				<tr>
					<td>NAMA</td>
					<td><input type="text" name="NAMA"  value="<?php echo $rs["NAMA"];?>"></td>
				</tr>

				<tr>
					<td>JANTINA</td>
					<td><input type="text" name="JANTINA" value="<?php echo $rs['JANTINA'];?>"></td>
				</tr>
				<tr>
					<td><input type="submit" name="Update" value="Update"></td>
				</tr>
			</table>
		</form>
		<a href="dashboard.php">Ke menu utama guru</a>
	</fieldset>

</body>
</html>