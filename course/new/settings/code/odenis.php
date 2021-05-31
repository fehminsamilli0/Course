<?php 
$odenis = new Odenis();
$data = [];
$dataumumi = $odenis->Getir();

array_push($data,$dataumumi);

if(isset($_POST['odenis_elave'])){
	$odenis->OdenisElave($_POST) ? header("Location:odenisler.php?status=ok") : header("Location:odenisler.php?status=no");
}

?>