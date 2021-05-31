<?php 

$telimler = new Telimler();

$data = $telimler->Getir();
$mezmun_data = $telimler->MezmunGetir();

$sira=$telimler->Sira();
$x = array();
for ($i=0; $i <count($sira) ; $i++) { 
	array_push($x,$sira[$i]['sira']);
}

if (isset($_POST['t_k_elave'])) {
	$telimler->ElaveEt($_POST) ? header("Location:telim-kateqoriyalari.php?status=ok") : header("Location:telim-kateqoriyalari.php?status=no");
}

if (@$_GET['statusad']!=null) {
	$st = $telimler->Status($_GET);
	$loc = $_GET['table']=="telim_kat" ? "telim-kateqoriyalari" : "telim-mezmunlari";
	$st ? header("Location:$loc.php?status=ok") : header("Location:$loc.php?status=no");
}

if (@$_GET['status']=="sil") {
	$Sil = $telimler->KSil($_GET);

	$Sil ? header("Location:telim-kateqoriyalari.php?status=ok") : header("Location:telim-kateqoriyalari.php?status=no");
}


if (isset($_POST['t_elave'])) {
	$telimler->Telim_elave($_POST) ? header("Location:telim-mezmunlari.php?status=ok") : header("Location:telim-mezmunlari.php?status=no");
}

if (@$_GET['data']=="mredakte") {
	$mdata = $telimler->RMGetir($_GET['id']);
}

if (isset($_POST['t_m_redakte'])) {
	$telimler->MRedakteEt($_POST) ? header("Location:telim-mezmunlari.php?status=ok") : header("Location:telim-mezmunlari.php?status=no");
}

?>