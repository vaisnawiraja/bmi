<?php
include 'connection.php'; //sambung ke pangkalan data
include 'pengesahan.php'; //check user

$IDGuru=$_SESSION['sUsername'];//ambil id utk pass value
?>


<!DOCTYPE html>
<!--ini adalah templat asas untuk penghasilan prototaip berdasarkan storyboard-->
<html>
<head>
    <title>DASHBOARD GURU</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>SENARAI PELAJAR<br>
&nbsp
<center><i>Gaya hidup yang cergas dan sihat sepanjang hayat </i></center>
</header>
<section>
    <nav>
        <h2>
            MENU
        </h2>
    <!--ini adalah link asas untuk rangka sahaja, akan di upgrade untuk menjadi navigation bar yang lebih baik-->

        <ul>
        &nbsp
            <li><a href="dashboard.php" style="color: whitesmoke;">DASHBOARD</a></li><br>
            &nbsp
            <li><a href="senarai_semua_pelajar.php">SENARAI PELAJAR</a></li><br>&nbsp
            <li><a href="logout.php" style="color: whitesmoke;">LOGOUT</a></li><br>
        </ul>
    </nav>
    <article>
        <center><h1 class="title">SENARAI PELAJAR</h1></center>
        &nbsp
        <!--Menyediakan ruang jadual(kotak) -->
        <div class="data">
            <center>
            <!-- Cipta Jadual (table) untuk paparan maklumat papar senarai pelajar-->
            <!-- Papar data yang dimasukkan oleh cikgu tersebut-->
              
            <table  border="1" align="center">
                <h1>SENARAI NAMA PELAJAR BERDAFTAR</h1>
                &nbsp
            <tr>
              
              <td width="20"> Bil</td>
              <td width="100"> No KP Pelajar</td>
              <td width="300"> Nama Pelajar</td>
              <td width="20"> Jantina</td>
              <td width="400"> Tindakan</td>
            </tr>
          

           <?php
           
           //papar maklumat lengkap pelajar
          $dataPelajar = mysqli_query($conn,"Select * from tblpelajar ORDER BY nama ASC");
           $no=1; //mula pembilang
           while($infoPelajar = mysqli_fetch_array($dataPelajar))
            {
            ?>


            <tr>
                <!-- Panggil data ikut lajur -->
                <td> <?php echo $no;   ?></td>
                <td> <?php echo $infoPelajar['IDPELAJAR'];   ?></td>
                <td> <?php echo $infoPelajar['NAMA'];   ?></td>
                <td> <?php echo $infoPelajar['JANTINA'];   ?></td>
      
                <!-- Sedia pautan utk Update ,  Delete dan tambah pelajar-->
                
                <td> 
                <a href="add_bmi.php?kemaskini_id=<?php echo $infoPelajar['IDPELAJAR']; ?>"
                onclick ="return confirm('Anda Pasti?')">Kemaskini BMI</a> |
                <a href="update_pelajar.php?kemaskini_id=<?php echo $infoPelajar['IDPELAJAR']; ?>"
                onclick ="return confirm('Anda Pasti?')">Kemaskini Pelajar</a> |
                <a href="delete_pelajar.php?kemaskini_id=<?php echo $infoPelajar['IDPELAJAR']; ?>"
                onclick ="return confirm('Anda Pasti?')">Hapus Pelajar</a>
            </td>
        </tr>
        <?php
        $no++;  //increment, tambah data

           }?>
            </table>
            &nbsp
            <center> 
              <button><a href="add_pelajar.php">Daftar Pelajar</a></button>
            </center>
            </center></div><br>

    </article>
</section>
<footer>
    <p>Hak Cipta Terpelihara &copy Unit IPD KVSA</p>
</footer>
</body>
</html>