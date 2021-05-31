<?php 
$haqqinda = new Haqqinda();

$data = $haqqinda->Getir();

if (isset($_POST['h_yenile'])) {
	$x = $haqqinda->Redakte($_POST);
	$x == 1 ? header("Location:haqqinda.php?status=ok") : header("Location:haqqinda.php?status=no");
}


?>