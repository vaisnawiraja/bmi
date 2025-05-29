<!DOCTYPE html>
<html>  
<head>
  <title>DASHBOARD GURU</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>KEMASKINI<br>
  &nbsp
  <center><i>Gaya hidup yang cergas dan sihat sepanjang hayat</i></center>
  </header>
  <section>
    <nav>
      <h2>MENU</h2>
      <!-- ini adalah link asas untuk rangka sahaja , akan di upgrade untuk menjadi nav bar yang lebih baik -->
      <ul>
        <br>
        <li><a href="dashboard.php">DASHBOARD</a></li><br>&nbsp
        <li><a href="senarai_semua_pelajar.php">SENARAI PELAJAR</a></li><br>&nbsp
        <li><a href="logout.php">LOGOUT</a></li><br>&nbsp
      </ul>
    </nav>
  <article>
    
  <center>
  <h1 class="title">KEMASKINI MAKLUMAT PELAJAR</h1>&nbsp
  <div class="data">
  <?php
  include 'connection.php';
  include 'pengesahan.php';
 $IDGuru=$_GET['kemaskini_id'];
  $dataPelajar=mysqli_query($conn,"select * from tblbmi where IDBMI='".$_GET['kemaskini_id']."'");
  $infoPelajar=mysqli_fetch_array($dataPelajar);
  echo "<br>";
  echo "Kemaskini rekod untuk: <br>";
  echo "ID Pelajar:".$infoPelajar['IDPELAJAR']."<br>";
  ?>&nbsp

 <fieldset>
  
  <form action="prosesupdate.php" method="POST">
    <br>br
      <label>ID Pelajar</label>
      <input type="text" name="IDPELAJAR" readonly value="<?php echo $infoPelajar['IDPELAJAR'] ?>"></br><br>
      <label>IDBMI</label>
      <input type="text" name="IDBMI" readonly value="<?php echo $infoPelajar['IDBMI'] ?>"></br><br>
      <label>Berat</label>
      <input type="text" name="BERAT" value="<?php echo $infoPelajar['BERAT'] ?>"></br><br>
      <label>Tinggi</label>
      <input type="text" name="TINGGI" value="<?php echo $infoPelajar['TINGGI'] ?>"></br><br>
      <label>TARIKH</label>
      <input type="date" name="TARIKH" value="<?php echo $infoPelajar['TARIKH']?>"></BR><br>
      <input type="text" name="IDGURU" readonly value="<?php echo $infoPelajar['IDGURU'] ?>"></br><br>
      <br><input type="submit" name="submit" value="submit"><br><br>
              <button><a href="dashboard.php">Cancel</a></button><br><br>
    </center>
  </form>
  </fieldset>
  </div>
  </article>
  
</section>
<footer>
  <p>Hak Cipta Terpelihara &copy UNIT IPD KVSA</p>
</footer>
</body>
</html>