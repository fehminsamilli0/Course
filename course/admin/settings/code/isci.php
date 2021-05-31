
<?php 

$isci = new Isci();
$data = $isci->Getir();


if (isset($_POST['isci_elave'])) {
	$isci->ElaveEt($_POST) ? header("Location:isciler.php?status=ok") : header("Location:isci-elave.php?status=no");
}
if (isset($_POST['isci_redakte'])) {
	$isci->RedakteEt($_POST) ? header("Location:isciler.php?status=ok") : header("Location:isci-elave.php?status=no");
}
if (isset($_POST['maas_elave'])) {
	$isci->MaasElaveEt($_POST) ? header("Location:isciler.php?status=ok") : header("Location:isci-elave.php?status=no");
}

if (@$_GET['status']=="aktiv") {
	$aktiv = $isci->AktivEt($_GET);

	$aktiv ? header("Location:isciler.php?status=ok") : header("Location:isciler.php?status=no");
}

if (@$_GET['status']=="deaktiv") {
	$deaktiv = $isci->DeaktivEt($_GET);

	$deaktiv ? header("Location:isciler.php?status=ok") : header("Location:isciler.php?status=no");
}

if (@$_GET['isci_etrafli']=="ok") {
	$egetir = $isci->EtrafliGetir($_GET['id']);
	$odenis = $isci->OdenisGetir(@$_GET['id']);
}

if (@$_GET['i_redakte']=="ok") {
	$i_getir = $isci->EtrafliGetir($_GET['id']);
}

?>