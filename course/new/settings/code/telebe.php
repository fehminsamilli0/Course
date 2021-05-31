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

	if (@$_GET['etrafli']=="ok" || @$_GET['redakte']=="ok") {
		$telebe_etrafli = $telebe->Etrafli(@$_GET['id']);
	}

	if (isset($_POST['t_r'])) {
		$id=$_POST['id'];
		$telebe->RedakteEt($_POST) ? header("Location:telebe-redakte.php?redakte=ok&status=ok&id=$id") : header("Location:telebe-redakte.php?redakte=ok&status=no&id=$id");
	}
 ?>