<?php
//page ini untuk semak session apabila user log masuk
session_start();
//semak user adakah user sama dengan list user dalam pangkalan data
//jika bukan user, arahkan user log masuk semula
if (!isset($_SESSION['sUsername'])) {
	echo "Anda tidak dibenarkan log masuk <br>";
	echo "<button onlick=kembali()>Masuk Semula";
	echo '<script> 
	function kembali()
	{window.location.href="http://localhost/projek/logmasuk.php"};</};</script>';// gunakan '' daripada "" supaya tak jadi komen selepas :
	//exit ini akan putuskan talian dengan current page.
	exit(0);
}
?>