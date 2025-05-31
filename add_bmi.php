<!DOCTYPE html>
<html>
<head>
    <title>KEMASKINI</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
include 'connection.php'; //sambung ke pangkalan data
include 'pengesahan.php'; //check user
//papar data dalam bentuk form

$IDGURU=$_SESSION['sUsername'];//ambil id utk pass value
$id = $_GET['kemaskini_id'];//ambil ID dari URL

//pilih rekod yang sepadan dalam pangkalan data
$query ="SELECT * from tblpelajar WHERE IDPELAJAR='".$_GET['kemaskini_id']."'";
$result = mysqli_query($conn,$query);
$res=mysqli_fetch_array($result);
?>
<header>BMI<br> 
&nbsp
<center><i>Gaya hidup yang cergas dan sihat sepanjang hayat </i></center>
</header>
<section>
    <!-- Fatini ubah  -->
    <nav class="navbar">
        <ul>
            <li><a href="dashboard.php" style="color: whitesmoke;">DASHBOARD</a></li>
            <li><a href="logout.php" style="color: whitesmoke;">LOGOUT</a></li>
        </ul>
    </nav>
    <!-- done -->
     
        <center>
            <article>
            <div class="data">
            <h1>TAMBAH REKOD BMI PELAJAR BAHARU</h1>
            &nbsp
            <!-- Cipta Borang (form) untuk daftar maklumat pelajar baharu-->
   
		<form name="add_bmi.php" action="proses_add_bmi.php" method="post">
			<table>
                <tr>
                    <td>Nombor Kad Pengenalan Pelajar</td>
    <td><input type="text" name="IDPELAJAR" readonly value="<?php echo $res['IDPELAJAR'];?>"></td>
                </tr>

                <tr>
                    <td>IDBMI(akan di update secara automatik)</td>
                    <td><input type="hidden" name="IDBMI"></td>
                </tr>

                <tr>
                    <td>Berat</td>
                    <td><input type="text" name="BERAT" size="12" placeholder="BERAT" required autocfocus></td>
                </tr>

                <tr>
                    <td>Tinggi</td>
                    <td><input type="text" name="TINGGI" size="12" placeholder="TINGGI" required autocfocus></td>
                </tr>

                <tr>
                    <td>Tarikh Terkini</td>
                    <td><input type="date" name="TARIKH" size="12" placeholder="TARIKH" required autocfocus></td>
                </tr>

                <tr>
                    <td>IDGuru (Tidak Dipaparkan)</td>
                    <td><input type="hidden" name="IDGURU" value="<?php echo $IDGURU;?>"></td>
                </tr>

                <tr>
                    <td><input type="submit" name="Tambah" value="Tambah"></td>
                </tr>
            </table>
		</form>
        </fieldset>
		    <center>
            </center>
            </div></center><br>

    </article>
</section>
<footer>
    <p>Hak Cipta Terpelihara &copy Unit IPD KVSA</p>
</footer>
</body>
</html>