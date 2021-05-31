<?php 
   $portfolio = new Portfolio();
   
   $k_data = $portfolio->K_Getir();
   
   if (@$_GET['status']=="sil") {
   	$Sil = $portfolio->K_Sil($_GET);
   
   	$Sil ? header("Location: portfolio-kateqoriyalari.php?status=ok") : header("Location portfolio-kateqoriyalari.php?status=no");
   }
   if (@$_GET['status']=="aktiv") {
   	$aktiv = $portfolio->AktivEt($_GET);
   
   	$aktiv ? header("Location:portfolio-kateqoriyalari.php?status=ok") : header("Location:portfolio-kateqoriyalari.php?status=no");
   }
   if (@$_GET['status']=="deaktiv") {
   	$deaktiv = $portfolio->DeaktivEt($_GET);
   
   	$deaktiv ? header("Location:portfolio-kateqoriyalari.php?status=ok") : header("Location:portfolio-kateqoriyalari.php?status=no");
   }
   
   if (isset($_POST['k_elave'])) {
   	$portfolio->K_ElaveEt($_POST) ? header("Location:portfolio-kateqoriyalari.php?status=ok") : header("Location:portfolio-kateqoriyalari.php?status=no");
   }
   
   $sira=$portfolio->Sira();
   $x = array();
   for ($i=0; $i <count($sira) ; $i++) { 
   	array_push($x,$sira[$i]['sira']);
   }
   
   //mezmun
   
   $m_data = $portfolio->M_Getir();
   
      if(@$_GET['m_status']=="aktiv"){
         $aktiv = $portfolio->M_AktivEt($_GET);
         $aktiv ? header("Location:portfolio-mezmunlari.php?status=ok") : header("Location:portfolio-mezmunlari.php?status=no");
      }
      if(@$_GET['m_status']=="deaktiv"){
         $deaktiv = $portfolio->M_DeaktivEt($_GET);
         $deaktiv ? header("Location:portfolio-mezmunlari.php?status=ok") : header("Location:portfolio-mezmunlari.php?status=no");
      }
      if (@$_GET['m_status']=="sil") {
         $Sil = $portfolio->M_Sil($_GET);
         $Sil ? header("Location:portfolio-mezmunlari.php?status=ok") : header("Location:portfolio-mezmunlari.php?status=no");
      } 
   
      if (isset($_POST['x_elave'])) {
   	$portfolio->M_ElaveEt($_POST) ? header("Location:portfolio-mezmunlari.php?status=ok") : header("Location:portfolio-mezmunlari.php?status=no");
      }

      if(@$_GET['data']=="mredakte") {
      $mdata = $portfolio->RMGetir($_GET['id']);
   }

   if (isset($_POST['p_m_redakte'])) {
	$portfolio->MRedakteEt($_POST) ? header("Location:portfolio-mezmunlari.php?status=ok") : header("Location:portfolio-mezmunlari.php?status=no");
}
   
   
   
   
   
   
    ?>