<!DOCTYPE html>
<!--ini adalah templat asas untuk penghasilan prototaip berdasarkan storyboard-->
<html>
<head>
    <title>TAMBAH REKOD</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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
$res=mysqli_fetch_array($result);
?>
<header>DASHBOARD GURU <br> &nbsp
<center><i>Gaya hidup yang cergas dan sihat sepanjang hayat </i></center>
</header>
<section>
    <!-- Fatini ubah  -->
    <nav class="navbar">
        <ul>

            <li><a href="dashboard.php" style="color: whitesmoke;">DASHBOARD</a></li>
            <li><a href="pengiraanmarkah.php" style="color: whitesmoke;">PENGIRAAN MARKAH</a></li>
            <li><a href="bmi.php" style="color: whitesmoke;">BMI</a></li>
            <li><a href="logout.php" style="color: whitesmoke;">LOGOUT</a></li>
        </ul>
    </nav>
    <!-- done -->

    <article>
        <div class="data">
        <h1> BUANG REKOD PELAJAR</h1>
        
        <!--Menyediakan ruang jadual(kotak) -->
        <fieldset>
            <!-- Cipta Borang (form) untuk daftar maklumat pelajar baharu-->
   
		<form name="delete_sPelajar" method="post" action="proses_delete_pelajar.php">
			<table>
                <tr>
                    <td>ID PELAJAR: </td>
                    <td><input type="text" name="IDPELAJAR" readonly value="<?php echo $res['IDPELAJAR'] ?>"></td></br>
                </tr>

				<tr>
					<td><input type="submit" name="Delete" value="Delete"></td>
				</tr>
			</table>
		</form>

		    <center>
              <button><a href="dashboard.php">Dashboard</a></button>
            </center>
            &nbsp
        </fieldset><br>
        </div>
    </article>
</section>
<footer>
    <p>Hak Cipta Terpelihara &copy Unit IPD KVSA</p>
</footer>
</body>
</html>