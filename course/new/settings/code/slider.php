<?php 

$slider = new Slider();

$data = $slider->Getir();

if (isset($_POST['s_elave'])) {
	$elave = $slider->ElaveEt($_POST);

	$elave ? header("Location:slider.php?status=ok") : header("Location:slider.php?status=no");
}

if (@$_GET['status']=="aktiv") {
	$aktiv = $slider->AktivEt($_GET);

	$aktiv ? header("Location:slider.php?status=ok") : header("Location:slider.php?status=no");
}

if (@$_GET['status']=="deaktiv") {
	$deaktiv = $slider->DeaktivEt($_GET);

	$deaktiv ? header("Location:slider.php?status=ok") : header("Location:slider.php?status=no");
}

if (@$_GET['status']=="sil") {
	$Sil = $slider->Sil($_GET);

	$Sil ? header("Location:slider.php?status=ok") : header("Location:slider.php?status=no");
}

?>