<?php 
   $xidmetler = new Xidmetler();
   
   $k_data = $xidmetler->K_Getir();
   
   if (@$_GET['status']=="sil") {
   	$Sil = $xidmetler->K_Sil($_GET);
   
   	$Sil ? header("Location: xidmet-kateqoriyalari.php?status=ok") : header("Location xidmet-kateqoriyalari.php?status=no");
   }
   if (@$_GET['status']=="aktiv") {
   	$aktiv = $xidmetler->AktivEt($_GET);
   
   	$aktiv ? header("Location:xidmet-kateqoriyalari.php?status=ok") : header("Location:xidmet-kateqoriyalari.php?status=no");
   }
   if (@$_GET['status']=="deaktiv") {
   	$deaktiv = $xidmetler->DeaktivEt($_GET);
   
   	$deaktiv ? header("Location:xidmet-kateqoriyalari.php?status=ok") : header("Location:xidmet-kateqoriyalari.php?status=no");
   }
   
   if (isset($_POST['k_elave'])) {
   	$xidmetler->K_ElaveEt($_POST) ? header("Location:xidmet-kateqoriyalari.php?status=ok") : header("Location:xidmet-kateqoriyalari.php?status=no");
   }
   
   $sira=$xidmetler->Sira();
   $x = array();
   for ($i=0; $i <count($sira) ; $i++) { 
   	array_push($x,$sira[$i]['sira']);
   }
   
   //mezmun
   
   $m_data = $xidmetler->M_Getir();
   
      if(@$_GET['m_status']=="aktiv"){
         $aktiv = $xidmetler->M_AktivEt($_GET);
         $aktiv ? header("Location:xidmet-mezmunlari.php?status=ok") : header("Location:xidmet-mezmunlari.php?status=no");
      }
      if(@$_GET['m_status']=="deaktiv"){
         $deaktiv = $xidmetler->M_DeaktivEt($_GET);
         $deaktiv ? header("Location:xidmet-mezmunlari.php?status=ok") : header("Location:xidmet-mezmunlari.php?status=no");
      }
      if (@$_GET['m_status']=="sil") {
         $Sil = $xidmetler->M_Sil($_GET);
         $Sil ? header("Location:xidmet-mezmunlari.php?status=ok") : header("Location:xidmet-mezmunlari.php?status=no");
      } 
   
      if (isset($_POST['x_elave'])) {
   	$xidmetler->M_ElaveEt($_POST) ? header("Location:xidmet-mezmunlari.php?status=ok") : header("Location:xidmet-mezmunlari.php?status=no");
      }

      if(@$_GET['data']=="mredakte") {
      $mdata = $xidmetler->RMGetir($_GET['id']);
   }

   if (isset($_POST['x_m_redakte'])) {
	$xidmetler->MRedakteEt($_POST) ? header("Location:xidmet-mezmunlari.php?status=ok") : header("Location:xidmet-mezmunlari.php?status=no");
}
   
   
   
   
   
   
    ?>