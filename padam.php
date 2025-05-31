
<!DOCTYPE html>
<html>  
<head>
  <title>DASHBOARD GURU</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>DASHBOARD GURU</header>
<center><i>Gaya hidup yang cergas dan sihat sepanjang hayat</i></center>
<section>
  <!-- Fatini ubah  -->
  <nav class="navbar">
    <ul>
      <li><a href="utama.html" style="color: whitesmoke;">Utama</a></li>
      <li><a href="dashboard.php" style="color: whitesmoke;">Dashboard</a></li>
      <li><a href="pengiraanmarkah.html" style="color: whitesmoke;">pengiraanmarkah.html</a></li>
      <li><a href="bmi.html" style="color: whitesmoke;">bmi.html</a></li>
      <li><a href="logout.html" style="color: whitesmoke;">logout.html</a></li>
    </ul>
  </nav>
  <!-- done -->
  <article>
    <?php
  include 'connection.php';
  include 'pengesahan.php';
  $IDGuru=$_GET['padam_id'];
  $dataPelajar=mysqli_query($conn,"select * from tblbmi where IDBMI='".$_GET['padam_id']."'");
  $infoPelajar=mysqli_fetch_array($dataPelajar);
  echo "<br>";
  ?>
  <center>
  <h1>Kemaskini maklumat pelajar</h1>
 <fieldset>
  <form action="prosesdelete.php" method="post">
      <label>ID Pelajar</label>
      <input type="text" name="IDPELAJAR" readonly value="<?php echo $infoPelajar['IDPELAJAR'] ?>"></br>
      <input type="hidden" name="IDBMI" value="<?php echo $infoPelajar['IDBMI']?>">
      <br><input type="submit" name="submit" value="delete"><br>
      <a href="dashboard.php">Pulang ke dashboard</a>
    </center>
  </form>
  </fieldset>
  </article>
</section>
<footer>
  <p>Hak Cipta Terpelihara &copy UNIT IPD KVSA</p>
</footer>
</body>
</html>