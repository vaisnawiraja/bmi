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
	<nav>
		<h2>
			MENU
		</h2>
		<!--ini adalah link asas untuk rangka sahaja, akan di upgrade untuk menjadi navigation bar yang lebih baik -->

		<ul>
			<li>utama.html</li>
			<li><a href="dashboard.php">dashboard</a></li>
			<li>pengiraanmarkah.html</li>
			<li>bmi.html</li>
			<li>logout.html</li>
		</ul>
	</nav>
	<article>
	<center>
	<h1>Tambah maklumat pelajar</h1>
 <fieldset>
 	<table>
	<form action="prosesInsert_bmi.php" method="post">
			<input type="hidden" name="IDBMI"><br><br>
			<tr>
				<td>ID Pelajar</th><th>:</th><th>
			<input type="text" name="IDPELAJAR"><br><br>
		</td></tr>
			<tr><td>Berat</th><th>:</th><th>
			<input type="text" name="BERAT"><br><br>
		</td></tr>
			<tr>
				<td>Tinggi</th><th>:</th><th>
			<input type="text" name="TINGGI"><br><br>
		</td></tr>
			<tr><td>Tarikh</th><th>:</th><th>
			<input type="date" name="TARIKH"><br><br>
		</td></tr>
			<input type="hidden" name="IDGURU"><br>
			<tr><td><br><input type="submit" name="submit" value="submit"></td></tr>
		</center>
	</form>
	</table>
	</fieldset>
	</article>
</section>
<footer>
	<p>Hak Cipta Terpelihara &copy UNIT IPD KVSA</p>
</footer>
</body>
</html>