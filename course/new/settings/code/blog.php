<?php 

$blog = new Blog();
$data = $blog->Getir();

if (isset($_POST['elv'])) {
	$blog->ElaveEt($_POST) ? header("Location:blog.php?status=ok") : header("Location:blog.php?status=no");
}

if (@$_GET['status']=="aktiv") {
   	$aktiv = $blog->AktivEt($_GET);
   
   	$aktiv ? header("Location:blog.php?status=ok") : header("Location:blog.php?status=no");
   }
   if (@$_GET['status']=="deaktiv") {
   	$deaktiv = $blog->DeaktivEt($_GET);
   
   	$deaktiv ? header("Location:blog.php?status=ok") : header("Location:blog.php?status=no");
   }

   if (@$_GET['status']=="sil"){
   	$Sil = $blog->Sil($_GET);
   	$Sil ? header("Location:blog.php?status=ok") : header("Location:blog.php?status=no");
   }

   if(@$_GET['data']=="redakte") {
      $data = $blog->RGetir($_GET['id']);
   }

   if (isset($_POST['b_redakte'])) {
	$blog->RedakteEt($_POST) ? header("Location:blog.php?status=ok") : header("Location:blog.php?status=no");
}
   

?>