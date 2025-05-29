<?php
//mulakan sesi login
session_start();

//tamatkan sesi login
session_destroy();

echo "<script> window.location ='index.php' </script>";

?>