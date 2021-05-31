<?php 
	
	$telebe = new Telebe();
	$telimler = new Telimler();
	$isci = new Isci();
	$tAdlari = $telimler->MezmunGetir();
	$mAdlari = $isci->MuellimGetir();
	$telebeler = $telebe->Getir();

	if (isset($_POST['telebe_elave'])) {
		$telebe->ElaveEt($_POST) ? header("Location:telebeler.php?status=ok") : header("Location:telebeler.php?status=no");
	}

	if (@$_GET['etrafli']=="ok") {
		$telebe_etrafli = $telebe->Etrafli(@$_GET['id']);
	}
 ?>