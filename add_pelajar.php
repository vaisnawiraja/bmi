<!DOCTYPE html>

<html>
<head>
    <title>TAMBAH REKOD</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
include 'connection.php'; //sambung ke pangkalan data
include 'pengesahan.php'; //check user

$NAMAGURU=$_SESSION['sUsername'];//ambil id utk pass value
?>
<header>DAFTAR PELAJAR<br>
&nbsp
<center><i>Gaya hidup yang cergas dan sihat sepanjang hayat </i></center>
</header>

<section>
    <!-- Fatini ubah  -->
    <nav class="navbar">
        <ul>
            <li><a href="dashboard.php">DASHBOARD</a></li>
            <li><a href="senarai_semua_pelajar.php">SENARAI PELAJAR</a></li>
            <li><a href="logout.php" style="color: whitesmoke;">LOGOUT</a></li>
        </ul>
    </nav>
    <!-- done -->
     
    <article>
        <center><h1 class="title"> TAMBAH REKOD PELAJAR BAHARU</h1></center>
        &nbsp
        <!--Menyediakan ruang jadual(kotak) -->
        <center>
        <div class="data">
            <!-- Cipta Borang (form) untuk daftar maklumat pelajar baharu-->
   
		<form name="addPelajar" method="post" action="proses_add_pelajar.php">
        <?php
       //papar maklumat lengkap pengguna (GURU)
       $dataGuru=mysqli_query($conn,"select * from tblguru where NAMAGURU='$NAMAGURU'");
       $paparDataGuru=mysqli_fetch_array($dataGuru);
     ?>
			<table>
				<tr>
					<td>Nombor Kad Pengenalan Pelajar</td>
					<td><input type="text" name="IDPELAJAR" size="12" placeholder="IDPELAJAR" required autocfocus></td>
				</tr>

                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="NAMA" size="12" placeholder="NAMA" required autocfocus></td>
                </tr>


				<tr>
					<td>Jantina</td>
					<td><select name="JANTINA" required autocfocus>
						<option value="L">Lelaki</option>
						<option value="P">Perempuan</option>
					</select></td>
				</tr>

				<tr>
					<td>ID Guru</td>
					<td><input type="text" name="IDGURU" readonly value="<?php echo $paparDataGuru['IDGURU'];?>"></td>
				</tr>

				<tr>
					<td><input type="submit" name="submit" value="submit"></td>
				</tr>
			</table>
		</form>

		    <center>
              <button><a href="dashboard.php">Cancel</a></button>
            </center>

            </div></center><br>

    </article>
</section>
<footer>
    <p>Hak Cipta Terpelihara &copy Unit IPD KVSA</p>
</footer>
</body>
</html>