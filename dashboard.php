<!DOCTYPE html>
<html>
<head>
  <title>DASHBOARD GURU</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php 
include "connection.php";// sambung ke pangkalan data
include "pengesahan.php";//check user 
$NAMAGURU=$_SESSION['sUsername'];//ambil id utk pass value
?>
  <header> DASHBOARD GURU <br>
  &nbsp
  <center><i>Gaya hidup yang cergas dan sihat sepanjang hayat</i></center>
  </header>
  <section>

    <!-- Fatini ubah  -->
    <nav class="navbar">
      <ul>
        <li><a href="dashboard.php">DASHBOARD</a></li>
        <li><a href="senarai_semua_pelajar.php">SENARAI PELAJAR</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
      </ul>
    </nav>
    <!-- last -->

    <article>
       <h1 class="title"><center>DASHBOARD GURU</center></h1>
       <?php
       //papar maklumat lengkap pengguna (GURU)
       $dataGuru=mysqli_query($conn,"select * from tblguru where NAMAGURU='$NAMAGURU'");
       $paparDataGuru=mysqli_fetch_array($dataGuru);
     ?><br>
     <div class="data">
     ID Guru : <?php echo $paparDataGuru['IDGURU'];?><br>
     Nama Guru : <?php echo $paparDataGuru['NAMAGURU'];?><br>
     Username  : <?php echo $paparDataGuru['IDGURU'];?><br>
     Password : <?php echo $paparDataGuru['PASSWORD'];?>
     <br>
     <br>

     <!..menyediakan ruang jadual-kotak --> 
       <!-- cipta jadual (table) untuk paparan maklumat papar senarai pelajar -->
       <!-- papar data yang dimasukkan oleh cikgu tersebut -->
       <center>
       <table border="1px solid black" align="center">
    <h1>SENARAI NAMA PELAJAR BERDAFTAR DENGAN <?php echo $paparDataGuru['NAMAGURU'];?></h1>
     <br>
     <br>
         <tr>
           <th width="40">BIL</th>
           <th width="100">ID PELAJAR</th>
           <th width="100">TARIKH</th>
           <th width="50">BERAT</th>
           <th width="50">TINGGI</th>
           <th colspan="2">TINDAKAN</th>

 
       
     <?php 
     $ID = $paparDataGuru['IDGURU'];
     //papar maklumat lengkap pelajar
     $dataPelajar=mysqli_query($conn,"select * from tblbmi where IDGURU='$ID' ORDER by Tarikh DESC");
     $no=1;//mula pembilang
     while ($infoPelajar=mysqli_fetch_array($dataPelajar)) {
     
     ?>
     <tr>
     </center>
       <!--panggil data ikut lajur-->
       <td><?php echo $no;?></td>
       <td><?php echo $infoPelajar['IDPELAJAR'];?></td>
       <td><?php echo $infoPelajar['TARIKH'];?></td>
       <td><?php echo $infoPelajar['BERAT'];?></td>
       <td><?php echo $infoPelajar['TINGGI'];?></td>
       <!-- sedia pautan utk Update dan Delete-->
       <td><a href="kemaskini.php?kemaskini_id=<?php echo $infoPelajar['IDBMI'];?>"onclick="return confirm('Anda Pasti ?')">Kemaskini</a></td>
       <td><a href="padam.php?padam_id=<?php echo $infoPelajar['IDBMI'];?>"onclick="return confirm('Anda Pasti ?')">Padam</a></td>
     </tr>
     <?php 
     $no++;//increment , tambah data
   }?>
   </table>
   <center>
    <br>
 </div>
</article>
</section>
  <footer>
    <p>Hak Cipta Terpelihara &copy Unit IPD KVSA</p>
  </footer>
</body>
</html>